Website layanan desa

fitur : 1. crud layanan KTP, SKU, KK. 
        2. multi user (admin and warga)
        3. print surat pengantar

how to install
1. composer install
2. cp .env.example .env
3. setting DB_DATABASE to desa_kramatan on env
4. php artisan key:generate
5. import desa_kramatan.sql to database
6. run with php artisan serve

admin login 
http://localhost:8000/admin/login
email   : admin@gmail.com
pass    : 123

warga login
email   : 123@gmail.com
pass    : 123