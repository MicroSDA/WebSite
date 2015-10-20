<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Регистранция</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body style="background-image: url(img/brown.png);">
     <div class="container">
              <div class="jumbotron" style="max-width:300px;margin-left:auto;margin-right:auto;margin-top:20%;min-height:375px">
                  <h2 style="text-align: center">Регистрация:</h2>
				      <form action ="register.php" method="POST" class="navbar-form navbar-right" role="form">
                         <div class="form-group" style="text-align:center">
                          <input type="text" placeholder="Login" name="name" class="form-control"><br><br>
                          <input type="password" placeholder="Password" name="pass" class="form-control"><br><br>
                          <input type="text" placeholder="Email" name="email" class="form-control"><br><br>
                          <button type="submit" name="register" class="btn btn-success">Зарегистрироваться</button>
                          </div>
                      </form>
             </div>
     </div>
	 <footer>
	 </footer>
</body>
</html>
