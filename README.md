<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Setup

Follow the steps below to download, install, and run the project:

```bash
git clone https://github.com/vehicle-management.git
cd vehicle-management

composer install
npm install

php artisan migrate
php artisan db:seed --class=RolesTableSeeder

php artisan serve
npm run dev
