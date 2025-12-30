# Stage 1 - Frontend builder (Node / Vite)
FROM node:18 AS frontend
WORKDIR /app

# Install frontend deps and build
COPY package*.json ./
RUN npm ci --silent
COPY . .
RUN npm run build

# Stage 2 - PHP backend (Laravel)
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y git curl unzip libpq-dev libonig-dev libzip-dev zip libxml2-dev --no-install-recommends \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl \
    && pecl install redis || true \
    && docker-php-ext-enable redis || true \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application files

# Copy built frontend assets from the frontend stage
COPY --from=frontend /app/public ./public

# Install PHP dependencies and optimize for production
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Laravel optimizations (run in build; safe to ignore failures)
RUN php artisan config:cache || true && php artisan route:cache || true && php artisan view:cache || true

EXPOSE 9000
CMD ["php-fpm"]
