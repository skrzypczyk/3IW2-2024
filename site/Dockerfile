FROM php:8.2-apache

RUN apt-get update

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmariadb-dev \
    && docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql pdo_mysql mysqli



RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libyaml-dev

RUN  docker-php-ext-configure gd --with-freetype
RUN  docker-php-ext-install gd

RUN pecl install yamL

RUN usermod -u 1000 www-data

RUN a2enmod rewrite
