<!DOCTYPE html> 

<html>
    <head>
    </head>
    
    <body>
    <?php
        
    //establish connection info
    $server = "localhost";// your server
    $userid = "upmro5wv5djmy"; // your user id
    $pw = "eb4a8d8urcyj"; // your pw
    $db= "dbdhodggsm9tll"; // your database
		
    // Create connection
    $conn = new mysqli($server, $userid, $pw);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

    //select the database
    $conn->select_db($db);

    //run a query --> check with Clea name of user variables 
    $sql = "SELECT * FROM users";
       
    //get results
    if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
    	    echo $row["f_name"]. " " . $row["l_name"]. "<br>";
         }
     } else {
         echo "no results";
    }


    //close the connection	
    $conn->close();

	?>
        
    </body>
</html>
