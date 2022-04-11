FROM php:7.4-cli
#Здесь установливаються библиотеки которые нужно чтобы файлы запускались как программы
#выполняет команду и создаёт слой образа. Используется для установки в контейнер пакетов.
RUN apt-get update && apt-get install -y --no-install-recommends libzip-dev zlib1g-dev libpq-dev zip  \
    && docker-php-ext-install zip mysqli
# через терминал выполняем команду , не особо понял синтаксис
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet
#  устанавливает постоянные переменные среды.  ( что такое эти среды не знаю)
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /app