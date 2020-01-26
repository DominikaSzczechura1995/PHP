<head>
 </head> 
    <body>
     <?php
    
     ini_set( 'display_errors', 'On' );
     error_reporting( E_ALL );
     
     
     
     
         // The script will automatically free the result and close the MySQL
     // connection when it exits, but let's just do it anyways
     $result->free();
     $mysqli->close();
?>
     
    </body>
</html>
