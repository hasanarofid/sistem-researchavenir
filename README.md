# Research Avenir System

Sistem inti dan platform analitik **Research Avenir** — sebuah platform berbasis web modern untuk menyajikan katalog riset dan artikel analisis pasar secara interaktif dan dinamis. 

Aplikasi ini dikembangkan menggunakan arsitektur modern berkinerja tinggi yang menggabungkan backend kokoh dengan frontend yang responsif.

---

## 🚀 Tech Stack

Aplikasi ini menggunakan teknologi standar startup profesional:
* **Backend**: PHP 8.3 & Laravel 13 (Arsitektur MVC & API)
* **Frontend Bridge**: Inertia.js (Menghubungkan Laravel controller langsung dengan Vue view secara seamless tanpa REST API manual)
* **Frontend Framework**: Vue.js 3 (Composition API)
* **Styling**: Tailwind CSS v4 & Vite
* **Database**: PostgreSQL 15 (Docker) / SQLite (Local development)
* **Containerization**: Docker & Docker Compose (Nginx Web Server, PHP-FPM App, PostgreSQL Database)

---

## 📂 Struktur Folder Proyek

Untuk menjaga codebase tetap rapi dan profesional, repositori ini diatur dengan struktur berikut:

```text
├── app/                      # Logika aplikasi backend (Controllers, Models, Middleware)
│   └── website/              # HTML halaman web statis yang dibaca dinamis di runtime
├── bootstrap/                # Skrip bootstrap Laravel
├── config/                   # File konfigurasi aplikasi Laravel
├── database/                 # Migrasi database, seeders, dan skema data
│   └── seeders/              # Seeder data JSON & skrip PHP Seeder
├── infra/                    # Konfigurasi infrastruktur & DevOps
│   ├── docker/               # Dockerfile untuk container PHP-FPM
│   ├── nginx/                # Konfigurasi server Nginx
│   └── env/                  # File template environment (.env.local, .env.development, .env.production)
├── public/                   # Asset publik (Gambar, logo, file kompilasi JS/CSS)
├── resources/                # Komponen Vue 3 frontend, CSS, dan Views
├── routes/                   # Definisi routing (web.php, api.php)
├── scripts/                  # Skrip utility & parser data (Python/HTML pembantu) yang terpisah dari runtime utama
├── storage/                  # Log, cache, dan file upload lokal
├── tests/                    # Pengujian otomatis (Unit & Feature tests)
├── switch-env.sh             # Skrip otomatis untuk mengganti file environment (.env)
├── docker-compose.yml        # Konfigurasi orkestrasi container Docker
└── artisan                   # Command-line tool utilitas Laravel
```

---

## ⚙️ Panduan Setup & Instalasi Lokal

### 1. Prasyarat
Pastikan sistem Anda sudah terinstal:
* [Docker & Docker Compose](https://docs.docker.com/get-docker/)
* [Node.js (LTS)](https://nodejs.org/)
* [Composer](https://getcomposer.org/) (Opsional jika menggunakan container)

### 2. Mengatur Environment
Gunakan skrip `switch-env.sh` untuk mengaktifkan konfigurasi environment target Anda:
```bash
# Untuk pengembangan lokal (Local development)
bash switch-env.sh local

# Untuk environment development/staging
bash switch-env.sh dev

# Untuk environment production
bash switch-env.sh prod
```
*Skrip di atas akan menyalin konfigurasi dari `infra/env/` ke `.env` utama di root folder.*

### 3. Menjalankan Docker Container
Jalankan seluruh layanan aplikasi (Web Server, App, dan Database) menggunakan Docker Compose:
```bash
docker compose up -d --build
```
Aplikasi akan otomatis berjalan di port port yang ditentukan (default local: `http://localhost:8080`).

### 4. Instalasi Dependency & Build Assets
Jalankan perintah berikut untuk menginstal dependency frontend dan backend:
```bash
# Masuk ke container app untuk menjalankan perintah Laravel
docker compose exec app composer install

# Generate key enkripsi Laravel
docker compose exec app php artisan key:generate

# Instal dependensi JavaScript & kompilasi aset frontend
npm install
npm run build
```

### 5. Migrasi & Seed Database
Jalankan migrasi database dan masukkan data awal (seeding):
```bash
docker compose exec app php artisan migrate --seed
```

---

## 🛠️ Skrip Utility & Parser (`scripts/`)

Di dalam folder `scripts/` terdapat skrip utilitas Python yang digunakan untuk mengekstrak dan memproses data dari file HTML ke database format JSON:
* **`scripts/parse_seeders.py`**: Mengekstrak data katalog dari `app/website/katalog.html` dan `index.html`, lalu menyimpannya dalam format JSON di `database/seeders/` untuk kemudian di-seed ke database PostgreSQL.
* **`scripts/extract_logo.py`**: Mengekstrak file logo base64 dari JavaScript lama dan menyimpannya sebagai file gambar fisik di `public/images/logo.png`.

*Catatan: Selalu jalankan skrip Python dari root direktori proyek, contoh:*
```bash
python scripts/parse_seeders.py
```

---

## 🐳 Deployment Produksi

Untuk melakukan deployment ke VPS Produksi secara cepat dan otomatis, Anda dapat menjalankan skrip deploy produksi yang telah disediakan:
```bash
bash infra/deploy-prod.sh
```
Skrip ini akan secara otomatis menarik pembaruan kode, beralih ke `.env.production`, dan melakukan rebuild container Docker dengan aman.
