<?php
        $conn = new mysqli('localhost','root','','tryjoomla');
	if(!$conn){die('Connection error:'.mysql_error());}
        $mysql = mysqli_connect('localhost','root','','tryjoomla');
        if(!$mysql){die('Connection error:'.mysql_error());}
        
        $progres_bar = 50;
        
        if (isset($_POST['insert'])){
            require_once './insert.php';
        }
        
        if (isset($_POST['delete'])){
            require_once './delete.php';
        }
        
        if (isset($_POST['update'])){
            require_once './update.php';
        }
        
        if (isset($_POST['delete_row'])){
            require_once './delete_row.php';
        }
        
        if (isset($_POST['update_row'])){
            require_once './update_row.php';
        }
        
        if (isset($_POST['change_status'])){
            require_once './change_status.php';
        }
        
        if (isset($_POST['find'])){
            require_once './find.php';
        }
        
        if (isset($_POST['find_thrue_session'])){
            require_once './find_thrue_session.php';
        }
        
        if (isset($_POST['show_db_redirect'])){
            require_once './show_db_redirect.php';
        }
        
        
        //          ***GET***
        if (isset($_GET['change_status'])){
            require_once './change_status_get.php';
        }
        
        /*
        if (isset($_GET['delete_row'])){
            require_once './delete_row.php';
        }
        
        if (isset($_GET['update_row'])){
            require_once './update_row.php';
        }*/