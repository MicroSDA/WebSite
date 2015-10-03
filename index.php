<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <title>Что-то не понятное</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="container">
         <div id="header" >Шапка сайта
             <div id="form" style="text-align:center;float:right">
                 <?php
                 include('chek.php');
                 ?>
             </div> 
         </div>

         <div id="navigation"><a href="https://github.com/MicroSDA/"><img src="git_link.PNG" style="width:74px;hight:80px"></a></div>

         <div id="menu" >Зарегистрированные:<br>
		 <hr style="border-style:solid;border-width:1px;">
		 <?php
			include('get_users.php');
			?>
		 </div>

         <div id="content">
		    
		 </div>
		 <div id="clear"> </div>
    </div>
	<div id="footer" style="text-align:center;font-size:15px;" ><p>Create by Ro(MicrosSDA)</p></div>
</body>
</html>
