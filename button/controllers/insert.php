<?php
$title = $_POST['title'];
$id = $_POST['id'];
$text = $_POST['text'];
            
$stmt = $conn->prepare("Insert `xm9wl_mycom` (id, title, text) values(?, ?, ?)");
$stmt->bind_param("iss", $id, $title, $text); //isss means integer, string, string in order of our 
$execstmt = $stmt->execute(); 
$stmt->close();
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php");
die();