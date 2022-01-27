<?php
session_start();
if(isset($_SESSION['last_search']))
{
    $_SESSION['start_of_time_away'] = time(); // ÝÒÀ ÏÅÐÅÌÅÍÍÀß ÍÓÆÍÀ ÄËß ÑÎÕÐÀÍÅÍÈß ÄÀÍÍÛÕ ÂÎ ÂÐÅÌß ÐÀÁÎÒÛ Â ÄÐÓÃÎÌ ÎÊÍÅ
    //unset ($_SESSION['status']);
    //unset ($_SESSION['last_search']); // ÝÒÎÒ ÊÓÑÎÊ ÑÁÐÀÑÛÂÀÅÒ ÐÅÇÓËÜÒÀÒ ÏÎÈÑÊÀ ÏÐÈ ÎÒÊÐÛÒÈÈ ÝÒÎÃÎ ÎÊÍÀ
}
?>
<html>
    <head>
        <title>My button</title>
    </head>
 
    <body>
        <form action="../controllers/Conntroller_Button.php" method="post">
            <ol>
                <li>
                    <button name="show_db_redirect" type="submit"   class="btn btn-success">Show the table</button>
                    <!--<a href="Show_db.php">Show the table</a>-->
                </li>
                <li>
                    <a href="Select.php" class="btn btn-success">Select</a> 
                </li>
                <li>
                    <a href="Delete.php" class="btn btn-success">Delete</a> 
                </li>
                <li>
                    <a href="Update.php" class="btn btn-success">Update</a> 
                </li>
                <li>
                    <a href="Insert.php" class="btn btn-success">Insert</a> 
                </li>
            </ol>
        </form>
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
