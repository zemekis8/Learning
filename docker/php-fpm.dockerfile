#Это файл модификации контейнера
FROM php:7.4-fpm
#обновляет и устравливает что-то
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install mysqli && pecl install xdebug-3.1.3 \
     && docker-php-ext-enable xdebug
#создает папку для следующих инструкий. (создаст папку если она не создана, и перейдёт в неё.)
COPY ./php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY ./php/xdebug.ini /usr/local/etc/php/xdebug.ini
WORKDIR /app