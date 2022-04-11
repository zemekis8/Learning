<?php
$connection = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($connection->connect_errno){
    die($connection->connect_error);
}

if (!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW']) ){
    $un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
    $pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
    $query = "SELECT * FROM users WHERE username='$un_temp'";
    $result = $connection->query($query);
    if (!$result){
        die($connection->connect_error);
    }elseif ($result->num_rows){
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        $salt1 = "qm&h*";
        $salt2 = "pg!@";
        $token = hash('ripemd128',"{$salt1}{$pw_temp}{$salt2}");
        if ($token == $row[3] ){
            session_start();
            $_SESSION['username'] = $un_temp;
            $_SESSION['password'] = $pw_temp;
            $_SESSION['surname'] = $row[1];
            $_SESSION['forename'] = $row[0];
            echo "$row[0] $row[1] : Привет, $row[0], теперь вы зарегистрированы под именем '$row[2]'";
            die("<p><a href='continue.php'> >Щелкните здесь для продолжения</a> </p>");
        }else{
            die("Неверная комбинация имя пользователя — пароль");
        }
    }else{
            die("Неверная комбинация имя пользователя — пароль");
    }
}else{
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Пожалуйста, введите имя пользователя и пароль");
}


function mysql_entities_fix_string($connection, $string)
{
    return htmlentities(mysql_fix_string($connection, $string));
}
function mysql_fix_string($connection, $string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $connection->real_escape_string($string);
}