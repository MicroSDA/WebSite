<?php
$link=mysql_connect("localhost", "root", "");
mysql_select_db('tes_adr_com_ua', $link); 
$s="SELECT * FROM masage;"; 
$r=mysql_query($s); 
mysql_close($link); 
while ($q=mysql_fetch_row($r))
{ echo $q[1].'<hr style="margin-bottom:auto;">';}
 ?>