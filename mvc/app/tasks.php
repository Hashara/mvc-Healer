<html>
<head>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/_variables.scss">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/_bootswatch.scss">
  <link rel="stylesheet" href="../css/background.css">
</head>

<body class='bg'style='background-image: url("../img/task.jpg");'>

</body>
</html>


<?php



include("connection.php");


class Tasks{



  function displayTasks($dbhost,$dbuser,$dbpass,$ID){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);



//fetch all data from the table



   $sql = 'SELECT tasks,task_id FROM tasks WHERE studentID="'.$ID.'"';
   mysqli_select_db($connection,'project');
   $retval = mysqli_query( $connection,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

//display all data
  echo "<br>";
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "<div style='opacity:1' ><ul><li>{$row['tasks']}</li>

       <form action='update_tasks.php'  method='post'>
          <button type='submit' class='btn btn-primary btn-sm' formtarget='_self' formmethod='post' name='done_button'  value='{$row['task_id']}' />
          DONE
          </button>
        </form>

      <br></ul></div>";

   }

   mysqli_close($connection);

 }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$task_class = new Tasks();
$task_class->displayTasks($dbhost,$dbuser,$dbpass,$_GET['id']);


?>
