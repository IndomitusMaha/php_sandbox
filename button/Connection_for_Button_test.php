<?php
        $title = '';
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
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            die();
        }
        
        if (isset($_POST['delete'])){
            
            $id = $_POST['id_for_deletion'];
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            die();
        }
        
        if (isset($_POST['update'])){
            $title = $_POST['title'];
            $id = $_POST['id'];
            $text = $_POST['text'];
            
            $sql_query = "UPDATE `xm9wl_mycom` Set title = $title,  text = $text where id = $id";
            $result = mysqli_query($conn, $sql_query);;
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            $conn->close();
            die();
        }
        if (isset($_POST['delete_row'])){
            $id = (int)$_POST['delete_row'];
            echo $_POST['delete_row'];
            
            $stmt = $conn->prepare("DELETE FROM `xm9wl_mycom` WHERE id = ?");
            $stmt->bind_param("i", $id);
            $execstmt = $stmt->execute(); 
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            $conn->close();
            die();  
        }
        
        if (isset($_POST['update_row'])){
            $id_for_update = (int)$_POST['update_row'];
            require_once './Update_row.php'; 
        }
        
        if (isset($_POST['update_row_in_update_row'])){
            
            $id = $_POST['id_for_update'];
            //$id = $_POST['update_row'];
            $title = (string)$_POST['title_row'];            
            $text = (string)$_POST['text_row'];
            //echo $id ."<br>".$title."<br>".$text ."<br>";
            
            $stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set title = ?,  text = ? where id = ?");
            $stmt->bind_param("ssi", $title, $text, $id);
            $execstmt = $stmt->execute(); 
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            $conn->close();
            die();
        }
        
        if (isset($_POST['change_status'])){
            $status1 = $_POST['status1'];
            $status2 = $_POST['status2'];
            
            $id_for_dropdown = $_POST['change_status'];
            echo $status1, $status2, $id_for_dropdown;
        /*
            $stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set status = ? where id = ?");
            $stmt->bind_param("si", $status, $id_for_dropdown);
            $execstmt = $stmt->execute();
            //header("Location:http://localhost/DB_sandbox/Button/Show_db.php");*/
        }
        