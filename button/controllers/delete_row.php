<?php

$id = (int)$_POST['delete_row'];
echo $_POST['delete_row'];
            
$stmt = $conn->prepare("DELETE FROM `xm9wl_mycom` WHERE id = ?");
$stmt->bind_param("i", $id);
$execstmt = $stmt->execute(); 
$stmt->close();
$page = $_POST['Page'];
header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php?page='.$page);
$conn->close();
die();