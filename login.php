<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
error_reporting(E_ALL);
if(isset($_POST['sumbit'])){

   $link=mysqli_connect('localhost', '','','tes_adr_com_ua');
   $query = mysqli_query($link,"SELECT * FROM Users WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."'");
   $userdata = mysqli_fetch_assoc($query);
   //////////////////////////////////////////////////////////////
    function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;}   
  ////////////////////////////////////////////////////////////////// 
   if($userdata['Password']==($_POST['pass']))
    {
       $hash = md5(generateCode(10));
       mysqli_query($link, "UPDATE Users SET hash='".$hash."'WHERE id='".$userdata['id']."'");
       $query = mysqli_query($link,"SELECT * FROM Users WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."'");
       $userdata = mysqli_fetch_assoc($query);
       setcookie('id',$userdata['id'],time()+3600,"/");
       setcookie('name',$userdata['Name'],time()+3600,"/");
       setcookie('hash',$userdata['hash'],time()+3600,"/");  
       setcookie('color',$userdata['color'],  time()+3600,"/");
       setcookie('uid',$userdata['uid'],  time()+3600,"/");
       setcookie('img',$userdata['img'],  time()+3600,"/");
       setcookie('email',$userdata['Email'],  time()+3600,"/");
       header('Location:index.php');
    }else{ header('Location:index.php');} 
}
if(isset($_POST['register']))
{
    header('Location:register_page.php');
}
?>