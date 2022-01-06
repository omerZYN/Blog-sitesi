# Blog-sitesi

Installation

Setting up your development environment on your local machine :

$ git clone https://github.com/omerZYN/Blog-sitesi.git

$ cd Blog-sitesi

$ cd auth

$ composer install

$ npm install

$ cp .env.example .env

$ php artisan key:generate

$ php artisan storage:link

$ php artisan migrate

$ php artisan db:seed 

//if take this "SQLSTATE[23000]: Integrity constraint violation:" error, repeat "$ php artisan db:seed" one more time

$ php artisan serve


