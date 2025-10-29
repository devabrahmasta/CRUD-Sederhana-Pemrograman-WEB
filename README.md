# 🎬 Proyek CRUD Manajemen Film Sederhana

Selamat datang di proyek tugas praktikum Pemrograman Web! 👋

Ini adalah aplikasi web super sederhana yang dibuat untuk mendemonstrasikan fungsionalitas **CRUD (Create, Read, Update, Delete)**. Aplikasi ini memungkinkan pengguna untuk mengelola daftar koleksi film.

## ✨ Fitur Utama

* **Create:** Menambahkan data film baru ke dalam database.
* **Read:** Menampilkan semua data film yang ada dalam tabel yang rapi.
* **Update:** Mengedit dan memperbarui informasi film yang sudah ada.
* **Delete:** Menghapus data film dari database (lengkap dengan konfirmasi!).

---

### 🛠️ Teknologi yang Digunakan

Ini adalah "peralatan" yang saya gunakan untuk membangun proyek ini!

* **🌀 Backend & Logika Server:**
    * `PHP` (Digunakan untuk semua pemrosesan data, koneksi database, dan logika C-R-U-D).
* **🗃️ Database:**
    * `MySQL / MariaDB` (Skema database `db_film` digunakan untuk menyimpan semua data film, seperti judul, genre, dll.).
* **🎨 Frontend & Styling:**
    * `HTML5` (Sebagai kerangka utama di setiap halaman seperti `index.php`, `tambah.php`, dan `edit.php`).
    * `Bootstrap 5` (Dipakai untuk mempercantik tampilan tabel, form, dan navigasi dengan cepat).
    * `JavaScript` (Sentuhan kecil untuk memunculkan *alert* konfirmasi sebelum menghapus data).

---

### 🚀 Cara Menjalankan Proyek Ini

1.  Pastikan kamu sudah menginstal Web Server lokal seperti **XAMPP**, **MAMP**, atau **LAMPP**.
2.  Letakkan semua file proyek ini ke dalam folder `htdocs` (jika menggunakan XAMPP) atau folder *public root* web server-mu.
3.  Buka **phpMyAdmin** (biasanya di `http://localhost/phpmyadmin`).
4.  Buat database baru dengan nama `db_film`.
5.  Pilih database `db_film` tersebut, lalu impor file `db_film.sql` yang ada di dalam folder proyek ini.
6.  Buka file `connection.php` dan pastikan pengaturan `$host`, `$username`, dan `$password` sudah sesuai dengan konfigurasi MySQL di komputermu (standarnya sudah `localhost` dan `root`).
7.  Buka browser dan akses proyekmu (contoh: `http://localhost/nama-folder-proyek-kamu/`).
8.  Selesai! Aplikasi siap digunakan.
