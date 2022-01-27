<?php
session_start();
$status = $_POST['status_find_thrue_session'];
$status = "'".$status."'";
$_SESSION['status'] = $status;
$_SESSION['last_search'] = time();

header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php');