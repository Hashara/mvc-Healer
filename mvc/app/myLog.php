
<html>
<head>
  <link rel="stylesheet" href="../css/f2.css">
</head>
<body class="bg">
</body>
</html>
<?php
include("connection.php");

class MyLog{

  function displayLog($dbhost,$dbuser,$dbpass){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);


//fetch data from table
$sql = 'SELECT * FROM student_data WHERE studentID="170007T"';
mysqli_select_db($connection,'project');
$retval = mysqli_query( $connection,$sql );

if(! $retval ) {
   die('Could not get data: ' );
}

//display data
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
   echo
      "<ul><br> <li>NAME : {$row['Name']} <br><br> </li>".
      "<li>AGE : {$row['Age']} <br><br></li> ".
      "<li>FACULTY : {$row['Faculty']} <br><br></li>".
      "<li>DEPARTMENT : {$row['Department']} <br><br></li>".
      "<li>YEAR : {$row['Year']} <br><br></li>".
      "<li>EMAIL : {$row['email']} <br><br></li></ul>";


}



mysqli_close($connection);

}
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$log_class = new MyLog();
$log_class->displayLog($dbhost,$dbuser,$dbpass);
?>
