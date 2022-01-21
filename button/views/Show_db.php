<html>
    <head>
        <title>My button</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;}
            ul.breadcrumb li {
            display: inline;
            font-size: 18px;}
            ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";} 
            ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;}
            ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;}
            btn btn-secondary{ height:200px;
            width:200px;}
        </style>
    </head>
    <body style = "background-color: #f3f3f3;">
        <?php include "../controllers/Conntroller_Button.php";
        //FOR PAGINATION
        $results_per_page = 6;
        if (!isset($_GET['page'])) {
        $page = 1;
        } else {
        $page = $_GET['page'];
        }
        $this_page_first_result = ($page-1)*$results_per_page;
        //END OF SECTION FOR PAGINATION?>
        <div class="container"> 
        <ul> 
            <li>
                <a href="Select.php" class="btn btn-secondary" style="height:40px; width:100px;">Select &nbsp&nbsp              
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                    </svg>
                </a> 
            </li>
            <li>
                 <a href="Delete.php" class="btn btn-secondary" style="height:40px; width:100px;">Delete&nbsp&nbsp
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                        <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                 </a> 
            </li>
            <li>
                <a href="Update.php" class="btn btn-secondary" style="height:40px; width:100px;">Update
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-medical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a> 
            </li>
            <li>
                <a href="Insert.php" class="btn btn-secondary" style="height:40px; width:100px;">Insert&nbsp&nbsp&nbsp
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>  
            </li>
        </ul>
            <form action="../controllers/Conntroller_Button.php" method="post">
                <input type="hidden" name="Page" value="<?php echo $page;?>"></input>
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
                        <th colspan="2">Radiobuttons  &nbsp</th>
                        <th>Status  &nbsp&nbsp&nbsp&nbsp</th>
                        <th colspan="3">Action</th>
                        <th colspan="2">Checkboxes  &nbsp&nbsp&nbsp&nbsp</th>
                        <th>Textarea  &nbsp&nbsp&nbsp&nbsp</th>
                        
                    </tr>
                </thead>
                <?php
                    $mysql = mysqli_connect('localhost','root','','tryjoomla');
                    if(!$mysql){die('Connection error:'.mysql_error());}
                   
                    $sql_query = 'Select id, title, text, status, bool from `xm9wl_mycom` order by id limit'.' '.$this_page_first_result.', '.$results_per_page; //limit 0, 6 was deleted
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
                                
                                <button name="update_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-success">Update
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-medical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
                            </td>
                            <td>
                                <button name="delete_row" type="submit" value="<?php echo $row['id']?>"  class="btn btn-danger">Delete
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                                        <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
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
    <!--<ul class="breadcrumb">
        <li><a href="#">Show_db</a></li>
        <li><a href="#">Something else</a></li>
        <li><a href="#">Something else</a></li>
        <li>Current page</li>
    </ul>-->
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item <?php if ((int)$page == 1){echo "disabled";}?>">
                <a class="page-link" href="Show_db.php?page=<?php echo (int)$page-1;?>" tabindex="-1">Previous</a>
            </li>
            <?php 
            $sql_query_3 = 'Select count(id) from `xm9wl_mycom`';
            $result_3 = mysqli_query($mysql, $sql_query_3);
            $assoc_mas = mysqli_fetch_assoc($result_3);
            $number_of_results = $assoc_mas['count(id)'];
            $number_of_pages = ceil($number_of_results/$results_per_page)+1;
            
            for($counter=1;$counter<$number_of_pages;$counter++){ ?>
            
            <li class="page-item <?php if ($counter == (int)$page){echo "active";}?>">
                <a class="page-link" href="Show_db.php?page=<?php echo $counter;?>"><?php echo $counter;?></a></li>
            <!--<li class="page-item active">
                <a class="page-link" href="#">2<span class="sr-only">(current)</span></a></li>
            <li class="page-item">
                <a class="page-link" href="#">3</a></li>-->
            <?php }?>
            <li class="page-item <?php if ((int)$page == $number_of_pages-1){echo "disabled";}?>"> 
                <a class="page-link" href="Show_db.php?page=<?php echo (int)$page+1;?>"><?php if ((int)$page == $number_of_pages-1){echo "You shall not pass!";} else {echo 'Next';}?></a>
            </li>
        </ul>
    </nav>
    
</html>