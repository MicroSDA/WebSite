<?php
include('./connect_db.php');
$masage_admin_aryy=mysqli_query($link, "SELECT * FROM admin_masage");
while($masage_admin=mysqli_fetch_row($masage_admin_aryy))
{echo('<div class="well">');
 echo(''.$masage_admin[1].':');
 echo(''.$masage_admin[2].'<hr>');
 echo($masage_admin[3]);
 echo('</div>');
 
}
?>
