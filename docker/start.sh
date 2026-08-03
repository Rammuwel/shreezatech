#!/bin/sh
set -e

# Vercel injects env vars directly. Never generate a .env with fake defaults,
# because Vercel's filesystem is wiped on every cold start and key:generate
# would create a new APP_KEY each boot (breaking Livewire/sessions).
if [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is not set. Set APP_KEY in your host's environment variables." >&2
    exit 1
fi

php /app/artisan storage:link --force 2>/dev/null || true

if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    php /app/artisan migrate --force
fi

php /app/artisan config:cache
php /app/artisan route:cache
php /app/artisan view:cache

chown -R www-data:www-data /app/storage /app/bootstrap/cache

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
