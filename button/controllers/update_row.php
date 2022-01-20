<?php
$id_for_update = (int)$_POST['update_row'];
require_once '../views/Update_row.php';

if (isset($_POST['update_row_in_update_row'])){
            
            $id = $_POST['id_for_update'];
            $title = (string)$_POST['title_row'];            
            $text = (string)$_POST['text_row'];
            //echo $id ."<br>".$title."<br>".$text ."<br>";
            
            $stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set title = ?,  text = ? where id = ?");
            $stmt->bind_param("ssi", $title, $text, $id);
            $execstmt = $stmt->execute(); 
            $stmt->close();
            header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php');
            /*
            $page = (STRING)$_POST['Page'];
            header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php?page='.$page);*/
            $conn->close();
            die();
}