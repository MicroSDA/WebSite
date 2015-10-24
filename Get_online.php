<?php
     $this_online=0;
     include('./connect_db.php');//Конект к бд
     $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table."")or die(mysqli_error($link)); 
     $data_stamp=time();   
    while ($users=mysqli_fetch_row($users_aryy))
     { 
         if($users[8]+60 >=$data_stamp)
         {
           $this_online++; 
         }  
     }
echo' <li class="dropdown">';
echo('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
      style="color:#e6e6e6;" >Сейчас онлайн:&nbsp;'.$this_online.'&nbsp;<span class="caret"></span></a>');
echo' <ul class="dropdown-menu" role="menu">';
     $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table."");
     while ($users=mysqli_fetch_row($users_aryy))
     {       
         if($users[8]+60 >=$data_stamp)
         {
           echo'<li><a>
           <form method="POST" action="redirect_for_user_page.php" >
           <button style=" background-image: none;background-color: transparent; border-color:transparent" "type="submit" name="sumbit">'.$users[1].'</button>
           <input type="hidden" name="user" value="'.$users[1].'">
           </form>
           </a></li>';
         }  
     }
     
     if(!isset($this_online)||$this_online==0)
     {
      echo '<li><a> Все спят</a></li>';  
     }
   
   
   echo '<li class="divider"></li>';
   echo '<li class="dropdown-header">Все пользователи:</li>';
   $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table."");
   while ($users=mysqli_fetch_row($users_aryy))
     {          
       echo'<li><a>
           <form method="POST" action="redirect_for_user_page.php" >
           <button style=" background-image: none;background-color: transparent; border-color:transparent" "type="submit" name="sumbit">'.$users[1].'</button>
           <input type="hidden" name="user" value="'.$users[1].'">
           </form>
           </a></li>'; 
     }
 echo'</ul>';
echo'</li>';
