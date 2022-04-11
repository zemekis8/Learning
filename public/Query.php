<?php
         //mysql-container - мы вписываем название контейнера mysql которые в docker-compose указали
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result) die ($conn->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    echo 'Author: ' . $result->fetch_assoc()['author'] . '<br>';
 $result->data_seek($j);
 echo 'Title: ' . $result->fetch_assoc()['title'] . '<br>';
 $result->data_seek($j);
 echo 'Category: ' . $result->fetch_assoc()['category'] . '<br>';
 $result->data_seek($j);
 echo 'Year: ' . $result->fetch_assoc()['year'] . '<br>';
 $result->data_seek($j);
 echo 'ISBN: ' . $result->fetch_assoc()['isbn'] . '<br><br>';
 }
$result->close();
$conn->close();
