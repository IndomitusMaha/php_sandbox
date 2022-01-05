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
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            die();
        }
        
        if (isset($_POST['delete'])){
            
            $id = $_POST['id_for_deletion'];
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            //echo $execstmt;
            //echo "Data deleted";
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            die();
        }
        
        if (isset($_POST['update'])){
            $title = $_POST['title'];
            $id = $_POST['id'];
            $text = $_POST['text'];
            
            $sql_query = "UPDATE `xm9wl_mycom` Set title = $title,  text = $text where id = $id";
            $result = mysqli_query($conn, $sql_query);
            //$conn ->query($sql_query);
            //echo $sql_query;
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            $conn->close();
            die();
        }
        if (isset($_POST['delete_row'])){
            //$id = (int)$_POST['delete_row'];
            echo $_POST['delete_row'];
            //header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            /*
            $stmt = $conn->prepare("DELETE FROM `xm9wl_mycom` WHERE id = ?");
            $stmt->bind_param("i", $id);
            $execstmt = $stmt->execute(); 
            $stmt->close();
            
            /*
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            echo $sql_query; 
            //$conn ->query($sql_query);
            //echo $sql_query;
            */
            //$conn->close();
            //die();
        }
        
        if (isset($_GET['update_row'])){
            $query_title = "Select * `xm9wl_mycom` WHERE id = $id";
            header("Location:http://localhost/DB_sandbox/Button/Update_row.php");
            $conn->close(); 
        }
        
        if (isset($_POST['update_row_in_update_row'])){
            //include 'Update_row.php';
            //require_once './Update_row.php';
            $id = $_POST['id_for_update'];
            $title = (string)$_POST['title_row'];            
            $text = (string)$_POST['text_row'];
            
            /*$sql_query = "UPDATE `xm9wl_mycom` Set title = $title,  text = $text where id = $id";
            $result = mysqli_query($conn, $sql_query);
            $conn ->query($sql_query);*/
            $stmt = $conn->prepare("UPDATE `xm9wl_mycom` Set title = ?,  text = ? where id = ?");
            $stmt->bind_param("ssi", $title, $text, $id);
            $execstmt = $stmt->execute(); 
            $stmt->close();
            header("Location:http://localhost/DB_sandbox/Button/Show_db.php");
            $conn->close();
            die();
        }
        
        if (isset($_POST['update'])){
            echo "Button worked";
        }
        
