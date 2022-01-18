<?php

$id_for_dropdown = $_POST['change_status'];

$status = $_POST['status'];
//$status = str_replace($id_for_dropdown, '', $pre_status);
      
$stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set status = ? where id = ?");
$stmt->bind_param("si", $status, $id_for_dropdown);
$execstmt = $stmt->execute();
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php");
//echo $id_for_dropdown .'  '.$pre_status.'  '.$status;