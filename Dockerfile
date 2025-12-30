# Stage 1 - Frontend builder (Node / Vite)
FROM node:18 AS frontend
WORKDIR /app

# Install frontend deps and build
COPY package*.json ./
RUN npm ci --silent
COPY . .
RUN npm run build --silent

# Stage 2 - PHP backend (Laravel) with nginx
FROM php:8.2-fpm

ENV DEBIAN_FRONTEND=noninteractive

# Install system deps, nginx and PHP extensions
RUN apt-get update \
    && apt-get install -y git curl unzip libpq-dev libonig-dev libzip-dev zip nginx supervisor --no-install-recommends \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl \
    && pecl install redis || true \
    && docker-php-ext-enable redis || true \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application files
COPY . .

# Copy built frontend assets from Stage 1
COPY --from=frontend /app/public ./public

# Install PHP dependencies and set permissions
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Force php-fpm to listen on TCP 127.0.0.1:9000 and copy nginx/supervisord configs
RUN sed -i "s/^listen =.*/listen = 127.0.0.1:9000/" /usr/local/etc/php-fpm.d/www.conf || true
COPY nginx/default.conf /etc/nginx/conf.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose HTTP
EXPOSE 80

# Start supervisord to run nginx + php-fpm
CMD ["/usr/bin/supervisord","-c","/etc/supervisor/conf.d/supervisord.conf"]
