<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


Steps for setup of laravel project

- Server Setup for PHP Project
- Install apache2, php 8.1 etc 
- Install composer
- [git clone the project](https://github.com/saibVSquare/Practice-laravel-10.git)
- Update .env file according like database name or password
- Create database with same name in the .env file in your database (workbench,Phpmyadmin) 
- Run the command to migrate the tables into the database "php artisan migrate".
- Run the command to serve the project "php artisan serve".
- [get postman collection](https://red-space-679516.postman.co/workspace/Personal-Workspace~29be147a-338f-405b-aa6b-41a1af7d93c6/folder/17217782-3d31479f-482f-4699-b9ac-03f182ae3eec?ctx=documentation) 


Folder Structure

- Controller exist in "App/Http/Controller".
- Model that link with tables exist in "App/Models".
- Routes for web or api are exist in the "routes/web.php" or "routes/api.php"
- Tables are exist in the "Database/Migrations".


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
