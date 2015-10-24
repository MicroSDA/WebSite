<?php
/*if(isset($_POST['sumbit']))
{ if(isset($_POST['text']))
    { if($_POST['text']!=NULL)
        {
        $date=  date('m.d.y/H-i');
        include('./connect_db.php'); 
        mysqli_query($link,"INSERT INTO ".$masage_table." (Data,Color,Name,Masage,img) VALUES('".$date."','".$_COOKIE['color']."','".$_COOKIE['name']."','".$_POST['text']."','".$_COOKIE['img']."');"); 
        mysqli_close($link);
        header ('Location: Chat_page.php');
        }
        else{header ('Location: Chat_page.php');}
    }     
}*/
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
        $date=  date('m.d.y/H-i');
        include('./connect_db.php'); 
        mysqli_query($link,"INSERT INTO ".$masage_table." (Data,Color,Name,Masage,img) VALUES('".$date."','".$_COOKIE['color']."','".$_COOKIE['name']."','".$_POST['mess']."','".$_COOKIE['img']."');"); 
        mysqli_close($link);
}