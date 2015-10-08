<?php
if(isset($_COOKIE['id'])and isset($_COOKIE['hash']))
{  
 $link=mysqli_connect('localhost', 'root','','tes_adr_com_ua');
 $query = mysqli_query($link, "SELECT * FROM users WHERE id ='".$_COOKIE['id']."'");
 $userdata = mysqli_fetch_assoc($query);
  if(($userdata['hash'] != $_COOKIE['hash'])or ($userdata['id'] != $_COOKIE['id']))
     {
      include ('./Delete_cookie.php');
     }
}
?>      