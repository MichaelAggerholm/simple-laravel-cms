# Laravel cms in docker environment

## Ports:
http://localhost/<br />
http://localhost:8001/<br />
http://localhost/console/dashboard/<br />

## Install:
cd simple-laravel-cms<br />
sudo mv .env.example .env<br />
composer install<br />
php artisan key:generate<br />
./vendor/bin/sail up<br />
docker exec -it simple-laravel-cms-laravel.test-1 /bin/bash<br />
php artisan storage:link<br />
php artisan migrate:refresh --seed<br />

## Other reminder things:
Use one of the seeded emails from db to login, the password will always be "password" when using seeded data.<br />


