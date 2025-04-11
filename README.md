# 💡 Genia Information System
Website dari Genia untuk semua 😀

## ✨ Fitur

* **Landing Page:** Halaman publik seperti beranda, tentang kami, dan bagian penghargaan.
* **Modul Blog:** Menampilkan postingan blog, melihat detail, dan kemungkinan pengiriman postingan.
* **Modul Berita:** Menampilkan artikel berita dan melihat detailnya.
* **Modul Kompetisi:** Menampilkan kompetisi, melihat detail, dan mengelola peserta.
* **Panel Admin:** Area khusus admin untuk mengelola konten (Blog, Berita, Kompetisi) dan pengaturan sistem lainnya. Termasuk fitur login.
* **Layouts:** Tata letak terpisah untuk aplikasi utama dan panel admin.

## 👥 Anggota

* Ridho Aditya Rosman Eka Putra (220211060113)
* Ahmad Triadi Julianto M (220211060054)
* Regina Maria Samantha George (220211060112)

## 🚀 Teknologi yang Digunakan

* **Backend:** PHP 8.2+, Laravel 11+
* **Frontend:**
  * Tailwind CSS (v3.4+) untuk styling
  * Vite untuk mengelola aset frontend
  * Blade sebagai template engine Laravel
* **Database:** MySQL (dapat dikonfigurasi melalui `.env`, migrasi telah disediakan) #belum digunakan. 
* **Tools Pengembangan:**
  * Composer untuk manajemen dependensi PHP
  * NPM untuk manajemen dependensi Node.js

## 🔧 Instalasi & Setup

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal:

### 1. Prasyarat
* PHP >= 8.2
* Composer (versi terbaru disarankan)
* Node.js & NPM (versi LTS terbaru)
* Server database (contoh: MySQL) #belum digunakan

### 2. Clone Repository
```bash
git clone https://github.com/Idoo0/genia-information-system
cd genia-information-system
```

### 3. Install Dependensi PHP
```bash
composer install
```

### 4. Install Dependensi Node.js
```bash
npm install
```

### 5. Setup Environment
Salin file contoh environment:
```bash
cp .env.example .env
```
**Konfigurasikan koneksi database** (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) dan variabel env lainnya (`APP_URL`, `MAIL_...`) di file `.env`.

### 6. Generate Application Key
```bash
php artisan key:generate
```

### 7. Jalankan Migrasi Database #belum digunakan
Ini akan membuat tabel-tabel yang diperlukan
```bash
php artisan migrate
```

### 8. Build Asset Frontend
* Untuk pengembangan (dengan hot-reloading):
```bash
npm run dev
```
* Untuk produksi:
```bash
npm run build
```

### 9. Jalankan Aplikasi
* Menggunakan `php artisan serve`:
```bash
php artisan serve
```
Akses aplikasi di `http://localhost:8000` (atau sesuai host/port yang tertera).

## ▶️ Penggunaan

* Akses aplikasi publik melalui URL yang dikonfigurasi (`APP_URL` atau alamat yang diberikan oleh `php artisan serve` / Sail).

## 🤝 Kontribusi

Kontribusi sangat disambut! Silakan ikuti prosedur standar:

1. Fork repositori ini
2. Buat branch baru untuk fitur atau perbaikan bug
3. Lakukan perubahan
4. Ajukan pull request

## 📄 Lisensi

Genia Information System adalah perangkat lunak open-source yang dilisensikan di bawah **Lisensi MIT**.
