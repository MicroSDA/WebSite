<?php
include('./connect_db.php');//Конект к бд
$masage_aryy=mysqli_query($link,"SELECT * FROM mail_".$_COOKIE['name']." ORDER BY id DESC;"); 
mysqli_close($link); 
while ($masage=mysqli_fetch_row($masage_aryy))
{echo(' <div class="well">
   <div class="row">
   <div class="col-md-2">
   <img src="img/avatars/mini/mini/'.$masage[5].'"><br>
   <font style="color:black">'.$masage[1].'</font><br>
   <font style="color:'.$masage[2].'">'.$masage[3].'</font>
   </div>
   <div class="col-md-10">
   <font style="color:black;">'.$masage[4].'</font>
   </div>
   </div>
   </div>');}
?>
 