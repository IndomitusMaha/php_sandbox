<?php

$mysql = mysqli_connect('localhost','root','','tryjoomla');
        if(!$mysql){die('Connection error:'.mysql_error());}
        if($mysql){echo "It's connected";}
        
echo "!;"
         
         
?>