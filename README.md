## features
- Pencarian berdasarkan title,city dan category
- Lowongan kerja terbaru
- Perusahaan unggulan
- Admin Dashboard

## requirements
- php 8.0.2
- database mysql
- laravel 10.0
- laragon
- chrome
- composer

## installation

1. Clone repositori
    ```sh
    git https://github.com/fahmyfauzi/laravel_didamelid.git
    ```
2. masuk ke dalam directori
    ```sh
    cd laravel_didamelid
    ```
3. Instal composer
    ```sh
    composer install
    or
    composer update
    ```
4. Copy file .env.example 
    ```
    cp .env.example .env
    ```
4. Generate an app encryption key

    ```sh
    php artisan key:generate
    ```
5. Create database on your computer or phpMyAdmin
6. In the .env file, add database information to allow Laravel to connect to the database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_didamelid
    DB_USERNAME=DB_USERNAME
    DB_PASSWORD=DB_PASSWORD
    ```
    
6. migrasi database
    ```
    php artisan migrate --seed
    ```
7. install package
    ```
    npm install
    npm run build
    ```
    
8. jalankan project
    ```sh
   php artisan serve
    ```


## usage
- buka chrome masukan link ```laravel_didamelid.test``` atau ``` http://127.0.0.1:8000/ ```
- akses ```laravel_didamelid.test/login``` atau ``` laravel_didamelid.test/register ```
- login dan coba fitur-fiturnya
