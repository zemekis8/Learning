<?php
$conn = new mysqli ('mysql-container', 'Oleg', 'pon34gs5', 'Publications');
if($conn->connect_errno)
{
    die($conn->connect_errno);
}
if(isset($_POST['delete']) && isset($_POST['isbn']));
{
    $isbn = get_post($conn, 'isbn');
    $query = "DELETE FROM classics WHERE isbn='$isbn'";
    $result = $conn->query($query);
    if (!$result){
        echo "Сбой при удалении";
    }
}
if      (isset($_POST['author']) &&
        isset($_POST['title']) &&
        isset($_POST['category'])  &&
        isset($_POST['year']) &&
        isset($_POST['isbn'])) {
    $author = get_post($conn, 'author');
    $title = get_post($conn, 'title');
    $category = get_post($conn, 'category');
    $year = get_post($conn, 'year');
    $isbn = get_post($conn,'isbn');
    $query = "INSERT INTO classics VALUE ('$author', '$title', '$category', '$year', '$isbn')";
    $result = $conn->query($query);
    if (!$result){
        echo "Ничего не вставилось. ОШИБКА!!!";
    }

}
echo <<<_END
 <form action="sqltest.php" method="post"><pre>
 Author <input type="text" name="author">
 Title <input type="text" name="title">
 Category <input type="text" name="category">
 Year <input type="text" name="year">
 ISBN <input type="text" name="isbn">
 <input type="submit" value="ДОБАВИТЬ ЗАПИСЬ"> 
 </pre></form>
 _END;
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result)
{
    die("Сбой при доступе к базе данных");
}
$rows = $result->num_rows;

for ($j=0; $j<$rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo <<<_END
    <pre>
       Author : $row[0]
       <br>
       Title : $row[1]
       <br>
       Category : $row[2]
       <br>
       Year : $row[3]
       <br>
       Isnb : $row[4] 
       <form action="sqltest.php" method="post">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="isbn" value="$row[4]">
            <input type="submit" value="УДАЛИТЬ ЗАПИСЬ"></form> 
            
    </pre>
_END;
}
$result->close();
$conn->close();

function get_post($conn,$var){
    return $conn->real_escape_string($_POST[$var]);
}
