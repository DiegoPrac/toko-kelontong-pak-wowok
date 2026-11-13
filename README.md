
# Toko Kelontong Pak Wowok

## Deskripsi
Aplikasi web sederhana untuk mencatat dan mengelola data produk di Toko Kelontong Pak Wowok.

Aplikasi ini dibuat untuk mengerjakan Study Case 3 pada materi View Blade dan Eloquent ORM dalam mata kuliah Pemrograman Web, Program Studi Teknologi Informasi, Universitas Jember.

## Teknologi yang Digunakan
- Laravel
- PHP
- MySQL
- Blade
- Eloquent ORM
- CSS sederhana

## Fitur Aplikasi
1. Dashboard yang menampilkan jumlah produk dan total stok.
2. Menampilkan daftar produk beserta kategorinya.
3. Menambahkan produk baru.
4. Melihat detail produk.
5. Mengubah data produk.
6. Menghapus produk.
7. Mencari produk berdasarkan nama.
8. Menampilkan kondisi stok tersedia atau habis.

## Struktur Database

Aplikasi menggunakan dua tabel utama:

**categories**
- id
- name

**products**
- id
- category_id
- name
- price
- stock

Relasi yang digunakan:
- Category menggunakan hasMany untuk produk.
- Product menggunakan belongsTo untuk kategori.

## Cara Menjalankan

1. Clone repository dan masuk ke folder proyek.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Sesuaikan pengaturan database MySQL pada `.env`.
5. Buat database MySQL sesuai nama yang ditulis pada `.env`.
6. Jalankan `php artisan key:generate`.
7. Jalankan `php artisan migrate`.
8. Jalankan `php artisan db:seed`.
9. Jalankan `php artisan serve`.
10. Buka `http://127.0.0.1:8000` di browser.

## Contoh Data

Produk yang digunakan saat pengujian:
- Nama: Beras 5 kg
- Kategori: Sembako
- Harga: Rp68.000
- Stok: 12

## Pembuat
Diego Valentino Augusta

Program Studi Teknologi Informasi
Fakultas Ilmu Komputer
Universitas Jember
