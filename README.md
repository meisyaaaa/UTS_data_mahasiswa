Aplikasi web sederhana untuk mengelola data mahasiswa menggunakan PHP Native dan database MySQL. Proyek ini dibuat untuk memenuhi spesifikasi tugas pemrograman web berbasis CRUD (Create, Read, Update, Delete).

## Fitur Utama
- Create: Menambah data mahasiswa baru beserta unggah foto profil.
- Read: Menampilkan daftar mahasiswa dalam bentuk tabel yang rapi.
- Update: Mengubah data mahasiswa yang sudah ada (termasuk mengganti foto).
- Delete: Menghapus data mahasiswa beserta file foto yang terkait di server.
- Validasi JavaScript.: Pengecekan input kosong, format file gambar (jpg/jpeg/png), dan ukuran file maksimal 2MB sebelum data dikirim ke server.
- Keamanan File: Penamaan file foto otomatis menggunakan fungsi `uniqid()` untuk menghindari duplikasi.

## Prasyarat
- PHP 7.x atau lebih baru.
- MySQL/MariaDB.
- Web Server (Apache/Nginx) - disarankan menggunakan XAMPP atau Laragon.

## Struktur Database
Nama Database: `db_kampus`

```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    foto VARCHAR(255) NOT NULL
);
```

## Cara Instalasi
1. Clone repository ini atau download sebagai ZIP.
2. Letakkan folder project di dalam direktori server (contoh: `C:/xampp/htdocs/project_mahasiswa` atau `C:/laragon/www/project_mahasiswa`).
3. Pastikan terdapat folder bernama `uploads` di dalam direktori project untuk menyimpan foto.
4. Buka phpMyAdmin, buat database baru dengan nama `db_kampus`.
5. Impor file `.sql` atau jalankan query tabel di atas pada menu SQL.
6. Sesuaikan konfigurasi database pada file `koneksi.php` jika diperlukan.
7. Akses aplikasi melalui browser di `http://localhost/project_mahasiswa`.

## Penulis
- Nama: [Meisya Amelia Putri]
- Tema Proyek: Data Mahasiswa

with open('README.md', 'w') as f:
    f.write(content)


disusun berdasarkan spesifikasi soal dan perbaikan kode yang telah dilakukan sebelumnya.

Your Markdown file is ready
[file-tag: code-generated-file-0-1778171910692363720]

### Cara Menggunakan File ini:
1.  Simpan konten di atas ke dalam sebuah file baru bernama `README.md`.
2.  Letakkan file tersebut di folder utama proyek Anda (`project_mahasiswa`).
3.  Jangan lupa untuk mengisi bagian [Nama Lengkap(MeisyaAmeliaPutri)] di bagian akhir file tersebut.

### Langkah Terakhir (Push ke GitHub):
Sesuai instruksi soal nomor 6, setelah semua file siap (termasuk README ini), Anda bisa mengunggahnya ke GitHub dengan langkah berikut di terminal/git bash:
1.  `git init`
2.  `git add .`
3.  `git commit -m "Initial commit - CRUD Mahasiswa lengkap"`
4.  `git remote add origin [URL_github-kamu]`
5. `git branch -M main`
6.  `git push -u origin main`

masukkan README.md
git add README.md
git commit -m "Menambahkan file dokumentasi README"
git push
git add .
git commit -m "Memperbarui README"
git push