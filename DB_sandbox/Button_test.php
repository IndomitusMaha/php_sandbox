<!DOCTYPE html>

<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
 
    <body>
        <ol> 
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
        <?php// require_once "Connection_for_Button_test.php";?>
        
        <form action="Connection_for_Button_test.php" method="post">
            <h1>Buttons Test</h1>
            <p class="comments">Insert the data</p>
            <p class="comments">Insert the id</p>
            <div class="form-group">
                <label for="ID">ID</label>
                <input
                    type="text"
                    class="form-control"
                    id="id"
                    name="id"
                />
            </div>
            <p class="comments">Insert the title</p>
            <div class="form-group">
                <label for="Title">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                 />
            </div>
            <p class="comments">Insert the text</p>
            <div class="form-group">
                <label for="Text">Text</label>
                <input
                    type="text"
                    class="form-control"
                    id="text"
                    name="text"
                />
            </div>
            </div>
            <div class="form-group">
                <input type="submit" name="insert" value="INSERT" />
                <input type="submit" name="update" value="UPDATE" />
            </div>
            <div>
                <div class="form-group">
                <label for="id_for_deletion">ID</label>
                <input
                    type="text"
                    class="form-control"
                    id="id_for_deletion"
                    name="id_for_deletion"
                />
                <input type="submit" name="delete" value="DELETE" />
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
                                
                        $sql_query = 'Select id, title, text from `xm9wl_mycom`';
                        $result = mysqli_query($mysql, $sql_query);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["text"]."</td></tr>";
                        
                            }   
                        $mysql->close();
                    ?>
            </table>
        </form>
    </body>
</html>


