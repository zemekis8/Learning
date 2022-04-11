<?php
$f=$c=" ";
if (isset($_POST['f'])){
    $f = sanitizeString($_POST['f']);
}
if (isset($_POST['c'])){
    $c = sanitizeString($_POST['c']);
}
if ($f != ''){
    $c = intval((5/9) * ($f-32));
    $out = "$f °f равно $c °c";
}elseif ($c !=' '){
    $f = intval((9 / 5) * $c + 32);
    $out = "$c °c равно $f °f";
}else{
    $out = " ";
}
function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
echo <<<_END
<html >
    <head>
        <title>Программа перевода температуры!</title>
    </head>
    <body>
        <pre>
            Введите температуру по Фаренгейту или по Цельсию и нажмите кнопку Перевести
            <b>$out</b>
            <form method="post" action="Convert2.php">
              <p>По фаренгейту <input type="text" name="f" size="7"></p> 
              <p>По Цельсию <input type="text" name="c" size="7"></p> 
              <input type="submit" value="Перевести">
            </form>
        </pre>
    </body>
</html>
_END;

