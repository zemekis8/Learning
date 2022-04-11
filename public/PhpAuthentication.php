<?php
//$username = 'admin';
//$password = 'letmein';
//
//if (!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
//    if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password) {
//        echo "Регистрация прошла успешно";
//    } else {
//        die("Неверная комбинация имя пользователя — пароль");
//    }
//////    echo "<pre>";
//////    var_dump($_SERVER);
//////    echo "</pre>";
//} else {
//    header('WWW-Authenticate: Basic realm="Restricted Section"');
//    header('HTTP/1.0 401 Unauthorized');
//    die ("Пожалуйста, введите имя пользователя и пароль");
//}
//$_SERVER['PHP_AUTH_PW']="";
var_dump($GLOBALS['_SERVER']['PHP_AUTH_PW']);
//unset($GLOBALS['_SERVER']['PHP_AUTH_PW']);
//var_dump($_SERVER['PHP_AUTH_PW']);





