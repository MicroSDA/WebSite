<?php
include('./connect_db.php');//Конект к бд
$masage_aryy=mysqli_query($link,"SELECT * FROM ".$masage_table.";"); 
mysql_close($link); 
while ($masage=mysql_fetch_row($masage_aryy))
{echo('<font style="color:black">'.$masage[1].'</font>
       <font style="color:'.$masage[2].'">'.$q[3].'-:</font>
       <font style="color:black">'.$masage[4].'</font>
       <hr style="margin-bottom:auto;">');}
?>