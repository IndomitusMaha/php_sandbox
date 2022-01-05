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
        <?php include 'Connection_for_Button_test.php';?>
        
        <form action="Connection_for_Button_test.php" method="POST">
            
            <h1>Update data</h1>
            </div>
            <?php   /*$mysql = mysqli_connect('localhost','root','','tryjoomla');
                    if(!$mysql){die('Connection error:'.mysql_error());}
                   
                    $title_query = "Select title, text from `xm9wl_mycom` where id = $id_for_update";
                    $title_query_result = mysqli_query($mysql, $title_query);
                    $row_title = mysqli_fetch_assoc($title_query_result);
                    $title = $row_title['title'];
                    $text = $row_title['text'];
             */
            ?>
            
            <div class="form-group">
                <label for="Your id">Id of your row is <?php //echo $id_for_update;?></label>
                <label for="Your id">Id of your row is <?php echo $GLOBALS['id'];?></label>
                <input
                    type="hidden"
                    class="form-control"
                    name="id_for_update"
                    value="<?php $GLOBALS['id']//echo $id_for_update?>"
                 />
            </div>
            <p class="comments">Insert the title</p>
            <div class="form-group">
                <label for="title_row">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="title_row"
                    name="title_row"
                    placeholder ="<?php echo $title; ?>"
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
                    placeholder="<?php echo $text?>"
                />
            </div>
            </div>
            <div class="form-group">
                <input type="submit" name="update_row_in_update_row" value="UPDATE" />
            </div>
    </body>
</html>
