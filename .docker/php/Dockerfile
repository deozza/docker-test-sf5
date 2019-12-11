FROM php:7.3-fpm

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
libzip-dev \
zip \
&& docker-php-ext-configure zip --with-libzip \
&& docker-php-ext-install zip

RUN docker-php-ext-enable apcu

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

WORKDIR /usr/src/app

COPY my_project_name /usr/src/app

RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin