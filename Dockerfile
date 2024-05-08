# Используем образ PHP 8.1 в качестве базового
FROM php:8.1-fpm

WORKDIR /var/www/html

COPY . /var/www/html

EXPOSE 80

CMD ["php-fpm"]