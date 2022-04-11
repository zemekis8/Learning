<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($conn->connect_errno)
{
    die($conn->connect_errno);
}
$query = "DESCRIBE cats";
$result = $conn->query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error);

$rows = $result->num_rows;

echo "<table><tr> <th>Column</th> <th>Type</th>
 <th>Null</th> <th>Key</th> </tr>";

for ($j=0; $j<$rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<tr>";
        for ($i=0; $i<4; ++$i){
            echo "<td>$row[$i]</td>";;
        }
    echo "</tr>";
}
echo "</table>";