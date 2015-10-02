
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hi:) </title>
    <link rel="stylesheet" type="text/css" href="style.css"  />
</head>
<body>
    <table width="100%" border="0" cellspacing="0" bordercolor="black" cellpadding="10">
        <tr>
            <td>
			<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
                <tr>
				<td bgcolor="#FFFFFF" class="clock24std" style="font-family:arial; font-size:30px;">
				 <span class="clock24s" id="clock24_95824" style="color:#6393C3;">информер часов на сайт</span>
				 </a>
				 </td>
				 </tr>
                </table>
                <script type="text/javascript">
                var clock24_95824 = new clock24('95824',120,'%hh:%nn:%ss','ru');
                clock24_95824.daylight('UA'); clock24_95824.refresh();
                </script>
                <div class="style" align="center">Hi, and welcome! <br></div>
            </td>
        </tr>
        <tr>
           <td>
               <div class= "style" align="center">This is my first simple website. </div>
           </td>
        </tr>
    </table>

    <table width="100%" border="2" cellspacing="0" bordercolor="black" cellpadding="10">
        <tr>
            <td>
                <div class="style" align="center" >All registered users:</div>
                <?php 
				    include('get_users.php'); 
                 ?>
            </td>
            <td>
                <div class="style" align="center">Register: <br />
                    <form action ="register.php" method="POST">
                       <p class ="style2" align="left">You name : <input class="form" align="left" type="text" name="name"></p>
                        <p class ="style2" align="left">Email adress: <input class ="form" type="text" name="email" ></p>
                        <p class ="style2" align="left">Password: <input class="form" type="password" name="pass" ></p>
                       <p><input class="button" type="submit" value="Register"></p>
                     </form>  
                </div>
            </td>
			<td>
			   <?php		   
			   include('chek.php');   
			   ?>
			</td>
        </tr>
    </table>

</body>
</html>
