<?php
$status_to_find = $_POST['status_find'];
$status_to_find = "'".$status_to_find."'";


/*
$this_page_first_result = $_POST['this_page_first_result'];
$results_per_page = $_POST['results_per_page'];

$sql_query = 'Select id, title, text, status, bool from `xm9wl_mycom` where status = '.$status_to_find.' order by id limit'.' '.$this_page_first_result.', '.$results_per_page; //limit 0, 6 was deleted
$result = mysqli_query($mysql, $sql_query);
    echo $sql_query;
    while($row = mysqli_fetch_assoc($result)):
        echo $row['id'];
    endwhile;*/
header('Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php?find='.$status_to_find);
