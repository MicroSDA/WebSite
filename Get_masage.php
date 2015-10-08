<?php
$link=mysql_connect("localhost", "root", "");
mysql_select_db('tes_adr_com_ua', $link); 
$s="SELECT * FROM masage;"; 
$r=mysql_query($s); 
mysql_close($link); 
while ($q=mysql_fetch_row($r))
{ echo '<div>' .$q[1].'<br> </div>';}
 ?>