<?php 
 include('./connect_db.php');//Конект к бд
 $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table.";"); 
 mysqli_close($link); 
 while ($users=mysqli_fetch_row($users_aryy))
       { 
	echo ('<div class="well">');
        echo ('<img src="img/avatars/mini/mini/'.$users[7].'"></img>');
        echo (' <button> Удалить ?</button>');
        echo('<br>');
        echo($users[1]);
        echo('<br>');
        echo($users[3]);
       echo('<form action="Set_color.php" method="POST">
             <input type="color" value="'.$users[5].'" name="color">
             <input type="submit" value="Сохранить">
             </form>');
        echo('<br>');
       echo('<form action="" method="POST">
             <input type="submit" value="Очистить почту?">
             </form>');
        echo('<br>');
        echo('</div>');				
       }
 ?>