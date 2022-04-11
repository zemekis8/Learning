<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
$result = $conn->query($query);
