<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </head>
    <body style = "background-color: #f3f3f3;">
        <?php include "../controllers/Conntroller_Button.php";?>
        <div class="container"> 
        <ul> 
            <li>
                <a href="Select.php" class="btn btn-secondary">Select</a> 
            </li>
            <li>
                 <a href="Delete.php" class="btn btn-secondary">Delete</a> 
            </li>
            <li>
                <a href="Update.php" class="btn btn-secondary">Update</a> 
            </li>
            <li>
                <a href="Insert.php" class="btn btn-secondary">Insert</a>  
            </li>
        </ul>
            <form action="../controllers/Conntroller_Button.php" method="post">
            <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Content
            </h1>
            <div class="row justify-content-center">
                <table> 
                <thead>
                    <tr style="background:grey;">
                        <th>ID&nbsp&nbsp&nbsp&nbsp</th>
                        <th>Title &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Text  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="2">Bool  &nbsp&nbsp</th>
                        <th colspan="2">Radiobuttons  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Status  &nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="3">Action</th>
                        <th colspan="2">Checkboxes  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Textarea  &nbsp&nbsp&nbsp&nbsp</th>
                        
                    </tr>
                </thead>
                <?php
                    $mysql = mysqli_connect('localhost','root','','tryjoomla');
                    if(!$mysql){die('Connection error:'.mysql_error());}
                   
                    $sql_query = 'Select id, title, text, status, bool from `xm9wl_mycom` order by id'; //limit 0, 6 was deleted
                    $result = mysqli_query($mysql, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)):?>
                        <tr style = "border-bottom: 1px solid #dddddd; background-color: lightgrey; border-bottom: 2px solid #009879;  ">
                            <input type="hidden" class="form-control" name="id_for_row" value="<?php echo $row['id']?>" />
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['text']?></td>
                            <td><?php echo $row['bool']?></td>
                            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            <!--<td><select name="status" type="submit" class="btn btn-info">-->
                            <td>
                                <input type="radio" name="radio<?php echo $row['id']?>" value="1">
                                <label > Set bool to 1</label>
                            </td>
                            <td>
                                <input type="radio" name="radio<?php echo $row['id']?>" value="0">
                                <label > Set bool to 0</label>
                            </td>
                            <td><select name="status<?php echo $row['id']?>" type="submit" class="btn btn-info">
                               
                                    <?php 
                                    $sql_query_2 = 'Select distinct status from `xm9wl_mycom` order by id';
                                    $result_2 = mysqli_query($mysql, $sql_query_2);
                                    while ($row_2 = mysqli_fetch_assoc($result_2)):
                                    
                                    if ($row['status'] == $row_2['status']){
                                        echo '<option value="'.$row_2['status'].'" selected="selected" >'.$row_2['status'].'</option>';}
                                    else { 
                                        echo '<option value="'.$row_2['status'].'">'.$row_2['status'].'</option>';}
                                    
                                    endwhile;
                                    ?>
                                </select>
                            </td>
                            </td>
                            
                            <td>
                                <button name="change_status" type="submit" value="<?php echo $row['id']?>"  class="btn btn-info">Change status</button>
                            </td>
                            <td>
                                
                                <button name="update_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-success">Update</button>
                            </td>
                            <td>
                                <button name="delete_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-danger">Delete</button>
                            
                            </td>
                            <td>
                                <input type="checkbox" id="1" name="first_checkbox" checked>
                                <label for="first_checkbox">1st checkbox</label>
                            </td>
                            <td>
                                <input type="checkbox" id="2" name="second_checkbox" >
                                <label for="second_checkbox">2nd checkbox</label>
                            </td>
                            <td>
                                <textarea id="txtid" name="txtname" rows="2" cols="20" maxlength="50" style = "background-color: #f3f3f3;"> Placeholder
                                </textarea>
                            </td>
                        </tr>                           
                <?php endwhile;?>          
            </table>
            </div>
        </form>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progres_bar?>%">
                <span class="sr-only">70% Complete</span>
            </div>
        </div>        
    </body>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <?php for($counter=1;$counter<4;$counter++){ ?>
     
            <li class="page-item">
                <a class="page-link" href="Show_db.php?page=1"><?php if ($counter == 1){echo "1 <span class='sr-only'>(current)</span>";} else {echo $counter;}?></a></li>
            <!--<li class="page-item active">
                <a class="page-link" href="#">2<span class="sr-only">(current)</span></a></li>
            <li class="page-item">
                <a class="page-link" href="#">3</a></li>
            <li class="page-item"> -->
                <?php }?>
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    
</html>