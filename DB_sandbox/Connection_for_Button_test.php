<?php
	$title = $_POST['title'];
	$id = $_POST['id'];
	$text = $_POST['text'];
	$alias = $_POST['alias'];
	
	$conn = new mysqli('localhost','root','','tryjoomla');
	if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("Insert `xm9wl_mycom` (id, title, text, alias) values(?, ?, ?, ?)");
		$stmt->bind_param("isss", $id, $title, $text, $alias); //isss means integer, string, string in order of our 
		$execstmt = $stmt->execute();
		echo $execstmt;
		echo "Data inserted";
		
                $stmt->close();
		$conn->close();
	}
        
        /*
        require_once('Connection.php');
        
        $sql_insert = "INSERT INTO `xm9wl_mycom` ('id', 'title', 'text') VALUES ('$id', '$title', '$text')";
        mysqli_query($mysql, $sql_insert);

        echo "<br>\n<br>\nINFO WAS INSERTED<br>\n<br>\n";

        $sql_show2 = 'SELECT * FROM `xm9wl_mycom`';
        $result2 = mysqli_query($mysql, $sql_show2);

        while ($row = mysqli_fetch_assoc($result2)){
        echo ("$row[id]"."  "."$row[title]"."<br>\n");
        }*/
?>