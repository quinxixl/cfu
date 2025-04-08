FROM php:8.3-apache

# Установка нужных расширений PHP
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev libzip-dev \
    xz-utils gnupg ca-certificates lsb-release apt-transport-https software-properties-common \
    && docker-php-ext-install pdo pdo_mysql zip

# Установка Node.js 18 вручную (надёжный способ)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs
# Установка Sass
RUN npm install -g sass

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Включаем mod_rewrite
RUN a2enmod rewrite

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем проект
COPY . /var/www/html

# Настраиваем Apache на использование папки public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Позволяем использовать .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

