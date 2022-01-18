<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include "../controllers/Conntroller_Button.php"; ?>
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
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContent</h1>
            <div class="row justify-content-center">
                <table> 
                <thead>
                    <tr style="background:grey;">
                        <th>ID&nbsp&nbsp&nbsp&nbsp</th>
                        <th>Title &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Text  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Status  &nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="3">Action</th>
                        <th colspan="2">Radiobuttons  &nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="2">Checkboxes  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Textarea  &nbsp&nbsp&nbsp&nbsp</th>
                        
                    </tr>
                </thead>
                <?php
                    $mysql = mysqli_connect('localhost','root','','tryjoomla');
                    if(!$mysql){die('Connection error:'.mysql_error());}
                   
                    $sql_query = 'Select id, title, text, status from `xm9wl_mycom` order by id';
                    $result = mysqli_query($mysql, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)):?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['text']?></td>
                            <!--<td><select name="status" type="submit" class="btn btn-info">-->
                            <td><select name="status" type="submit" class="btn btn-info">
                               
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
                                <input type="radio" name="first_radio<?php echo $row['id']?>" value="<?php echo $row['id']?>">
                                <label > 1st radio for <?php echo $row['id']?></label>
                            </td>
                            <td>
                                <input type="radio" name="first_radio<?php echo $row['id']?>" value="<?php echo $row['id']?>">
                                <label > 2nd radio for <?php echo $row['id']?></label>
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
                                <textarea id="txtid" name="txtname" rows="2" cols="20" maxlength="50"> Placeholder
                                </textarea>
                            </td>
                        </tr>                           
                <?php endwhile;?>          
            </table>
            </div>
        </form>
        </div>        
    </body>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</html>