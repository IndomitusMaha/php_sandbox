<?php
session_start();
if(isset($_SESSION['last_search']))
{
    $_SESSION['end_of_time_away'] = time();
    echo 'end_of_time_away has been set';
}

header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php');