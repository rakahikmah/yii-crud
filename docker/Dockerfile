# Gunakan image PHP 7.4 dengan FPM
FROM php:7.4-fpm

# Install sistem dependencies yang diperlukan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip mbstring exif pcntl bcmath soap intl opcache

# Install Composer (untuk manajemen dependencies PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory ke folder aplikasi Yii2
WORKDIR /var/www/html

# Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]