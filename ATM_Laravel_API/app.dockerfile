FROM php:7.2.12-fpm

  RUN apt-get update && apt-get install -y gcc make autoconf libc-dev libmcrypt-dev libpq-dev\
      mysql-client libmagickwand-dev --no-install-recommends \
      && pecl install imagick mcrypt-1.0.1\
      && docker-php-ext-enable imagick \
      && docker-php-ext-install pdo_mysql \
      && docker-php-ext-install pdo_pgsql \
      && docker-php-ext-install pgsql \
