<?php
if(!isset($_COOKIE['name']))
{   
echo('<form method="POST" action="Login.php">
<p style="line-height:0.2;text-align:left">Имя:<input style="float:right; margin-top:-0.6em;" type="text" name="name" /></p>
<p style="line-height:0.2;text-align:left">Пароль:<input style="float:right;margin-top:-0.6em;" type="password" name="pass" /></p>
<input style="margin-left:auto" name="sumbit" type="submit" value="Войти" /> &nbsp;&nbsp;  <a style="font-size:15px;" href="register_page.php">Зарегистрироваться ?</a>
</form>');
}
else{
    if($_COOKIE['color']==NULL)
    {
        $color='#000000';
    }else{$color = $_COOKIE['color'];}
    
    echo('<form action="Set_color.php" method="POST">
          <input type="color" value="'.$color.'" name="color">
          <input type="submit" value="Выбрать">
          </form>');
    echo('<p class="style2" align="center">Привет, '.$_COOKIE['name'].' </p>');
    echo('<form method="POST" action="Exit.php">
          <input class="button" name="Exit" type="submit" value="Выход">
	  </form>');
}