<?php
 $date=  date('m.d.y/H-i');
 $link=mysqli_connect('localhost', '','','tes_adr_com_ua');
 mysqli_query($link, "INSERT INTO admin_masage (Data,Name,Masage) VALUES ('".$date."','".$_POST['name']."','".$_POST['masage']."')");
 header('Location:index.php');