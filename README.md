# Laravel cms in docker environment

## Ports:
http://localhost/
http://localhost:8001/

## Commands to remember:
docker compose up -d
docker exec -it laravel-cms-laravel.test-1
composer install (inside docker exec)
php artisan migrate:refresh --seed (for seeding database with test data from factories)

## Other reminder things:
Copy .env.example and paste a password for mysql
php artisan key:generate (inside docker exec)

