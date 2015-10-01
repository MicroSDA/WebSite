
<?
// Страница авторизации

# Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

# Соединямся с БД
$link=mysqli_connect("localhost", "", "", "tes_adr_com_ua");

if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT id, Password FROM Users WHERE Name='".mysqli_real_escape_string($link,$_POST['name'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    # Сравниваем пароли
    if($data['Password']==($_POST['pass']))
    {
        # Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        # Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE Users SET hash='".$hash."'WHERE id='".$data['id']."'");
        # Ставим куки
        setcookie("id", $data['id'], time()+60*60*24*30);
        setcookie("hash", $hash, time()+60*60*24*30);

        # Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: index.php"); exit();
    }
    else
    {
        print "Incorect login or password";
    }
}
?>
<form method="POST">
Username <input name="name" type="text"><br>
Password <input name="pass" type="password"><br>
<input name="submit" type="submit" value="Login">
</form>