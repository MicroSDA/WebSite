<?
// ������ ��������

# ���������� � ��
$link=mysqli_connect("localhost", "", "", "tes_adr_com_ua");



if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT * FROM Users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if($userdata['hash'] != $_COOKIE['hash'])
    {     
        session_start();
	    unset($_SESSION['id']);
	    setcookie("hash","");
	    setcookie("id","");
	    header('location:index.php');
    }
	
	if($userdata['id'] != $_COOKIE['id'])
	{
		session_start();
	    unset($_SESSION['id']);
	    setcookie("hash","");
	    setcookie("id","");
	    header('location:index.php');
		
	}
    else
    {
		echo('<p class="style2" align="center">Hi, '.$userdata['Name'].' </p>');
		echo('<form method="POST">
        <input class="button" name="Exit" type="submit" value="Exit">
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