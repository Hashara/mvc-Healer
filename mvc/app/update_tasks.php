<?php


$id=$_POST["done_button"];


//connect to server
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   $connectionClass= new Connection();
   $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);


//fetch all data from table(all columns,all records)
  $sql = 'SELECT * FROM tasks';
   mysqli_select_db($conn,'project');
   $retval = mysqli_query( $conn,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

   //update
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      if($row['task_id']==$id){

       //insert data to Achievements
        $studentID=$row['studentID'];
        $task=$row['tasks'];
        $sql='INSERT INTO achievements (studentID,achievements) VALUES ("'.$studentID.'","'.$task.'")';
        $result=mysqli_query($conn,$sql);


        if(!$result){
          die('cant connect');
        }
        echo "successfully inserted";

      //delete record from tasks
        $sql = "DELETE FROM tasks WHERE task_id=$id";

        if ($conn->query($sql) === TRUE) {
           echo "Record deleted successfully";
        } else {
           echo "Error deleting record: " . $conn->error;
        }

        //redirect the page-->works



      }
   }

  header("Location: https://localhost/student%20profile/php/tasks.php");

mysqli_close($conn);
?>
