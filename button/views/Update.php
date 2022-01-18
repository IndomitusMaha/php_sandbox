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
        <?php //include "Conntroller_Button.php";?>
        
        <form action="../controllers/update.php" method="post">
            <h1>Update data</h1>
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
                <p class="comments">    </p>
                <input type="submit" name="update" value="UPDATE" />
            </div>
    </body>
</html>
