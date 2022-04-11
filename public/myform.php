<?php
echo <<<_END
<form action='myform.php' method='post' autocomplete='on'>
 <input type='text' name='username' >
 <input type='password' name='password' autocomplete='off'>
 <input type="submit" value="Отправить">
</form>
_END;
