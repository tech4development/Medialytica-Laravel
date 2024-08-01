# Use the official PHP 8.2.0 FPM image
FROM php:8.2-fpm

# Set the working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update -y && apt-get install -y \
    git \
    unzip \
    zip \
    libicu-dev \
    libpng-dev \
    zlib1g-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install gettext intl pdo_mysql gd

# Configure GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy only the composer files and run composer install
COPY composer.json composer.lock /var/www/html/
RUN composer install --no-dev --optimize-autoloader

# Copy the rest of the application code
COPY . /var/www/html

# Set permissions
RUN chmod +x /var/www/html/artisan \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
