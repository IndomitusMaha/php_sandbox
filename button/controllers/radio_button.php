<?php 
/*$id_for_row = $POST_['id_for_row'];

$pre_bool = $POST['first_radio'.$id_for_row];
          
$bool = (int)str_replace($id_for_row, '', $pre_bool);

$stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set bool = ? where id = ?");
$stmt->bind_param("ii", $bool, $id_for_row);
$execstmt = $stmt->execute(); 
$stmt->close();
header("Location:http://localhost/DB_sandbox2/php_sandbox/Button/views/Show_db.php");

 