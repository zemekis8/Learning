<?php
echo <<<_END
<form method="post" action="11.3.php">
<p>Сумма заимствования <input type="text" name="principle"></p>
<p>Ежемесячная выплата <input type="text" name="monthly"></p>
<p>Количество лет <input type="text" name="years" value="25"></p>
<p>Процент годовых <input type="text" name="rate" value="6"></p>
<input type="submit">
</form>
_END;