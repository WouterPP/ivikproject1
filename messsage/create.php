<!DOCTYPE html>
<!--

In dit formulier worden gegevens ingevuld en verstuurd naar insert.php

-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include "../bootstrap.php"; ?>
        
        <title></title>
    </head>
   
<body>
    <header>
           <?php include "../Templates/Header.php"; ?>      
         <h2>Write Your Message Here</h2>
    </header>
        <aside></aside>
       
        <div class="col-md-8"> 
        <form method="POST" action="insert.php">
            <div class="form-group">
              <label for="title">Title</label>
              <input name="title" type="text" class="form-control" id="title" placeholder="Title">
            </div>
           
            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" class="form-control" id="content" placeholder="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>    
    </body>

</html>





