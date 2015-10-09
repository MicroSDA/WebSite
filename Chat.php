<?php
if(isset($_POST['Send']))
{ if(isset($_POST['masage']))
    { if($_POST['masage']!=NULL)
        {
        $date=  date('m.d.y/H-i');
        $link=mysql_connect("localhost", "root", "", "tes_adr_com_ua"); 
        mysql_select_db('tes_adr_com_ua', $link);
        $s="INSERT INTO masage (Masage) VALUES('".$date.". ".$_COOKIE['name']."-:".$_POST['masage']."');";
        mysql_query($s); 
        mysql_close($link);
        header ('Location: index.php');
        }
        else{header ('Location: index.php');}
    }     
}