FROM php:7.3.3-apache
RUN a2enmod rewrite
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
EXPOSE 80
