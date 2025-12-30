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

# Install system dependencies, nginx and PHP extensions
RUN apt-get update \
    && apt-get install -y git curl unzip libpq-dev libonig-dev libzip-dev zip libxml2-dev nginx supervisor --no-install-recommends \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl \
    && pecl install redis || true \
    && docker-php-ext-enable redis || true \
    && rm -rf /var/lib/apt/lists/* \
    && mkdir -p /var/log/supervisor

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application files
# --- KEY FIXES START HERE ---

# 1. Copy composer files first to leverage Docker cache
COPY composer.json composer.lock ./

# 2. Install dependencies (without scripts yet, as code isn't copied)
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist

# 3. Now copy the rest of the application code
COPY . .

# 4. Copy built frontend assets from the frontend stage
COPY --from=frontend /app/public/build ./public/build

# 5. Run optimization and set permissions
RUN composer dump-autoload --optimize --no-dev \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy built frontend assets from the frontend stage
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies and optimize for production
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Laravel optimizations (run in build; safe to ignore failures)
RUN php artisan config:cache || true && php artisan route:cache || true && php artisan view:cache || true

# Expose HTTP (nginx) and php-fpm (internal)
EXPOSE 80 9000

# Copy nginx config and supervisord config then run supervisord to manage nginx + php-fpm
COPY nginx/default.conf /etc/nginx/conf.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

CMD ["/usr/bin/supervisord","-c","/etc/supervisor/conf.d/supervisord.conf"]
