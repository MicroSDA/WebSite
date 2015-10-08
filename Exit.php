<?php
if(isset($_POST['Exit']))
 {
 setcookie('id','',time()-3600,"/");
 setcookie('name','',time()-3600,"/");
 setcookie('hash','',time()-3600,"/");
 header('Location:index.php');
 }  