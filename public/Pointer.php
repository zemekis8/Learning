<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$author = 'Emily Brontë';
$title = 'Wuthering Heights';
$category = 'Classic Fiction';
$year = '1847';
$isbn = '9780553212587';

$stmt = $conn->prepare('INSERT INTO classics VALUES (?,?,?,?,?)');
$stmt->bind_param('sssss', $author , $title , $category , $year , $isbn);
$stmt->execute();
//обезвреживает код вводимый с форм , чтобы он не навредил базе данной и вообще не навредил ничему.
/*function sanitizeString($var)
{
$var = stripslashes($var);
$var = strip_tags($var);
$var = htmlentities($var);
return $var;
}
function sanitizeMySQL($connection, $var)
{
$var = $connection->real_escape_string($var);
$var = sanitizeString($var);
return $var;
}*/
printf("%d Row inserted.\n", $stmt->affected_rows);

$stmt->close();
$conn->close();
