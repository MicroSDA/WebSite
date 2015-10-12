<?php 
    $link=mysql_connect("localhost", "root", "");
     mysql_select_db('tes_adr_com_ua', $link); 
     $s="SELECT * FROM users;"; 
     $r=mysql_query($s); 
     mysql_close($link); 
     while ($q=mysql_fetch_row($r))
	 { echo '<div class="style3">' .$q[1].'<br> </div>';
					
     }
 ?>