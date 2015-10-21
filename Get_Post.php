<?php
include('./connect_db.php');
$post_masage_arry=mysqli_query($link,"SELECT * FROM ".$post_table." ORDER BY id DESC");
while ($post_masage=mysqli_fetch_row($post_masage_arry))
{ 
    echo ($post_masage[1]);
    echo '<h2>';  
    echo ($post_masage[2]);
    echo '</h2>';
    echo '<hr>';
    echo ($post_masage[3]);
    echo ('<hr>');
    echo ('<h3><h3>');
    echo ('<img src="img/avatars/mini/'.$post_masage[7].'"style="border-style:solid;border-width: 1px;border-color: black">');
    echo ('<br>');
    echo ('<br>');
    echo ($post_masage[5]);
    echo (':');
    echo ($post_masage[4]);
    echo ($post_masage[6]);
    echo ('<br>');
}
?>