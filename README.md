# Gammaz

Gammaz adalah sebuah situs web galeri yang dirancang untuk menampilkan berbagai koleksi gambar dengan tampilan yang menarik dan responsif.

## 🎨 Fitur Utama
- **Tampilan Responsif**: Dapat diakses dengan baik di berbagai perangkat.
- **UI/UX Modern**: Desain yang bersih dan intuitif.
- **Manajemen Gambar**: Upload, hapus, dan kelola gambar dengan mudah.
- **Filter & Kategori**: Sortir gambar berdasarkan kategori.
- **Middleware**: Mengamankan dan mengatur akses ke fitur tertentu.
- **Eloquent ORM**: Mengelola database dengan cara yang lebih intuitif dan efisien.
- **Storage Facades**: Menyimpan dan mengelola file dengan lebih mudah.

## 🚀 Teknologi yang Digunakan
- **Framework**: Laravel
- **Frontend**: Blade dengan Vite
- **Database**: MySQL
- **Styling**: Tailwind CSS, Bootstrap
- **Middleware**: Laravel Middleware untuk otentikasi dan otorisasi
- **ORM**: Eloquent ORM untuk interaksi database
- **Storage**: Laravel Storage Facades untuk manajemen file

## 📦 Instalasi & Penggunaan
1. Clone repositori:
   ```bash
   git clone https://github.com/MossesAryo/Gammaz-Laravel.git
   cd Gammaz-Laravel
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Konfigurasi environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Migrasi database:
   ```bash
   php artisan migrate --seed
   ```
5. Jalankan aplikasi:
   ```bash
   php artisan serve
   npm run dev
   ```
6. Buka di browser:
   ```
   http://127.0.0.1:8000
   ```

## 📸 Kontribusi
1. Fork repositori ini
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur X'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request
