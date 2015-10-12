<?php
if(intval($_COOKIE['uid'])!==1)
{
    header('Location:index.php');
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
    <title>Что-то не понятное</title>
    <link rel="stylesheet" type="text/css" href="for_admin_style.css" />
</head>
<body>
    <div id="panel">Админ панель
	<div id="users">Пользователи:
	<?php
	include('Get_users.php');
	?>
	</div>
	<div id="chat">Очистить чат ?<br>
            <form action="Delete_masage.php" method="POST">
                <input type="submit" name="clear" value="Очистить" > 
            </form> 
	</div>
	</div>
</body>
</html>