
<?
// �������� �����������

# ������� ��� ��������� ��������� ������
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

# ���������� � ��
$link=mysqli_connect("localhost", "", "", "tes_adr_com_ua");

if(isset($_POST['submit']))
{
    # ����������� �� �� ������, � ������� ����� ���������� ����������
    $query = mysqli_query($link,"SELECT id, Password FROM Users WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    # ���������� ������
    if($data['Password']==($_POST['pass']))
    {
        # ���������� ��������� ����� � ������� ���
        $hash = md5(generateCode(10));

        # ���������� � �� ����� ��� ����������� � IP
        mysqli_query($link, "UPDATE Users SET hash='".$hash."'WHERE id='".$data['id']."'");
        # ������ ����
        setcookie("id", $data['id'], time()+3600);
        setcookie("hash", $hash, time()+3600);

        # ���������������� ������� �� �������� �������� ������ �������
        header("Location: index.php"); exit();
    }
    else
    {
        print "Incorect login or password";
    }
}
?>
<form method="POST">
<p class="style"> Username: <input class="form" name="name" type="text"></p>
<p class="style"> Password: <input class="form" name="pass" type="password"></p>
<input class="button" name="submit" type="submit" value="Login">
</form>