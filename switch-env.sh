#!/bin/bash

# ==========================================================
# Avenir Environment Switcher
# Oleh: Cloud Architect
# ==========================================================

# Warna untuk output terminal
GREEN='\032[0;32m'
BLUE='\032[0;34m'
RED='\032[0;31m'
NC='\032[0m' # No Color

echo -e "${BLUE}=== ResearchAvenir Environment Switcher ===${NC}"

# Pastikan script dijalankan dengan argumen
if [ -z "$1" ]; then
  echo -e "${RED}❌ Error: Environment tidak ditentukan!${NC}"
  echo "💡 Penggunaan: ./switch-env.sh [local|dev|prod]"
  exit 1
fi

ENV_TARGET=$1
ENV_FILE=""

# Map argumen ke file .env spesifik
case $ENV_TARGET in
  local)
    ENV_FILE="infra/env/.env.local"
    ;;
  dev|development)
    ENV_FILE="infra/env/.env.development"
    ;;
  prod|production)
    ENV_FILE="infra/env/.env.production"
    ;;
  *)
    echo -e "${RED}❌ Error: Environment '$ENV_TARGET' tidak dikenali!${NC}"
    echo "💡 Pilihan yang valid: local | dev | prod"
    exit 1
    ;;
esac

# Pengecekan eksistensi file
if [ ! -f "$ENV_FILE" ]; then
  echo -e "${RED}❌ Error: File konfigurasi $ENV_FILE tidak ditemukan!${NC}"
  echo "Pastikan Anda berada di direktori root 'sistem-researchavenir'."
  exit 1
fi

echo "🔄 Mengganti environment ke: $ENV_TARGET"

# Menyalin file spesifik ke file root .env (Docker akan membaca file ini)
cp "$ENV_FILE" .env

# Export variabel ke sesi terminal saat ini untuk Nginx/Docker build jika dibutuhkan
export $(grep -v '^#' .env | xargs)

echo -e "${GREEN}✅ Environment berhasil diubah ke: $ENV_TARGET${NC}"
echo -e "${GREEN}✅ File .env utama telah diperbarui.${NC}"
echo ""
echo "⚙️  Informasi Sistem Saat Ini:"
echo "   NODE_ENV     = $NODE_ENV"
echo "   APP_PORT     = $APP_PORT"
echo "   SUPABASE_URL = $SUPABASE_URL"
echo ""
echo "💡 Langkah Selanjutnya:"
echo "   Jalankan 'docker-compose up -d --build' untuk menerapkan perubahan ini ke container."
