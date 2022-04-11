<?php
session_start();
if (!empty($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $forename = $_SESSION['forename'];
    $surname = $_SESSION['surname'];
    destroy_session_and_data();
    echo "С возвращением, $forename.<br>
 Ваше полное имя $forename $surname.<br>
 Ваше имя пользователя '$username'
 и ваш пароль '$password'.";

}
else echo "Пожалуйста, для входа <a
 href='Authenticate3.php'>щелкните здесь</a>.";
function destroy_session_and_data()
{
    session_start();
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}