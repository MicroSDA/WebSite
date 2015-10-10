<?php
if(isset($_POST['color']))
{
    $link=mysqli_connect('localhost', 'root','','tes_adr_com_ua');
    mysqli_query($link, "UPDATE users SET color='".$_POST['color']."'WHERE id='".$_COOKIE['id']."'");
    setcookie('color',$_POST['color'],time()+3600,"/");
    header('Location:index.php');
}