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
  mysql_query($link,"INSERT INTO ".$users_table." (Name,Password,Email) VALUES('".$name."','".$pass."','".$email."');"); 
  mysql_close($link);
  header ('Location: index.php');
?>