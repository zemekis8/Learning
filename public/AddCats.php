<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($conn->connect_errno)
{
    die($conn->connect_errno);
}
$query = "INSERT INTO cats VALUE (NULL, 'Lion', 'Leo', 4)";
$result = $conn->query($query);
$query = "INSERT INTO cats VALUE (NULL, 'Cougar', 'Growler', 2)";
$result = $conn->query($query);
$query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
$result = $conn->query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error());