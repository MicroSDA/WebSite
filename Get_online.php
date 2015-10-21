<?php
     include('./connect_db.php');//Конект к бд
     $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table.""); 
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
      style="color:#e6e6e6;margin-top: 5%" >Сейчас онлайн: '.$this_online.'<span class="caret"></span></a>');
echo' <ul class="dropdown-menu" role="menu">';
     $users_aryy=mysqli_query($link,"SELECT * FROM ".$users_table."");
     while ($users=mysqli_fetch_row($users_aryy))
     {       
         if($users[8]+60 >=$data_stamp)
         {
            echo '<li><a href="">'.$users[1].'</a></li>';
         }  
     }
     
     if(!isset($this_online))
     {
      echo '<li><a> Все спят</a></li>';  
     }
 echo'</ul>';
echo'</li>';