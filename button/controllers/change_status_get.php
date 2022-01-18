<?php

$id_for_dropdown = $_GET['change_status'];

$pre_status = $_GET['status'.$id_for_dropdown];
$status = str_replace($id_for_dropdown, '', $pre_status);
      
$stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set status = ? where id = ?");
$stmt->bind_param("si", $status, $id_for_dropdown);
$execstmt = $stmt->execute();
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db_get.php");
//echo $id_for_dropdown .'  '.$status;