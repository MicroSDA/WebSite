<?php
include ('./connect_db.php');
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
      $data=date('m.d.y/H-i');
      $color='color:black';
       mysqli_query($link,"INSERT INTO mail_".$_POST['name']." (Data,Color,Name,Masage,img) VALUES ('".$data."','".$_COOKIE['color']."','".$_COOKIE['name']."','".$_POST['mess']."','".$_COOKIE['img']."');");
       mysqli_query($link,"INSERT INTO mail_".$_COOKIE['name']." (Data,Color,Name,Masage,img) VALUES ('".$data."','".$_COOKIE['color']."','".$_COOKIE['name']."','-->".$_POST['name'].":<br><hr> ".$_POST['mess']."','".$_COOKIE['img']."');");
}