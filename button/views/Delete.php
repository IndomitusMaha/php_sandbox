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
        </form>
    </body>
</html>
