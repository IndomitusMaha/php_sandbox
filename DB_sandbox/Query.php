<?php

require_once('Connection.php');

function Show(){
    $sql_show = 'SELECT * FROM `xm9wl_mycom`';
    $result = mysqli_query($mysql, $sql_show);

    echo "<br>\n";
    echo "<br>\n";

    while ($row = mysqli_fetch_assoc($result)){
        echo ("$row[id]"."  "."$row[title]"."<br>\n");
}
}

function Insert(){
    $sql_insert = 'INSERT INTO `xm9wl_mycom` (id, title, text)'
            . 'VALUES (33, "I ADDED THIS ROW", "132456789"  )';
    mysqli_query($mysql, $sql_insert);

    echo "<br>\n<br>\nINFO WAS INSERTED<br>\n<br>\n";

    $sql_show2 = 'SELECT * FROM `xm9wl_mycom`';
    $result2 = mysqli_query($mysql, $sql_show2);

    while ($row = mysqli_fetch_assoc($result2)){
        echo ("$row[id]"."  "."$row[title]"."<br>\n");
}
}

function Update(){
    
    $sql_update = 'UPDATE `xm9wl_mycom` SET title = "I CHANGED THIS ROW" WHERE id = 33';
    mysqli_query($mysql, $sql_update);

    echo "<br>\n<br>\nINFO WAS UPDATED<br>\n<br>\n";
    
    $sql_show3 = 'Select * FROM `xm9wl_mycom`';
    $result3 = mysqli_query($mysql, $sql_show3);

    while ($row = mysqli_fetch_assoc($result3)){
        echo ("$row[id]"."  "."$row[title]"."<br>\n");
}
}

function Delete(){

    $sql_delete = 'DELETE FROM `xm9wl_mycom` WHERE id = 33';
    mysqli_query($mysql, $sql_delete);

    echo "<br>\n<br>\nINFO WAS DELETED<br>\n<br>\n";

    $sql_show4 = 'Select * FROM `xm9wl_mycom`';
    $result4 = mysqli_query($mysql, $sql_show4);

    while ($row = mysqli_fetch_assoc($result4)){
        echo ("$row[id]"."  "."$row[title]"."<br>\n");

}
}

?>