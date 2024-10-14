FROM php:8.3-fpm-alpine3.19

# Install system dependencies
RUN apk add --no-cache \
  bash \
  curl \
  libpng-dev \
  libzip-dev \
  zlib-dev

# Install PHP extensions
RUN docker-php-ext-install gd \
  && docker-php-ext-install zip \
  && docker-php-ext-install mysqli pdo pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install node and npm
RUN apk add --no-cache nodejs npm

# Set working directory
WORKDIR /var/www

# Create storage and bootstrap/cache directories if they do not exist
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
  && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
  && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000