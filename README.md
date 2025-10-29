# 🎬 Proyek CRUD Manajemen Film (Tugas Praktikum)

Selamat datang di repositori proyek tugas praktikum Pemrograman Web.

Proyek ini merupakan aplikasi web sederhana yang dibangun untuk mendemonstrasikan fungsionalitas dasar **CRUD (Create, Read, Update, Delete)** dengan studi kasus pengelolaan data koleksi film.

## ✨ Fitur Utama

Aplikasi ini memiliki beberapa fitur inti, di antaranya:

* **Create:** Menambahkan data film baru ke dalam database.
* **Read:** Menampilkan semua data film yang tersimpan dalam format tabel.
* **Update:** Memperbarui atau mengedit informasi film yang sudah ada.
* **Delete:** Menghapus data film dari database, dilengkapi dengan dialog konfirmasi untuk mencegah kesalahan.

---

### 🛠️ Teknologi yang Digunakan (Tech Stack)

Proyek ini dibangun menggunakan beberapa teknologi berikut:

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

---

### 🚀 Panduan Instalasi dan Penyiapan

Untuk menjalankan proyek ini di lingkungan lokal Anda, silakan ikuti langkah-langkah berikut:

1.  Pastikan Anda memiliki *web server* lokal seperti **XAMPP** atau sejenisnya, dan pastikan layanan Apache serta MySQL sedang berjalan.
2.  Salin seluruh berkas proyek ini ke dalam direktori *root* *web server* Anda (umumnya di dalam folder `htdocs` pada XAMPP).
3.  Buka **phpMyAdmin** melalui peramban Anda (biasanya di `http://localhost/phpmyadmin`).
4.  Buat sebuah database baru dengan nama `db_film`.
5.  Pilih database `db_film` yang baru saja dibuat, kemudian buka tab **Import**.
6.  Unggah dan impor berkas `db_film.sql` yang terdapat di dalam folder proyek ini.
7.  Periksa berkas `connection.php`. Pengaturan *default* (host `localhost`, user `root`, dan password kosong) seharusnya sudah sesuai jika Anda menggunakan XAMPP standar.
8.  Buka peramban (browser) dan akses proyek melalui `http://localhost/nama-folder-proyek-anda/`.
9.  Aplikasi seharusnya sudah dapat diakses.
