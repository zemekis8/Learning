<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($conn->connect_errno)
{
    die($conn->connect_errno);
}
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j=0;$j<$rows;++$j)
{
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo "author : " .  $row['author'] . "<br>";
    echo "title : " . $row['title'] . "<br>";
    echo "category: " . $row['category'] . "<br>";
    echo "year: " . $row['year'] . "<br>";
    echo "isbn : " . $row['isbn'] . "<br> <br>";
}
$result->close();
$conn->close();