<?php
include('./chek_coockie.php');
if(!isset($_COOKIE['id']))
 {
    header("Location:index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Личный кабинет</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.fileupload.css">
	<link rel="stylesheet" href="css/jquery.fileupload.css">
        <script type="text/javascript" src="js/load_mail.js"></script> 
    <script src="js/jquery-1.11.2.js"></script>
    </head>

  <body style="background-image: url(img/background/brown.png);background-attachment: fixed;">
    <div class="container">
      <br>
      <br>
      <br>
       <nav role="navigation" class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="./index.php" class="navbar-brand" style="font-size:15px;color:#e6e6e6">MicroSDA Blog</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
       
               
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color:#e6e6e6">Контакты<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                   <li><a href="https://vk.com/id40372407">Vk</a></li>
                   <li><a href="https://github.com/MicroSDA/">GitHub</a></li>              
				   <li><a href="http://habrahabr.ru/users/microsda/">Habrahabr</a></li>
				   <li><a href="https://soundcloud.com/decompilation/song-1">SoundCloud</a></li>
                   <li class="divider"></li>
                   <li class="dropdown-header">Дополнительно</li>
                   <li><a href="contact_with_admin.php">Связаться с администрацией</a></li>
                    </ul>
                </li>
               <?php
                include('./Get_online.php');
                ?>
                    <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color:#e6e6e6">Навигация<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="./Chat_page.php">Чат</a></li>  
                    </ul>
                    </li>                
                    </ul>  
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#e6e6e6">
                        <b>
                        <?php
                     if(!isset($_COOKIE['name']))
                       {
                       echo('Войти');
                       }else{echo('Привет, '.$_COOKIE['name'].'');}
                         ?>                      
                        </b> 
                        <span class="caret"></span></a>
                        <?php
                        if(!isset($_COOKIE['name']))
                        {
                            include('./Login_or_unlogin_form.php');
                        }
                        if(isset($_COOKIE['name']))
                        {
                            include('./Login_or_unlogin_form.php');
                        }
                        ?>
                    </ul>
                    
                
            
        </div>
    </nav>
       <script src="js/jquery-1.11.2.js"></script>
       <script src="js/bootstrap.min.js"></script>
       
     
        <div class="jumbotron">
       <div >
        <div class="tabbable">  
            <ul class="nav nav-tabs" >      
                <li class="active" ><a href="#profile" data-toggle="tab">Профиль</a></li>
              <li><a href="#mail" data-toggle="tab">Почта</a></li>
              <li><a href="#setings" data-toggle="tab">Настройки</a></li>
               <?php
               if($_COOKIE['uid']==2)
                  {
                  echo('<li><a href="#admin" data-toggle="tab"><font style="color:red">Панель управления</font></a></li>');
                  }
               ?>
              </ul>
              <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <div class="row">
                  
                    <div class="col-sm-4" >
				 <h3 class="bg-info" style="width: 330px;">Ваши персональные данные:</h3>
                                 <hr style="color:black;border-style: solid;border-width: 1px">
				 <div  style="text-align: center;">
                     <img  style="border-style: solid;border-width: 1px" src="img/avatars/<?php echo($_COOKIE['img']) ?>" title="Aватар" alt="Аватар">
                 </div>
				 <h4>Имя: <?php echo ($_COOKIE['name']); ?>.</h4>
                 <h4>Почта: <?php echo ($_COOKIE['email']); ?>.</h4>
                 <h4>Статус:
                  <?php
                  if($_COOKIE['uid']==0)
                  {
                   echo('Пользователь.');  
                  }
                  if($_COOKIE['uid']==1)
                  {
                  echo('<font style="color:green">Модератор.</font>');  
                  }
                  if($_COOKIE['uid']==2)
                  {
                  echo('<font style="color:red">Администратор.</font>');
                  }
                  ?>
                </h4>
		</div>
              
		<div class="col-sm-4">
                <h3 class="bg-info" style="width: 85px;align:center"></h3><h3 class="bg-info" style="text-align: center" >О себе:</h3>
                <hr style="color:black;border-style: solid;border-width: 1px">
                <h2> 404 :(</h2> 
                </div>
                </div>				
              </div>
              <div class="tab-pane" id="mail">
                  <div class="jumbotron" style="text-align: center;max-height: 550px">
                      <h3 style="margin-top: -3%">Почта:</h3>
                      <hr>
                      <div id="mess_to_send" style="min-height: 300px;max-height: 300px;border-style: solid;border-width: 1px;border-color: black;overflow: auto;text-align: left;word-wrap:break-word ">
                         
                      </div>
                     <br>
                         <div style="max-height: 200px">
                         <form  method="POST" action="javascript:send();">
                           <div class="form-group">  
                               <input class="form-control" id="send_name" name="name" value="Имя"><br>
                               <textarea id="send_mail" class="form-control" style="max-width: 1020px;min-height:50px" name="text" ></textarea><br>
                               <button type="submit" name="sumbit" class="btn btn-primary btn-lg btn-block" style="" >Отправить</button>
                          </div>
                        </form>
                       </div>
                  </div>
              </div>      
	      <div class="tab-pane" id="setings">
                <div class="row"  >
               <div class="col-sm-4" style="max-width: 230px;">
                <h3>Сменить аватар:</h3>
                <hr style="color:black;border-style: solid;border-width: 1px">
                <form enctype="multipart/form-data" action="load_avatar.php" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="614400" />     
                <input class="btn btn-success fileinput-button" name="userfile" type="file" style="min-width:25px;max-width:150px;"/>
                <br>
                <button class="btn btn-success fileinput-button" type="submit" value="Загрузить"><i class="glyphicon glyphicon-upload"></i> Загрузить</button>
                </form>   
                </div>
                 </div>
              </div>   
                   <?php
               if($_COOKIE['uid']==2)
                  {
                  echo ('<div class="tab-pane" id="admin">');//Таб
                  echo ('<div class="row">');//ров
                  echo ('<div class="col-sm-4">');//колум
                  echo ('<div style="max-height:300px;overflow: auto;">');//усер
                  include ('./Get_users.php');
                  echo ('</div>');//усер
                  echo ('</div>');//таб
                  echo ('<div class="col-sm-4" style="max-height:300px;overflow: auto;">');//колум
                  include('./Get_admin_masage.php');
                  echo ('</div>');//колум
                  echo ('</div>');//ров
                  echo ('</div>');//таб
                  
                  }
               ?>      
              </div>
        </div>
            </div>
 </div>
	  
	 
     <footer > <!--Футер-->
      <nav class="navbar navbar-inverse" role="navigation" style="font-size:19px;">
       
            <p  style="text-align:center;margin-top:1%;color:#e6e6e6;"><span class="glyphicon glyphicon-fire"></span> Create by Ro(MicroSDA) <span class="glyphicon glyphicon-fire"></span></p>
       
      </nav>
     </footer>
    </div> <!-- /container -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69005394-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
  //Ставим цикл на каждые три секунды
   load_messes();
   setInterval(load_messes,3000);
 </script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>