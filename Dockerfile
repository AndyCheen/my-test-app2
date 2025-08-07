FROM php:8.1-fpm

RUN docker-php-ext-install pdo pdo_pgsql

WORKDIR /app

COPY . /app

RUN chown -R www-data:www-data /app

CMD ["php-fpm"]
