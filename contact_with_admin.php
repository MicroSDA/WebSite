<?php
include('./chek_coockie.php')
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

    <title>MicroSDA Blog</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.fileupload.css">
	<link rel="stylesheet" href="css/jquery.fileupload.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body style="background-image: url(img/background/brown.png);background-attachment: fixed;">
    <div class="container">
      <br>
      <br>
      <br>
      <nav class="navbar navbar-inverse" role="navigation" style="font-size:15px;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li><a href="index.php" style="color:#e6e6e6;margin-top: 7%">На главную</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color:#e6e6e6;margin-top: 8%" >Контакты<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://vk.com/id40372407">Vk</a></li>
                  <li><a href="https://github.com/MicroSDA/">GitHub</a></li>              
				  <li><a href="http://habrahabr.ru/users/microsda/">Habrahabr</a></li>
				  <li><a href="https://soundcloud.com/decompilation/song-1">SoundCloud</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Дополнительно</li>
                  <li><a href="contact_with_admin.php">Связаться с администрацией</a></li>
                </ul>
                <?php
                include('./Get_online.php');
                ?>
              </li>
            </ul>
            <?php
            include('./Login_or_unlogin_form.php');
            ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
       <script src="js/jquery-1.11.2.js"></script>
       <script src="js/bootstrap.min.js"></script>
	   
      <div class="jumbotron">
        <h1>Опишите что вас бекспокоит:</h1>
        <div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-alert" ></span>&nbsp &nbsp Все поля обязательны для заполнений</div>
        <form role="form" method="POST" action="send_admin_masage.php"> 
        <div class="form-group">
           <?php
           if(!isset($_COOKIE['name']))
           {
               echo('<h2><input class="form-control" style="width: 200px" type="text" name="name" value="Ваше имя"></h2>');
           }else{echo('<h2><input class="form-control" style="width: 200px" type="hidden" name="name" value="'.$_COOKIE['name'].'"></h2>');}
           ?>     
            <textarea class="form-control" style="max-width: 1020px;" name="masage" ></textarea><br>
            <button type="submit" name="sumbit" class="btn btn-success" >Отправить</button>
        </div>
        </form>
        </div>

      <footer > <!--Футер-->
      <nav class="navbar navbar-inverse" role="navigation" style="font-size:19px;">
       
            <p  style="text-align:center;margin-top:1%;color:#e6e6e6;"><span class="glyphicon glyphicon-fire"></span> Create by Ro(MicroSDA) <span class="glyphicon glyphicon-fire"></span></p>
       
      </nav>
     </footer>

    </div><!-- .content -->
	<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-69005394-1', 'auto');
   ga('send', 'pageview');

</script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
