# SimTaku (Sistem Manajemen Tugas Kuliah)

**SimTaku** adalah aplikasi manajemen tugas berbasis web yang dirancang untuk membantu pengguna mengelola daftar tugas kuliah harian dengan lebih terorganisir, estetis, dan efisien.

---

## Fitur Utama
* **Sistem Autentikasi**: Login dan Register yang aman untuk menjaga data pribadi pengguna.
* **Dashboard Purple Theme**: Antarmuka modern dengan dominasi warna ungu untuk kenyamanan visual.
* **Manajemen Tugas (CRUD)**:
    * **Tambah Tugas**: Input tugas baru melalui Modal interaktif.
    * **Lihat Tugas**: Daftar tugas ditampilkan dalam bentuk kartu (cards) yang rapi.
    * **Edit Tugas**: Memperbarui rincian tugas secara cepat.
    * **Hapus Tugas**: Menghapus tugas yang sudah selesai atau tidak diperlukan.
* **Sistem Prioritas & Deadline**: Penanda tingkat kepentingan tugas dan batas waktu pengerjaan.

---

## Teknologi yang Digunakan
* **Framework**: [Laravel 10+](https://laravel.com)
* **Language**: PHP, JavaScript
* **Database**: MySQL
* **UI Framework**: Bootstrap 5
* **Build Tool**: Vite

---

## Tim Pengembang (SimTaku Team)

1.  **Anissa Auliya Putri (Lead Developer)**
    * Penanggung jawab arsitektur sistem inti dan keamanan.
    * Implementasi sistem **Login/Auth** dan manajemen paket sistem.
    * Integrasi akhir seluruh komponen aplikasi agar berjalan harmonis.

2.  **Alma Amanina Mujahida (UI/UX Designer)**
    * Desainer identitas visual aplikasi dengan tema **"Purple Productivity"**.
    * Pembuat layout Dashboard utama dan komponen kartu tugas yang responsif.
    * Pengatur estetika dan tata letak elemen antarmuka.

3.  **Karin Zalfa Santoso (Backend Developer)**
    * Perancang struktur basis data menggunakan **Laravel Migrations**.
    * Pengembang **Model** dan logika **Controller** untuk alur data aplikasi.
    * Pembangun fondasi utama operasi CRUD di sisi server.

4.  **Mutiara Adzika Islami (Frontend Developer)**
    * Pengembang komponen **Modal Form** untuk interaksi tambah dan edit data.
    * Penyempurna alur pengalaman pengguna pada fitur Edit dan Delete.
    * Integrator antara input antarmuka dengan logika backend.

---

## Cara Instalasi di Lokal
1.  **Clone Repositori**:
    ```bash
    git clone [https://github.com/anissap848-ship-it/tubes-simtaku.git](https://github.com/anissap848-ship-it/tubes-simtaku.git)
    ```
2.  **Instal Dependensi**:
    ```bash
    composer install
    npm install
    ```
3.  **Konfigurasi Environment**:
    * Salin `.env.example` menjadi `.env`.
    * Sesuaikan `DB_DATABASE=tubes_simtaku` di file `.env`.
4.  **Setup Database**:
    ```bash
    php artisan key:generate
    php artisan migrate
    ```
5.  **Jalankan Aplikasi**:
    ```bash
    php artisan serve
    # Di terminal terpisah jalankan:
    npm run dev
    ```

---

*Dibuat oleh Tim SimTaku untuk tugas besar mata kuliah Pemrograman Web.*
