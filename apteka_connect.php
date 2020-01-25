<head>
 </head> 
    <body>
     <?php
    
     ini_set( 'display_errors', 'On' );
     error_reporting( E_ALL );
     
     
     $con = mysqli_connect('localhost', 'root', 'admin', 'apteka');
     
        if ($con) {
            echo 'Connected successfully';
        } else 
        {
            echo 'Not connected.';
            echo('Could not connect: ' . mysqli_error(0));
        }
        
        if ($con) mysqli_close($con);

        ew
        
?>
     
    </body>
</html>
	
