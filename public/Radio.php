<?php
//checked="checked" - выбирает за пользователя по умолчанию варинат , если пользователь хочет , он может его изменить
echo <<<_END
<label><p>8:00-10:00 <input type="radio" name="time" value="1"></p></label>
<p>12:00-15:00 <input type="radio" name="time" value="2" checked="checked"></p>
<p>17:00-19:00 <input type="radio" name="time" value="3"></p>
<input type="image" name="submit" src="image.gif">
_END;
