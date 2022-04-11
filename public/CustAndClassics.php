<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$query = "SELECT * FROM customers";
$result = $conn->query($query);

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "$row[0] purchased ISBN $row[1]:<br>";
    $subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
    $subresult = $conn->query($subquery);
        $subrow = $subresult->fetch_array(MYSQLI_NUM);
        echo "'$subrow[1]' by $subrow[0]" . "<br>";
}