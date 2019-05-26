<html>
<head>
    <link rel="stylesheet" href="../css/background.css">
</head>
<body class='bg'style='background-image: url("../img/com.jpg");'>

</body>
</html>

<?php

include("connection.php");

class Comments{

  function displayComments($dbhost,$dbuser,$dbpass,$ID){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);


//fetch all data from table(all columns,all records)
   $sql = 'SELECT comments FROM comments WHERE studentID="'.$ID.'"';
   mysqli_select_db($connection,'project');
   $retval = mysqli_query( $connection,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

//display all data
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "<div><ul><li>{$row['comments']}</font></li></ul></div> ";
   }



   mysqli_close($connection);
 }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$com_class = new Comments();
$com_class->displayComments($dbhost,$dbuser,$dbpass,$_GET['id']);

?>
