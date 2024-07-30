
# Project Title

A brief description of what this project does


## Installation

1. Set up environment. Jalankan perintah berikut di terminal
```bash
  mv .env.example .env
```

2. Setelah itu isi DB_DATABASE sesuai dengan nama database yang telah dibuat

3. Mengisi APP_KEY agar aplikasi dapat berjalan dengan menjalankan perintah berikut:
```
php artisan key:generate
```
4. Migrasi atau push tabel ke database yang telah dibuat dengan cara menjalankan perintah:
```
php artisan db:fresh --seed
```
5. Jalankan aplikasi di local dengan cara menjalankan perintah:
```
php artisan serve
```