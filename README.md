## Tradfallning


## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher


## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel8-for-beginners.git
cd laravel8-for-beginners
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database cars;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cars
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```	

## Credits due where credits due…
Thanks to [Laravel]( https://laravel.com/) for giving me the opportunity to make this tutorial. I would also like to thank the [Tailwind]( https://tailwindcss.com/) developers for giving us an incredible CSS framework which made my life as a content creator, a lot easier.
