# Use an official PHP 8.1 runtime as a parent image
FROM php:8.1-fpm

# Set the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Install any needed packages
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run Composer install
RUN composer install --no-interaction --no-scripts --no-dev --prefer-dist

# Copy the application configuration file
COPY .env.example .env

# Generate the application key
RUN php artisan key:generate

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]