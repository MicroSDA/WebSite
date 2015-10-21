<?php 
 include('./connect_db.php');//Конект к бд
 $users_aryy=mysql_query($link,"SELECT * FROM ".$users_table.";"); 
 mysql_close($link); 
 while ($users=mysql_fetch_row($users_aryy))
       { 
	echo '<div class="style3">' .$q[1].'<br> </div>';				
       }
 ?>