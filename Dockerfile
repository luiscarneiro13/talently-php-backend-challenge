FROM php:7.4-cli

COPY . /project
WORKDIR  /project

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN apt-get update
RUN apt update

RUN apt autoremove -y

RUN apt-get install -y \
    fish \
    vim \
    libzip-dev \
    zip \
    unzip \
    git
    
RUN docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev