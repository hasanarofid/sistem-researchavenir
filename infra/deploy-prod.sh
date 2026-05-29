#!/bin/bash
# Script untuk deploy Avenir Research ke VPS Produksi

echo "🚀 Memulai Deployment Avenir Research (Production)..."

# 1. Update kode (jika menggunakan Git)
echo "📦 Menarik versi terbaru dari repository..."
# git pull origin main

# 2. Beralih ke Environment Production
echo "🔄 Mengganti konfigurasi ke Production..."
bash switch-env.sh production

# 3. Validasi .env
if [ ! -f .env ]; then
  echo "❌ Error: File .env tidak ditemukan setelah switch-env.sh"
  exit 1
fi

echo "✅ Environment aktif: $(grep NODE_ENV .env | cut -d '=' -f2)"

# 4. Rebuild & Restart Docker Containers
echo "🐳 Menjalankan Docker Compose..."
docker compose -f docker-compose.yml up -d --build

echo "🎉 Deployment selesai!"
echo "🌐 Aplikasi Anda sekarang berjalan dan dilayani oleh Nginx (Kontainer: avenir-frontend)"
echo "Gunakan 'docker logs -f avenir-frontend' untuk melihat log server."
