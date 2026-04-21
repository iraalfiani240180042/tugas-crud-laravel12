# Aplikasi CRUD Buku (Laravel)

## Deskripsi

Aplikasi CRUD Buku adalah sistem sederhana berbasis web yang digunakan untuk mengelola data buku.
Aplikasi ini dibuat menggunakan framework Laravel dan menerapkan konsep CRUD (Create, Read, Update, Delete).

Pengguna dapat menambahkan data buku, melihat daftar buku, mengedit data, serta menghapus data buku melalui antarmuka web.

---

## Tujuan

Untuk memenuhi tugas CRUD menggunakan laravel v12

---

## Fitur

* Buat (Tambah data)
* Baca (Tampilkan data)
* Perbarui(Edit data)
* Hapus (Hapus data buku)

---

## Teknologi yang Digunakan

* PHP
* Laravel
* MySQL


---

##  Prosedur Instalasi

1. Clone repository

```bash
git clone https://github.com/username/crud-buku.git
```

2. Masuk ke folder project

```bash
cd crud-buku
```

3. Install dependency

```bash
composer install
```

4. Copy file environment

```bash
cp .env.example .env
```

5. Konfigurasi database pada file `.env`

```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

6. Generate application key

```bash
php artisan key:generate
```

7. Jalankan migrasi database

```bash
php artisan migrate
```

8. Jalankan server

```bash
php artisan serve
```

---

## Cara Menjalankan Aplikasi

1. Buka browser
2. Akses alamat berikut:

```
http://127.0.0.1:8000/buku
```

3. Gunakan fitur CRUD yang tersedia

---

## Struktur Data Buku

Field yang digunakan:

* id
* judul
* penulis
* tahun

---


## Author

* Nama: Ira alfiani
* NIM: 240180042

---


