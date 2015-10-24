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

    <title>Чат</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <script type="text/javascript" src="js/load_chat.js"></script> 
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#e6e6e6" >
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
      

       <div id="is" class="jumbotron" style="height:920px;">
          <div style="text-align: center">        
                      <h2>Чат:</h2>                 
          </div>
           <hr>
               
             <div id="is" style="overflow:auto;height: 500px;">
                   <div id="messages" style="overflow:auto;height: 500px"> 
               
             </div>
                
         </div>
            <?php
                include ('./Chat_form.php');
                 ?>
         </div>
	
    
       <footer > <!--Футер-->
      <nav class="navbar navbar-inverse" role="navigation" style="font-size:19px;">
       
            <p  style="text-align:center;margin-top:1%;color:#e6e6e6;"><span class="glyphicon glyphicon-fire"></span> Create by Ro(MicroSDA) <span class="glyphicon glyphicon-fire"></span></p>
       
      </nav>
     </footer>
    </div><!-- /container -->
 

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
       <script src="js/jquery-1.11.2.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script type="text/javascript" src="http://www.google.com/jsapi"></script>
       
  </body>
</html>