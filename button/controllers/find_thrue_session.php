<?php
session_start();
$status = $_POST['status_find_thrue_get'];
$status = "'".$status."'";
$_SESSION['status'] = $status;
//echo $_SESSION['status'];
header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php');