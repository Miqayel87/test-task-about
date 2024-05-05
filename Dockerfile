# Use the official PHP image as base
FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli mbstring xml tokenizer

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy composer.json and composer.lock
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-scripts --no-autoloader

# Copy application files
COPY . .

# Generate autoload files
RUN composer dump-autoload --no-scripts --no-dev --optimize

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
