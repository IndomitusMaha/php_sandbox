<html>
    <?php require_once "Connection_for_Button_test.php";?>
    <head>
        <title>My button</title>
    </head>
 
    <body>
        <ol>
            <li>
                <a href="Show_db.php">Show the table</a> 
            </li>
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
        </ol>
        <form action="Connection_for_Button_test.php" method="post">
            <h1>Select data</h1>
            <div>
                <div class="form-group">
                <label for="Select">Enter your SELECT query</label>
                <input
                    type="text"
                    class="form-control"
                    id="select"
                    name="select"
                />
                <label for="Select2">FROM `xm9wl_mycom`</label>
                <input
                    type="text"
                    class="form-control"
                    id="select2"
                    name="select2"
                />
                <input type="submit" name="select" value="SELECT" />
                </div>
                
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Text</th>
                </tr>
                    <?php
                        $mysql = mysqli_connect('localhost','root','','tryjoomla');
                        if(!$mysql){die('Connection error:'.mysql_error());}
            
                        $sql_query = 'Select $select From `xm9wl_mycom` $select2';
                        echo $sql_query;
                        /*$result = mysqli_query($mysql, $sql_query);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["text"]."</td></tr>";
                            
                        
                            }   
                        $mysql->close();
                        echo "Was'up motherfucker";*/
                        
                    ?>
            </table>
    </body>
</html>