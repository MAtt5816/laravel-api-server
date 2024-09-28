#!/bin/sh
set -e
shift
until mariadb -h "${DB_HOST}" -u "${DB_USERNAME}" -p"${DB_PASSWORD}" "${DB_DATABASE}" -e 'select 1'; do
  sleep 3
done
php artisan migrate
exec "$@"
