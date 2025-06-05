# Etapa 1: Instala dependências e compila a aplicação
FROM php:8.2-apache AS build

# Instala extensões do PHP necessárias
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ativa o módulo de rewrite do Apache (necessário para Laravel)
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . .

# Instala dependências do PHP (Laravel)
RUN composer install --optimize-autoloader --no-dev

# Gera os caches do Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Permissões para o Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Apache configurações amigáveis (URLs sem index.php)
COPY ./docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Porta padrão
EXPOSE 80

# Comando final
CMD ["apache2-foreground"]
