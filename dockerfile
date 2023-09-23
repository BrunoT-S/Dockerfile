# Use a imagem base php:7.2-apache
FROM php:7.2-apache


RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80

EXPOSE 81

