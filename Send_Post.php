<?php
include ('./connect_db.php');
if(isset($_POST['sumbit']))
{
    if($_POST['text']!=NULL)
    {   
        $data=date('m.d.y/H-i');
        $head=$_POST['head'];
        
        mysqli_query($link,"INSERT INTO ".$post_table." (Header,Post,Data,Name,img) VALUES ('".$head."','".$_POST['text']."','".$data."','".$_COOKIE['name']."','".$_COOKIE['img_min']."');");
        header('Location:index.php');
        
    }else{header('Location:index.php');}
    
}else{header('Location:index.php');}