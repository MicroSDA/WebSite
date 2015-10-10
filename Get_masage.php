<?php
$link=mysql_connect("localhost", "root", "");
mysql_select_db('tes_adr_com_ua', $link); 
$s="SELECT * FROM masage;"; 
$r=mysql_query($s); 
mysql_close($link); 
while ($q=mysql_fetch_row($r))
{echo('<font style="color:black">'.$q[1].'</font>
       <font style="color:'.$q[2].'">'.$q[3].'-:</font>
       <font style="color:black">'.$q[4].'</font>
       <hr style="margin-bottom:auto;">');}
?>