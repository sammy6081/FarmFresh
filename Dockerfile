FROM php:8.2-apache

# Install extensions and tools
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy app code (optional, since we use volume)
COPY ./app /var/www/html

# Run Composer if composer.json exists
WORKDIR /var/www/html
RUN if [ -f composer.json ]; then composer install --no-dev; fi

# Apache config (enable rewrite if needed)
RUN a2enmod rewrite
# Set ServerName to suppress warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# Enable .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf