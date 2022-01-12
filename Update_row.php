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
        <?php// include "Connection_for_Button_test.php";?>
        
        <form action="Connection_for_Button_test.php" method="POST">
            <?php
            $id_for_update = (string)$_GET['update_row'];
            ?>
            <h1>Update data</h1>
            </div>
            <div class="form-group">
                <label for="Your id">Id of your row is <?php echo $id_for_update;?></label>
                <input
                    type="hidden"
                    class="form-control"
                    id="your_id"
                    name="your_id"
                    placeholder="<?php echo $id_for_update;?>"
                 />
            </div>
            <p class="comments">Insert the title</p>
            <div class="form-group">
                <label for="Title">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="title_row"
                    name="title_row"
                    placeholder ="<?php echo $update_row_title?>"
                 />
            </div>
            <p class="comments">Insert the text</p>
            <div class="form-group">
                <label for="Text">Text</label>
                <input
                    type="text"
                    class="form-control"
                    id="text_row"
                    name="text_row"
                    placeholder="<?php echo $update_row_text?>"
                />
            </div>
            </div>
            <div class="form-group">
                <input type="submit" name="update_row_in_update_row" value="UPDATE" />
            </div>
    </body>
</html>
