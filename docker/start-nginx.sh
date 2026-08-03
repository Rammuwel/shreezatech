#!/bin/sh
# Wait for PHP-FPM to accept connections before starting nginx,
# preventing 502 Bad Gateway when the container cold-starts on Vercel.
for i in $(seq 1 60); do
    if php -r 'exit(@fsockopen("127.0.0.1", 9000) ? 0 : 1);' 2>/dev/null; then
        break
    fi
    sleep 1
done

exec nginx -g "daemon off;"
