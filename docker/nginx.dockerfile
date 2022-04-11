#https://habr.com/ru/company/ruvds/blog/439980/ - номарльная ссылка на обьяснения файла
#В файлах Dockerfile содержатся инструкции по созданию образа
#https://nginx.org/ru/docs/http/request_processing.html

# задаёт базовый (родительский) образ. Говорит Докеру взять за основу этот существующий образ. А все новые команды будут добавлены слоями поверх этого основного образа.
FROM nginx:1.19-alpine
# копируем настройки nginx  в папку по пути /etc/nginx/conf.d/default.conf // (копирует в контейнер файлы и папки с ОС )
#т.е переносит файл default.conf  в контейнер по этому пути /etc/nginx/conf.d/default.conf
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
#задаёт рабочую директорию для следующей инструкции. Устанавливает текущую папку образа в /app
WORKDIR /app
# FROM/COPY   и тд.. это инструкции
