This project used passport authentication extension.

**For API Documentation :** https://documenter.getpostman.com/view/5560754/RzthSXZs

**Installation** 

composer install<br />
cp .env.example .env<br />
Set mysql options in .env file<br />
php artisan migrate<br />
php artisan key:generate<br />
php artisan passport:install<br />
php artisan db:seed<br />
