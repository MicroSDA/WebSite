<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
error_reporting(E_ALL);
if(isset($_POST['sumbit'])){

   include('./connect_db.php');//Конект к бд
   include('./generate_hash.php');//Функция генирации хеша
   
   $query = mysqli_query($link,"SELECT * FROM ".$users_table." WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."'");
   $userdata = mysqli_fetch_assoc($query);
   //////////////////////////////////////////////////////////////   
  ////////////////////////////////////////////////////////////////// 
   if($userdata['Password']==($_POST['pass']))
    {
       $hash = md5(generateCode(10));
       mysqli_query($link, "UPDATE ".$users_table." SET hash='".$hash."'WHERE id='".$userdata['id']."'");
       $query = mysqli_query($link,"SELECT * FROM ".$users_table." WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."'");
       $userdata = mysqli_fetch_assoc($query);
       setcookie('id',$userdata['id'],time()+3600,"/");
       setcookie('name',$userdata['Name'],time()+3600,"/");
       setcookie('hash',$userdata['hash'],time()+3600,"/");  
       setcookie('color',$userdata['color'],  time()+3600,"/");
       setcookie('uid',$userdata['uid'],  time()+3600,"/");
       setcookie('img',$userdata['img'],  time()+3600,"/");
       setcookie('img_min',$userdata['img'],  time()+3600,"/");
       setcookie('email',$userdata['Email'],  time()+3600,"/");
       header('Location:index.php');
    }else{ header('Location:index.php');} 
}
if(isset($_POST['register']))
{
    header('Location:register_page.php');
}
?>