FROM node:22-alpine AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

FROM php:8.2-fpm-alpine
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN apk add --no-cache \
        nginx \
        supervisor \
        libzip-dev \
        sqlite-dev \
        oniguruma-dev \
        postgresql-dev \
    && docker-php-ext-install \
        bcmath \
        ctype \
        mbstring \
        pdo_pgsql \
        zip \
    && docker-php-ext-enable opcache

WORKDIR /app
COPY composer.json composer.lock ./
COPY . .
COPY --from=frontend /app/public/build /app/public/build
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/start.sh /start.sh

RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress \
    && chmod +x /start.sh \
    && chown -R www-data:www-data /app/storage /app/bootstrap/cache \
    && chmod -R 775 /app/storage /app/bootstrap/cache

EXPOSE 80
ENTRYPOINT ["/start.sh"]
