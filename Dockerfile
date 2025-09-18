FROM php:8.2-apache

# Install dependencies and clients
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    default-mysql-client \
    postgresql-client \
    libpq-dev \
    git \
    curl \
    --no-install-recommends \
  && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Apache config: enable rewrite and headers; allow .htaccess overrides
RUN a2enmod rewrite headers \
  && echo "ServerName localhost" >> /etc/apache2/apache2.conf \
  && sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Copy app (optional if you prefer volumes) — safe to leave since you mount ./app in dev
COPY ./app /var/www/html

# Run composer if composer.json exists
RUN if [ -f composer.json ]; then composer install --no-dev --no-interaction --prefer-dist; fi
