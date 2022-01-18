<?php
$title = $_POST['title'];
$id = $_POST['id'];
$text = $_POST['text'];

$conn = new mysqli('localhost','root','','tryjoomla');
if(!$conn){die('Connection error:'.mysql_error());}

$sql_query = "UPDATE `xm9wl_mycom` Set title = $title,  text = $text where id = $id";
$result = mysqli_query($conn, $sql_query);;
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php");
$conn->close();
die();