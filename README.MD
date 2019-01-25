This project used passport authentication extension.

**For API Documentation :** https://documenter.getpostman.com/view/5560754/RzthSXZs

**Installation** 

composer install
cp .env.example .env
Set mysql options in .env file
php artisan migrate
php artisan key:generate
php artisan passport:install
php artisan db:seed