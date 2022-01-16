<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Connection_for_Button_test.php'; ?>
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
            <form action="Connection_for_Button_test.php" method="post">
            <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContent</h1>
            <div class="row justify-content-center">
                <table> 
                <thead>
                    <tr>
                        <th>ID&nbsp</th>
                        <th>Title &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Text  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Status1  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Status2  &nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="2">Action</th>
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
                            <td><select name="status1" type="submit" class="btn btn-info">
                                <?php 
                                if ($row['status'] == 'loaded') { echo'<option value="loaded"> Loaded </option>'
                                .'<option value="completed"> Completed </option>'
                                .'<option value=" another"> Another </option>';}
                                ?>
                                <?php 
                                if ($row['status'] == 'completed') { echo'<option value="completed"> Completed </option>'
                                .'<option value="loaded"> Loaded </option>'
                                .'<option value=" another"> Another </option>';}
                                ?>
                                    
                                </select>
                            </td>
                            <td><select name="status2" type="submit" class="btn btn-info">
                                    
                                <?php 
                                if ($row['status'] == 'loaded') { $first = 'Loaded'; $second = 'Completed'; $third = 'Another';}
                                elseif ($row['status'] == 'completed') { $first = 'Completed'; $second = 'Loaded'; $third = 'Another';}
                                else { $first = 'Another'; $second = 'Loaded'; $third = 'Completed';}?>
                                
                                <option value="<?php echo $first?>"> <?php echo $first?> </option>
                                <option value="<?php echo $second ?>"> <?php echo $second ?></option>
                                <option value=" <?php echo $third ?>"> <?php echo $third ?></option>
                                
                                </select>
                            </td>
                            <td>
                                <button name="change_status" type="submit" value="<?php echo $row['id']?>"  class="btn btn-info">Change status</button>
                            </td>
                            <td>
                                
                                <button name="update_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-success">Update</button>
                                <button name="delete_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-danger">Delete</button>
                            
                            </td>
                            
                        </tr>                           
                <?php endwhile;?>          
            </table>
            </div>
        </form>
        </div>        
    </body>
</html>