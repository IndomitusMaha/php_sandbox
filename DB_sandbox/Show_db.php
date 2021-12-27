<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
 
    <body>
        <ul> 
            <li>
                <a href="Select.php">Select</a> 
            </li>
            <li>
                 <a href="Delete.php">Delete</a> 
            </li>
            <li>
                <a href="Update.php">Update</a> 
            </li>
            <li>
                <a href="Insert.php">Insert</a>  
            </li>
        </ul>
        <form action="Connection_for_Button_test.php" method="post">
            <h1>Content</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Text</th>
                </tr>
                    <?php
                        $mysql = mysqli_connect('localhost','root','','tryjoomla');
                        if(!$mysql){die('Connection error:'.mysql_error());}
                                
                        $sql_query = 'Select id, title, text from `xm9wl_mycom`';
                        $result = mysqli_query($mysql, $sql_query);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["text"]."</td></tr>";
                        
                        }   
                        $mysql->close();
                    ?>
            </table>
    </body>
</html>