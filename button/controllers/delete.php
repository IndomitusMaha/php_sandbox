<?php
$id = $_POST['id_for_deletion'];
$sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
$result = mysqli_query($conn, $sql_query);
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php");
die();