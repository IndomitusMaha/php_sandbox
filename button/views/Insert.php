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
                    <a href="Select.php">Select <?php echo session_id() ;?></a> 
                </li>
                <li>
                    <a href="Delete.php">Delete <?php echo $_SESSION['logged_in_user_id']?></a> 
                </li>
                <li>
                    <a href="Update.php">Update</a>  
                </li>
                <li>
                    <a href="Insert.php">Insert</a> 
                </li>
            </ol>
        </form>
        <?php// require_once "Connection_for_Button_test.php";?>
        
        <form action="../controllers/Conntroller_Button.php" method="post">
            <h1>Insert data</h1>
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
            </div>
    </body>
</html>
