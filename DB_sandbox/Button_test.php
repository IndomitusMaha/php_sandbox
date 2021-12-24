<!DOCTYPE html>

<html>
  <head>
    <title>My button</title>
    <!--<style>
      textarea {
      width: calc(100% - 200px);
      outline: none;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      } 
      Button{
      background: #0666a3;
      height: 50px;
      width: 200px;
      font-size:25px;
      }
      Button:hover{
      background:#880808; 
      
      }
     
    </style>-->
  </head>
  
<body>
    
        <div class="panel-heading text-center">
            <h1>Button Test</h1>
        </div>
        <p class="comments">Insert the data</p>
        
        <div class="panel-body">
            <form action="Connection_for_Button_test.php" method="post">
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
                <p class="comments">Insert the alias</p>
                <div class="form-group">
                    <label for="Alias">Alias</label>
                    <input
                    type="text"
                    class="form-control"
                    id="alias"
                    name="alias"
                />
                </div>
                <div>
                    <input type="submit" class="button" name="insert" value="INSERT" />
                </div>
                
            </form>
        </div>
        <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Alias</th>
                    </tr>
                    <?php
                        $mysql = mysqli_connect('localhost','root','','tryjoomla');
                        if(!$mysql){die('Connection error:'.mysql_error());}
                        if($mysql){echo "It's connected";}
        
                        $sql_query = 'Select id, title, text from `xm9wl_mycom`';
                        $result = mysqli_query($mysql, $sql_query);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["id"]."<tr><td>".$row["title"]."<tr><td>".$row["text"]."<tr><td>";
                        
                            }   
                        $mysql->close();
                        
                    ?>
        </table>
                    
<?php
echo "Do you see me?"
?>
        
</body>
</html>


