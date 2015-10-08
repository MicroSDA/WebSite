<?php
if(isset($_COOKIE['name']))
{
echo('<form method="POST" action="Chat.php">
<input  type="text" name="masage" />
<input class="button" name="Send" type="submit" value="Отправить"/>
</form>');
}