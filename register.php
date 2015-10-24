<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if($name==NULL||$email==NUll||$pass==NULL)
{
	header ('Location: index.php');
	die();  
}

  include('./connect_db.php');//Конект к бд
  $uid=0;
  mysqli_query($link,"INSERT INTO ".$users_table." (Name,Password,Email,uid) VALUES('".$name."','".$pass."','".$email."','".$uid."');");
  mysqli_query($link,"CREATE TABLE mail_".$name."( ".
       "id INT NOT NULL AUTO_INCREMENT,".
       "Data TEXT NULL COLLATE utf8_unicode_ci,".
       "Color TEXT NULL COLLATE utf8_unicode_ci,".
       "Name TEXT NULL COLLATE utf8_unicode_ci,".
       "Masage TEXT NULL COLLATE utf8_unicode_ci,".
       "img TEXT NULL COLLATE utf8_unicode_ci,".
       "PRIMARY KEY (id));");
  mysqli_close($link);
  header ('Location: index.php');
?>