1. Install [XAMPP](https://www.apachefriends.org/download.html)  
2. Install [Composer](https://getcomposer.org/download/)  
3. Install laravel  
`` composer global require laravel/installer ``  
Pada direktori C:\xampp\htdocs\ ``laravel new your-project-name``
4. Buka dengan teks editor kesukaanmu (Sublime, Atom, Visual Code dll)
5. Buat database contoh : ``passportsystem``
6. Konfigurasi .env 
```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=passportsystem
DB_USERNAME=root
DB_PASSWORD=```