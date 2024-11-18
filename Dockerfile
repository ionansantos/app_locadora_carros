FROM php:8.1-apache

ARG user=user
ARG uid=1000

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www

RUN cd /etc/apache2/mods-available && a2enmod rewrite
COPY /apache/apache2.conf /etc/apache2/apache2.conf
COPY /apache/000-default.conf /etc/apache2/sites-available/000-default.conf

USER $user
