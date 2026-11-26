<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Sistem Informasi Mahasiswa (SIM)

## Deskripsi Proyek
Sistem Informasi Mahasiswa (SIM) merupakan aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Aplikasi ini bertujuan untuk membantu pengelolaan data mahasiswa, program studi, dan informasi akademik secara terstruktur dan efisien.

## Tujuan
1. Mempermudah pengelolaan data mahasiswa.
2. Mempermudah pengelolaan data program studi.
3. Menyediakan sistem autentikasi pengguna.
4. Membantu penyajian informasi melalui dashboard.

## Fitur Utama
- **Autentikasi:** Login, registrasi, dan logout.
- **Data Mahasiswa:** Pengelolaan NIM, nama, program studi, angkatan, dan email.
- **Program Studi:** Pengelolaan kode dan nama program studi.
- **Pengguna:** Manajemen akun pengguna.
- **Dashboard:** Menampilkan statistik jumlah mahasiswa dan sebaran program studi.
- **Pencarian dan Filter:** Pencarian mahasiswa berdasarkan NIM, nama, dan program studi.

## Teknologi yang Digunakan
- PHP 8.1 atau lebih baru.
- Laravel Framework.
- Composer.
- MySQL atau database yang dikonfigurasi pada proyek.
- Git dan GitHub.
- Node.js untuk pengelolaan frontend jika diperlukan.

## Persyaratan Instalasi
Pastikan perangkat telah memiliki:
- PHP.
- Composer.
- Git.
- Web server dan database.
- Node.js dan NPM jika diperlukan untuk frontend.

## Cara Instalasi

1. Clone repository:

   `git clone URL-REPOSITORY-GITHUB`

2. Masuk ke direktori proyek:

   `cd sim`

3. Instal dependensi:

   `composer install`

4. Salin file konfigurasi:

   `Copy-Item .env.example .env`

5. Atur konfigurasi database pada file `.env`.

6. Generate application key:

   `php artisan key:generate`

7. Jalankan migration:

   `php artisan migrate`

8. Jalankan aplikasi:

   `php artisan serve`

9. Buka browser pada alamat:

   `http://127.0.0.1:8000`

## Pengelolaan Versi
Proyek menggunakan Git dan GitHub sebagai sistem pengelolaan versi.

Perintah dasar:
- `git status` – melihat status perubahan.
- `git add .` – menambahkan perubahan.
- `git commit -m "pesan"` – menyimpan perubahan.
- `git push origin main` – mengirim perubahan ke GitHub.
- `git pull origin main` – mengambil perubahan terbaru.

## Catatan
Folder `vendor/`, `node_modules/`, dan file `.env` tidak boleh dimasukkan ke repository karena berisi dependensi dan konfigurasi lokal atau informasi sensitif.

---
Proyek Praktikum Version Control System (VCS) – Laravel SIM.