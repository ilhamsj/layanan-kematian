1. Install [XAMPP](https://www.apachefriends.org/download.html)  
2. Install [Composer](https://getcomposer.org/download/)  
3. Install laravel  
`` composer global require laravel/installer ``  
Pada direktori ``C:\xampp\htdocs\``  
Lewat terminal ketikkan perintah ``laravel new your-project-name``
4. Buka dengan teks editor kesukaanmu (Sublime, Atom, Visual Code dll)
5. Buat database contoh : ``passportsystem``
6. Konfigurasi .env 
``DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=passportsystem
DB_USERNAME=root
DB_PASSWORD= 
``
8. ``php artisan make:model Passport -m`` akan membuat file [Passport.php](database/migrations/2018_12_11_133435_create_passports_table.php) dan [create_passports_table](app/Passport.php)
9. Tambahkan di [AppServiceProvider.php](app/Providers/AppServiceProvider.php)
`` use Illuminate\Support\Facades\Schema; ``  

`` Schema::defaultStringLength(191);``
10. ``php artisan migrate``