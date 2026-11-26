# CONTRIBUTING – Panduan Kontribusi SIM

## 1. Tujuan
Dokumen ini menjadi panduan bagi anggota tim dalam mengembangkan Sistem Informasi Mahasiswa (SIM) berbasis Laravel menggunakan Git dan GitHub.

## 2. Alur Kerja
1. Mengambil perubahan terbaru dari branch main menggunakan `git pull`.
2. Membuat branch baru sesuai fitur yang dikerjakan.
3. Melakukan pengembangan dan pengujian kode.
4. Menyimpan perubahan menggunakan commit.
5. Melakukan sinkronisasi dengan `git pull --rebase origin main`.
6. Mengirim branch ke GitHub menggunakan `git push`.
7. Membuat Pull Request untuk proses pemeriksaan dan penggabungan.

## 3. Standar Penamaan Branch
- `fitur/nama-fitur` untuk pengembangan fitur baru.
- `fix/nama-perbaikan` untuk perbaikan kesalahan.
- `docs/nama-dokumentasi` untuk perubahan dokumentasi.

## 4. Standar Commit
Pesan commit menggunakan konvensi Conventional Commits:
- `feat:` untuk penambahan fitur.
- `fix:` untuk perbaikan bug.
- `docs:` untuk perubahan dokumentasi.
- `refactor:` untuk perbaikan struktur kode.
- `chore:` untuk pemeliharaan proyek.

## 5. Standar Penulisan Kode
1. Menggunakan struktur dan konvensi penamaan Laravel secara konsisten.
2. Menggunakan nama class yang jelas dan sesuai fungsinya.
3. Melakukan validasi input pada proses penyimpanan data.
4. Memisahkan logika aplikasi ke dalam controller dan model sesuai tanggung jawabnya.
5. Memastikan fitur telah diuji sebelum diajukan melalui Pull Request.

## 6. Aturan Repository
- Tidak mengunggah file `.env`.
- Tidak mengunggah folder `vendor/` dan `node_modules/`.
- Tidak memasukkan informasi rahasia ke dalam repository.
- Setiap fitur dikembangkan pada branch terpisah.
- Branch main harus selalu dalam kondisi stabil.

## 7. Pull Request dan Code Review
Setiap perubahan harus diajukan melalui Pull Request. Anggota tim melakukan pemeriksaan kode dan memberikan masukan sebelum perubahan digabungkan ke branch main.

---
Dokumen kontribusi proyek Sistem Informasi Mahasiswa (SIM).