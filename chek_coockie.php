<?php
if(isset($_COOKIE['id'])and isset($_COOKIE['hash']))
{  
 include('./connect_db.php');//Конект к бд
 $query = mysqli_query($link, "SELECT * FROM ".$users_table." WHERE id ='".$_COOKIE['id']."'");
 $userdata = mysqli_fetch_assoc($query);
  if(($userdata['hash'] != $_COOKIE['hash'])or ($userdata['id'] != $_COOKIE['id']))
     {
      include ('./Delete_cookie.php');
     }
     else{
     include('./connect_db.php');//Конект к бд
     $timestapm_this=time();
     $online=1;
     mysqli_query($link, "UPDATE ".$users_table." SET time='".$timestapm_this."'WHERE id='".$_COOKIE['id']."'");
     mysqli_query($link, "UPDATE ".$users_table." SET online='".$online."'WHERE id='".$_COOKIE['id']."'");
     }    
}