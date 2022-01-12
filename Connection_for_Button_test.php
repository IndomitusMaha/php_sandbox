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
            die();
        }
        
        if (isset($_POST['delete'])){
            
            $id = $_POST['id_for_deletion'];
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            //echo $execstmt;
            //echo "Data deleted";
            header("Location:http://localhost/DB_sandbox/Show_db.php");
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
            header("Location:http://localhost/DB_sandbox/Show_db.php");
            $conn->close();
            die();
            
        }
        if (isset($_GET['delete_row'])){
            $id = $_GET['delete_row'];
            
            $sql_query = "DELETE FROM `xm9wl_mycom` WHERE id = $id";
            $result = mysqli_query($conn, $sql_query);
            //$conn ->query($sql_query);
            //echo $sql_query;
            header("Location:http://localhost/DB_sandbox/Show_db.php");
            $conn->close();
            die();
            
        }
        
        if (isset($_GET['update_row'])){
            /*$id = $_GET['update_row'];
            $query_title = "Select * `xm9wl_mycom` WHERE id = $id";
            $result_title = $mysqli->query($conn, $query_title) or die($mysqli->error());
            $row = $result_title->fetch_array();
            $update_row_title = row['title'];
            $update_row_text = row['text'];
            
                        
            $query_text = "Select text `xm9wl_mycom` WHERE id = $id";
            $result_text = mysqli_query($conn, $query_text);
            $update_row_text = mysqli_fetch_assoc($result_text);*/

            header("Location:http://localhost/DB_sandbox/Update_row.php");
            //$conn->close();
            //die();
            
        }
        
        if (isset($_POST['update_row_in_update_row'])){
            //include 'Update_row.php';
            require_once './Update_row.php';
            $title = $_POST['title_row'];
            //$id = $_GET['id_for_update'];
            $text = $_POST['text_row'];
            
            //$id = $_SESSION['id'];
            
            //$sql_query = "UPDATE `xm9wl_mycom` Set title = $title,  text = $text where id = $id_for_update ";
            //$result = mysqli_query($conn, $sql_query);
            //$conn ->query($sql_query);
            //echo $sql_query;
            echo $id_for_update;
            
            //header("Location:http://localhost/DB_sandbox/Show_db.php");
            //$conn->close();
            //die();
        }
        