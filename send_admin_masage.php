<?php
 $date=  date('m.d.y/H-i');
 include('./connect_db.php');//Конект к бд
 mysqli_query($link, "INSERT INTO ".$admin_masage_table." (Data,Name,Masage) VALUES ('".$date."','".$_POST['name']."','".$_POST['masage']."')");
 mysqli_close($link);
 header('Location:index.php');