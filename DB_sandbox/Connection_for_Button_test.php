<?php
        $title = '';
        $id = '';
        $text = '';
        $select = '';
        $select2 = '';
	
        $conn = new mysqli('localhost','root','','tryjoomla');
	if(!$conn){die('Connection error:'.mysql_error());}
        
        if (isset($_POST['insert'])){
            $title = $_POST['title'];
            $id = $_POST['id'];
            $text = $_POST['text'];
            
            $stmt = $conn->prepare("Insert `xm9wl_mycom` (id, title, text) values(?, ?, ?)");
            $stmt->bind_param("iss", $id, $title, $text); //isss means integer, string, string in order of our 
            $execstmt = $stmt->execute();
            //echo $execstmt;
            //echo "Data inserted";
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Show_db.php");
            die();?>
            <!--<a href="Show_db.php">Watch result</a>
            <?php
        }
        
        if (isset($_POST['delete'])){
            $id = $_POST['id_for_deletion'];
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            //echo $execstmt;
            //echo "Data deleted";
            header("Location:http://localhost/DB_sandbox/Show_db.php");
            die();?>?>
            <!--<a href="Show_db.php">Watch result</a> 
        <?php
        
        }
        
        if (isset($_POST['update'])){
            $title = $_POST['title'];
            $id = $_POST['id'];
            $text = $_POST['text'];
            
            $stmt = $conn->prepare("Update `xm9wl_mycom` Set id = $id title = $title  text = $text");
            header("Location:http://localhost/DB_sandbox/Show_db.php");
            die();?>
            <!--<a href="Show_db.php">Watch result</a>
            <?php
        }
        
        if (isset($_POST['select'])){
            $select = $_POST['select'];
            $select2 = $_POST['select2'];
            header("Location:http://localhost/DB_sandbox/Select.php");
            //die();?>
            /*$sql_query = "SELECT $select";
            $result = mysqli_query($mysql, $sql_query);
                while ($row = mysqli_fetch_assoc($result)){
                       } 
            //echo $execstmt;
            //echo "Data deleted";  */
            ?>
            <!-- <a href="Show_db.php">Watch result</a> 
        <?php
        
        }
	
$conn->close();
	
        
