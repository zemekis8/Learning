<?php
echo <<<_END
Выберите нужный сайт:
<input type='url' name='site' list='links'>
<datalist id='links'>
 <option label='Google' value='http://google.com'>
 <option label='Yahoo!' value='http://yahoo.com'>
 <option label='Bing' value='http://bing.com'>
 <option label='Ask' value='http://ask.com'>
</datalist>
<input type='number' name='age'>
<input type='range' name='num' min='0' max='100' value='50' step='1'>
<input type='time' name='time' value='12:34'>
_END;
