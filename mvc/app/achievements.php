<html>
<head>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/_variables.scss">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/_bootswatch.scss">
    <link rel="stylesheet" href="../css/background.css">
</head>
<body class='bg'style='background-image: url("../img/ach.jpg");'>

</body>
</html>



<?php

include("connection.php");

class Achievements{

  function displayData($dbhost,$dbuser,$dbpass,$ID){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);

//fetch all data from the table
    $sql = 'SELECT achievements,ach_id FROM achievements WHERE studentID="'.$ID.'"';
    mysqli_select_db($connection,'project');
    $retval = mysqli_query( $connection,$sql );

    if(! $retval ) {
       die('Could not get data: ' );


    }
//display all data
  echo "<br>";
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

          echo "<div><ul><li>{$row['achievements']}</li>


                  <form action='update_ach.php'  method='post'>
                    <button type='submit' class='btn btn-primary btn-sm' formtarget='_self' formmethod='post' name='done_button2'  value='{$row['ach_id']}' />
                    REDO
                    </button>
                  </form>
                  </ul></div>
                   <br> ";




       }

       mysqli_close($connection);



  }



}


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$ach_class = new Achievements();
$ach_class->displayData($dbhost,$dbuser,$dbpass,$_GET['id']);

?>
