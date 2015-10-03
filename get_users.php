<?php 
$link=mysql_connect("localhost", "", "");
mysql_select_db('tes_adr_com_ua', $link); 
$s="SELECT * FROM Users;"; 
$r=mysql_query($s); 
mysql_close($link); 
while ($q=mysql_fetch_row($r))
{ echo '<div>' .$q[1].'<br> </div>';}
 ?>
 