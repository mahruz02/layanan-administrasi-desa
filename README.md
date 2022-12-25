guide instalasi

install xampp dengan versi php 8 keatas https://www.apachefriends.org/download.html
install composer https://getcomposer.org/download/
start xampp

buka project lalu run perintah berikut
1. composer update
2. copy env.example to .env
2. setting name, username, dan pass DB_DATABASE on env
3. php artisan key:generate
4. create database
5. import desa_kramatan.sql to database
6. run with php artisan serve

admin login 
http://localhost:8000/admin/login
email   : admin@gmail.com
pass    : 123

warga login
email   : 123@gmail.com
pass    : 123