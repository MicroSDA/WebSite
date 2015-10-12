<?php
 include('chek_coockie.php');
?> 
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Что-то не понятное</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="container">
         <div id="header" >Шапка сайта
             <div id="form" style="text-align:center;float:right">
                ﻿<?php
                 include('./Login_or_unlogin_form.php')
                ?>
             </div> 
         </div>
         <div id="navigation"><a href="https://github.com/MicroSDA/"><img src="git_link.PNG" style="width:74px;hight:80px"></a></div>
         <div id="menu">
             <?php 
             include('./Chat_form.php');
             ?>
         </div>
         <div id="content">
             <?php
             include ('./Get_masage.php');
             ?>
         </div>
         <div id="clear"> </div>
    </div>
    <div id="footer" style="text-align:center;font-size:15px;" ><p>Create by Ro(MicrosSDA)</p></div>
</body>
</html>