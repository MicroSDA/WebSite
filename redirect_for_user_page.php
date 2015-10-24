<?php
session_start(); 
$_SESSION['user'] = $_POST['user'];
header("Location:User_page.php");
?>