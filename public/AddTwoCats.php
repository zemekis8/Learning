<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$query = "INSERT INTO cats VALUES (NULL,'Lynx','Stumpy',5)";
$result = $conn->query($query);

echo $conn->insert_id;