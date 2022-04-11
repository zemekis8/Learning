//Запуск докера
docker-compose up -d 
//Остановка докера //(-d, чтобы выполнить все в фоновом режиме)
docker-compose down --remove-orphans

//путь к файлу который мы запускаем через хром (или другие поисковые системы)
(docker-compose run --rm php-cli-container php "путь к файлу") - общее понятие
docker-compose run --rm php-cli-container php public/test.php - сам пример

// с помощью php-cli-container делает файл программой и запускае ее и выводит в консоле
т.е не нужны порты. А когда запускаем через сайт , порты нужны?

//показывает список контейнеров
docker ps -a

//docker-compose build - пересобрать

для того чтобы посмотреть ip адрес (внутренего) 
docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)

