FROM php:7.2.12-fpm

  RUN apt-get update && apt-get install -y gcc make autoconf libc-dev libmcrypt-dev libpq-dev\
      mysql-client libmagickwand-dev --no-install-recommends \
      && pecl install imagick mcrypt-1.0.1\
      && docker-php-ext-enable imagick \
      && docker-php-ext-install pdo_mysql \
      && docker-php-ext-install pdo_pgsql \
      && docker-php-ext-install pgsql

 RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
     && php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
     && php composer-setup.php\
     && php -r "unlink('composer-setup.php');"\
     && mv composer.phar /usr/local/bin/composer
