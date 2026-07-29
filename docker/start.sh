#!/bin/sh
set -e

if [ ! -f /app/.env ]; then
    cp /app/.env.example /app/.env
    php /app/artisan key:generate --force
fi

php /app/artisan storage:link --force 2>/dev/null || true

php /app/artisan migrate --force

php /app/artisan config:cache
php /app/artisan route:cache
php /app/artisan view:cache

chown -R www-data:www-data /app/storage /app/bootstrap/cache

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
