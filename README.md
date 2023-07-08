# Laravel cms in docker environment

## Ports:
http://localhost/<br />
http://localhost:8001/<br />

## Commands to remember:
docker compose up -d<br />
docker exec -it simple-laravel-cms-laravel.test-1<br />
composer install (inside docker exec)<br />
php artisan migrate:refresh --seed (for seeding database with test data from factories)<br />

## Other reminder things:
Copy .env.example and paste a password for mysql<br />
php artisan key:generate (inside docker exec)<br />

