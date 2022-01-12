<html>
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
            <h1>Delete data</h1>
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
            </table>
    </body>
</html>
