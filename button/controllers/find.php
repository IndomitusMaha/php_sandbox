<?php
$status_to_find = $_POST['status_find'];
$status_to_find = "'".$status_to_find."'";

header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php?find='.$status_to_find);
