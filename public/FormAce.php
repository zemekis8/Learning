<?php
//ice[] - скобки массива нужны для того чтобы , при выборе нескольких пунктов , выбрались все пункты и отправились  , а не только последний (это будет если убрать
// скобки массива).
echo <<<_END
<form>
<p>Ванильное <input type="checkbox" name="ice[]" value="Vanilla"> </p> 
<p>Шоколадное <input type="checkbox" name="ice[]" value="Chocolate"></p> 
<p>Земляничное <input type="checkbox" name="ice[]" value="Strawberry"></p> 
</form>
_END;
