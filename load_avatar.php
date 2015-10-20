<?php
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
     $link=mysqli_connect('localhost', '','','tes_adr_com_ua');
     mysqli_query($link, "UPDATE Users SET img='".$_FILES['userfile']['name']."'WHERE id='".$_COOKIE['id']."'");
     setcookie('img',$_FILES['userfile']['name'],  time()+3600,"/");
     header('Location:Personal_Area_page.php');
}else{
     header('Location:Personal_Area_page.php');}
?>