<?php
if (isset($_POST['url'])) {

    //Здесь echo отправляет в буфер обмена (пхпешный буфер) , а не на страницу как я думал ( echo   отправляет данные в буфер , а от туда куда нам нужно потом)
    echo file_get_contents('http://' . SanitizeString($_POST['url']));
}
function SanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
}