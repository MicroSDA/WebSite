<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if($name==NULL||$email==NUll||$pass==NULL)
{
	header ('Location: index.php');
	die();  
}

  $link=mysql_connect("localhost", "banschey", "gettherefast0911", "tes_adr_com_ua"); 
  mysql_select_db('tes_adr_com_ua', $link);
  $s="INSERT INTO Users (Name,Password,Email) VALUES('".$name."','".$pass."','".$email."');"; 
  mysql_query($s); 
  mysql_close($link);
  header ('Location: index.php');
?>