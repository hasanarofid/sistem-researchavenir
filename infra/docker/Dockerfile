# ==========================================
# APP STAGE (PHP-FPM, Composer, Node.js)
# ==========================================
FROM php:8.2-fpm-alpine

# Install ekstensi sistem dan dependensi
RUN apk add --no-cache \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    postgresql-dev \
    git \
    bash

# Install ekstensi PHP untuk PostgreSQL (Supabase)
RUN docker-php-ext-install pdo_pgsql pgsql bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
