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
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    </head>

  <body style="background-image: url(img/brown.png);">
    <div class="container">
      <br>
      <br>
      <br>
      <nav class="navbar navbar-inverse" role="navigation" style="font-size:19px;">
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
                  <li><a href="https://soundcloud.com/decompilation/song-1">SoundCloud</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Дополнительно</li>
                  <li><a href="contact_with_admin.php">Связаться с администрацией</a></li>
                </ul>
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
          <div class="row" >
              <div class="col-sm-4" style="background-color:">
              <h3 class="bg-info" style="width: 330px;">Ваши персональные данные:</h3>
              <hr style="color:black;border-style: solid;border-width: 1px">
              <div class="row" style="text-align:center">  
                 <div  style="text-align: center;">
                     <img  style="border-style: solid;border-width: 1px" src="img/<?php echo($_COOKIE['img']) ?>" title="Aватар" alt="Аватар">
                 </div>
                <br>	  
			    <form enctype="multipart/form-data" action="load_avatar.php" method="POST">
              
                <input type="hidden" name="MAX_FILE_SIZE" value="102400" />
               
                <input class="btn btn-success fileinput-button" name="userfile" type="file" style="min-width:25px;max-width:150px;margin-left:auto;margin-right:auto"/>
				<br>
                <input class="btn btn-success fileinput-button" type="submit" value="Загрузить" />
                </form>
                <br>
                <br>
              </div>
              <h4>Имя: <?php echo ($_COOKIE['name']); ?>.</h4>
              <h4>Почта: <?php echo ($_COOKIE['email']); ?>.</h4> 
              </div>
             <div class="col-sm-4">
             <h3 class="bg-info" style="width: 85px;align:center"></h3><h3 class="bg-info" style="text-align: center" >О себе:</h3>
             <hr style="color:black;border-style: solid;border-width: 1px">
             <h2> 404 :(</h2> 
             </div>
             <div class="col-sm-4">
             <h3 class="bg-info" style="width: 85px;align:center"></h3><h3 class="bg-info" style="text-align: center" >Почта:</h3>
             <hr style="color:black;border-style: solid;border-width: 1px">
             <h2> 404 :(</h2>
             </div>
          </div>
          
      </div>
	  
	 
     <footer > <!--Футер-->
       <nav class="navbar navbar-inverse" role="navigation" style="font-size:19px;">
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
            <p  style="text-align:center;margin-top:1%;color:#e6e6e6;">Create by Ro(MicroSDA)</p>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
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
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>