<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$user = mysql_entities_fix_string($conn, $_POST['user']);
$pass = mysql_entities_fix_string($conn, $_POST['pass']);
$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
//и т. д...
function mysql_entities_fix_string($conn, $string)
{
    return htmlentities(mysql_fix_string($conn, $string));
}
function mysql_fix_string($conn, $string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
}
