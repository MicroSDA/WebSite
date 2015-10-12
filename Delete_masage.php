<?php
if(isset($_POST['clear']))
{
    $link=mysql_connect("localhost", "root", "");
    mysql_select_db('tes_adr_com_ua', $link); 
    $s="truncate table masage"; 
    $r=mysql_query($s); 
    mysql_close($link);
    header("Location:Admin_page.php");
}