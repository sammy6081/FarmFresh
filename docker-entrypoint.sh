#!/bin/sh
set -e

echo "🚀 Entrypoint: starting up..."

# If composer.json exists and vendor is missing, run composer install (useful when mounting volume)
if [ -f /var/www/html/composer.json ] && [ ! -d /var/www/html/vendor ]; then
  echo "==> composer.json found and vendor missing — running composer install"
  cd /var/www/html
  composer install --no-dev --no-interaction --prefer-dist || true
  chown -R www-data:www-data /var/www/html
fi

# Optional: if a Postgres init SQL is present in the app's db folder, try to apply it from the web container.
# Note: This is optional and safe — it will only run if the file exists.
if [ -f /docker-entrypoint-initdb.d/init_pg.sql ]; then
  echo "📦 Found init_pg.sql — attempting to load into Postgres (may require DB up and reachable)..."
  # Retry loop (gives DB container time to become ready)
  COUNT=0
  MAX=12
  until psql -h "${DB_HOST:-db}" -U "${DB_USER:-appuser}" -d "${DB_NAME:-farmfresh}" -f /docker-entrypoint-initdb.d/init_pg.sql || [ $((COUNT++)) -ge $MAX ]; do
    echo "Waiting for Postgres to be ready... (${COUNT}/${MAX})"
    sleep 2
  done || true
fi

echo "✅ Entrypoint finished — starting Apache"
exec apache2-foreground
# End of docker-entrypoint.sh