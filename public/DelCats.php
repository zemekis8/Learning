<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');

$query = "DELETE FROM cats WHERE name='Growler'";
$result = $conn->query($query);
