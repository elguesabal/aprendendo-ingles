# Imagem base oficial do PHP com Apache
FROM php:8.3-apache

# Instala dependências PHP necessárias para Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Habilita o mod_rewrite (necessário para Laravel)
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos da aplicação
COPY . .

# Copia o virtual host personalizado (veja abaixo)
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Copia o .env de exemplo como .env real
RUN cp .env.example .env

# Gera a chave da aplicação
RUN php artisan key:generate

# Permissões para o Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

RUN php artisan config:cache
RUN php artisan route:clear
RUN php artisan view:clear

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt install -y nodejs
RUN npm install
RUN npm run build

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando de entrada do Apache
CMD ["apache2-foreground"]