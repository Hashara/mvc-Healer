<?php

class Connection{

function callConnection($servername,$username,$password){

  $conn = mysqli_connect($servername,$username,$password);

  if(! $conn ) {
    die('Could not connect: ' );

}

  return $conn;
}
}



/*try {
   $conn = new PDO("mysql:host=$servername;dbname=project", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }

   return $conn;
 }
}*/

?>