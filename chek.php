<?
// Скрипт проверки

# Соединямся с БД
$link=mysqli_connect("localhost", "", "", "tes_adr_com_ua");



if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT * FROM Users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if($userdata['hash'] != $_COOKIE['hash'])
    {     
        setcookie("hash","", time() - 3600*24*30*12, "/");
        print $_COOKIE['hash'];	
    }
	
	if($userdata['id'] != $_COOKIE['id'])
	{
		setcookie("id","", time() - 3600*24*30*12, "/");
		print "Id !=";
	}
    else
    {
        print "Hi, ".$userdata['Name'];
		
		echo('<form method="POST">
        <input name="Exit" type="submit" value="Exit">
        </form>');
		
		
    }
}
else
{
   include('login.php');
	
}
?>

<?
if(isset($_POST['Exit']))
{
	session_start();
	unset($_SESSION['id']);
	setcookie("hash","");
	setcookie("id","");
	header('location:index.php');
}
?>