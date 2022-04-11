<?php
if (isset($_POST['name'])){
    echo "Вас зовут" . " :" . $_POST['name'] . "!";
}else{
    echo "Ничего не введено!";
}

echo <<<_END
<html>
    <head>
        <title>Form test</title>
    </head>
    <body>
        
        <form method="post" action="formtest2.php">
            <p>Как вас зовут</p>
            <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>
_END;
