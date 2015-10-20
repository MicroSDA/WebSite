<?php
if(!isset($_COOKIE['name']))
{   
 echo(' <form method="POST" action="Login.php" class="navbar-form navbar-right" role="form">
        <div class="form-group">
        <input type="text" placeholder="Login" name="name" class="form-control">
        </div>
        <div class="form-group">
        <input type="password" placeholder="Password" name="pass" class="form-control">
        </div>
        <button type="submit" name="sumbit" class="btn btn-success">Войти</button>
        <button type="submit" name="register" class="btn btn-success">Зарегистрироваться</button>
        </form>');
}
else{
    if($_COOKIE['color']==NULL)
    {
        $color='#000000';
    }else{$color = $_COOKIE['color'];}
    echo('<form  class="navbar-form navbar-right" role="form" method="POST" action="Exit.php">
          <div class="form-group">
          <p class="navbar-text" style="color:#e6e6e6">Привет, '.$_COOKIE['name'].' </p>
          </div>
          <button type="submit" name="Exit" class="btn btn-success">Выход</button>
          <button type="submit" name="personal_area" class="btn btn-success">Личный кабинет</button>
          </form>');
    if(intval($_COOKIE['uid'])==1)
    {
    
    }
}