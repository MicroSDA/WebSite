<?php
if(isset($_POST['color']))
{
    include ('./connect_db.php');//Конетк к бд
    mysqli_query($link, "UPDATE ".$users_table." SET color='".$_POST['color']."'WHERE id='".$_COOKIE['id']."'");
    setcookie('color',$_POST['color'],time()+3600,"/");
    header('Location:index.php');
}