<head>
 </head> 
    <body>
     <?php
    
     ini_set( 'display_errors', 'On' );
     error_reporting( E_ALL );
     
   
     $mysqli = new mysqli('localhost', 'root', 'admin', 'apteka');
     
     if ($mysqli->connect_errno) {
         echo "Mamy problem z naszym systemem webowym.";
         echo "Error: NIe udalo się utworzyc polaczenia do serwera MySQL: \n";
         echo "Errno: " . $mysqli->connect_errno . "\n";
         echo "Error: " . $mysqli->connect_error . "\n";
         exit;
     }
     
     //$sql - tresc zapytania SQL 
 
     // $id - W zmiennej $id będzie przechowywany identyfikator uzytkownika, który chcemy odszukac w bazie danych
     $id = 1;
     
     $sql = "SELECT * FROM uzytkownicy WHERE id =$id ";
     
     //$sql = "SELECT * FROM uzytkownicy";
     
     
     if (!$result = $mysqli->query($sql)) {
         
         echo "Error: Zapytanie do bazy danych nie powiodlo sie: \n";
         echo "SQL: " . $sql . "\n";
         echo "Errno: " . $mysqli->errno . "\n";
         echo "Error: " . $mysqli->error . "\n";
         exit;
     }
     
     if ($result->num_rows === 0) {
         echo "Nie ma w bazie danych uzytkownika o ID $id.";
         exit;
     }
     
     // fetch_assoc() - funkcja zwraca tablice asocjacyjna o kluczach jak w bazie danych 
     
     $uzytkownik = $result->fetch_assoc();
     
     echo "Uzytkownik z bazy danych:  " . $uzytkownik['nazwisko'] . " " . $uzytkownik['imie']. "<br>";
     
     $uzytkownik = $result->fetch_assoc();
     
     echo "Uzytkownik z bazy danych:  " . $uzytkownik['nazwisko'] . " " . $uzytkownik['imie']. "<br>";
     
     
     // The script will automatically free the result and close the MySQL
     // connection when it exits, but let's just do it anyways
     $result->free();
     $mysqli->close();
?>
     
    </body>
</html>
	
	
	
