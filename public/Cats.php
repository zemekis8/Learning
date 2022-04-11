<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($conn->connect_errno)
{
    die($conn->connect_errno);
}
$query = "CREATE TABLE cats (
 id SMALLINT NOT NULL AUTO_INCREMENT,
 family VARCHAR(32) NOT NULL,
 name VARCHAR(32) NOT NULL,
 age TINYINT NOT NULL,
 PRIMARY KEY (id)
 )";
$result = $conn->query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error);