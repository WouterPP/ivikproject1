<!DOCTYPE html>
<!--


hier wordt een lijst getoond met alle opgeslagen records
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
        </header>
        
     <?php
        
     session_start();
     
                     if (isset($_SESSION['messages'])){
                    foreach ($_SESSION['messages'] as $key => $message) {
                        

                        echo "<h3>" . substr($message["title"], 0, 20) . "</h3>";
                        echo "<p>" . substr($message["content"], 0, 10) . "...</p>" ;
                        echo "<a href=\"show.php?message=" . $key . "\">Naar het hele bericht</a>";
                        echo "</br>";

                    }
                }
                else {
                    echo "Er zijn nog geen berichten";
                    echo "</br>";
                }

        
        ?>
    </body>

</html>
