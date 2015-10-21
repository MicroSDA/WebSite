<?php
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    include ('./connect_db.php');
     mysqli_query($link, "UPDATE ".$users_table." SET img='".$_FILES['userfile']['name']."'WHERE id='".$_COOKIE['id']."'");
     setcookie('img',$_FILES['userfile']['name'],  time()+3600,"/"); 
     setcookie('img_min',$_FILES['userfile']['name'],  time()+3600,"/");
     include('classSimpleImage.php');
     $image = new SimpleImage();
     $image->load('img/'.$_FILES['userfile']['name'].'');
     $image->resizeToWidth(200);
     $image->save('img/avatars/'.$_FILES['userfile']['name'].'');
     $image = new SimpleImage();
     $image->load('img/'.$_FILES['userfile']['name'].'');
     $image->resizeToWidth(100);
     $image->save('img/avatars/mini/'.$_FILES['userfile']['name'].'');
     
     header('Location:Personal_Area_page.php');
}else{
     header('Location:Personal_Area_page.php');}
?>