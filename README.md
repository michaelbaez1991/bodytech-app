<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## BASE DE DATOS Y HERRAMIENTAS USADAS
* SQlite
* Bootstrap
* Jquery

## PASOS PARA LEVANTAR EL AMBIENTE
* Clonar el repositorio
* Ejecutar composer install (Debe tener instalado Composer en el equipo)
* Configuracion de la conexion a la base de datos:
    DB_CONNECTION=sqlite
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_USERNAME=root
    DB_PASSWORD=

* Ejecutar npm install (Debe tener instalado NodeJs en el equipo)
* Ejecutar npm run dev
* Disparar las migraciones con el comando "php artisan migrate"
* Escribir el comando "php artisan db:seed", para agregar datos de prueba y datos a carga en selects
* Y por ultimo levantar el servidor local, con el comando "php artisan serve"