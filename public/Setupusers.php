<?php
$connection = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$query = "CREATE TABLE users(
 forename VARCHAR(32) NOT NULL,
 surname VARCHAR(32) NOT NULL,
 username VARCHAR(32) NOT NULL UNIQUE,
 password VARCHAR(32) NOT NULL)";

$result = $connection->query($query);

$salt1 = "qm&h*";
$salt2 = "pg!@";

$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$token = hash('ripemd128' , "$salt1$password$salt2");
add_user($connection , $forename , $surname , $username , $token);

$forename = 'Pauline';
$surname = 'Jones';
$username = 'pjones';
$password = 'acrobat';
$token = hash('ripemd128' , "$salt1$password$salt2");
add_user($connection , $forename , $surname , $username , $token);

function add_user($connection , $Forename , $Surname , $Username , $Token){
    $query = "INSERT INTO users VALUES ('$Forename' , '$Surname' , '$Username' , ' $Token')";
    $result = $connection->query($query);
    if (!$result) die($connection->error);
}
