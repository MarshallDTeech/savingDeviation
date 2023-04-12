#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html
composer update

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

php artisan serve

# echo "Running migrations..."
# php artisan migrate --force