<?php



$id2=$_POST["done_button2"];
echo $id2;

//connect to server
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' );
   }

//fetch all data from table(all columns,all records)
  $sql = 'SELECT * FROM achievements';
   mysqli_select_db($conn,'project');
   $retval = mysqli_query( $conn,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

   //update
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      if($row['ach_id']==$id2){

       //insert data to tasks table
        $studentID=$row['studentID'];
        $achievement=$row['achievements'];
        $sql='INSERT INTO tasks (studentID,tasks) VALUES ("'.$studentID.'","'.$achievement.'")';
        $result=mysqli_query($conn,$sql);


        if(!$result){
          die('cant connect');
        }
        echo "successfully inserted";

      //delete record from tasks
        $sql = "DELETE FROM achievements WHERE ach_id=$id2";

        if ($conn->query($sql) === TRUE) {
           echo "Record deleted successfully";
        } else {
           echo "Error deleting record: " . $conn->error;
        }

        //redirect the page-->works



      }
   }

  header("Location: https://localhost/student%20profile/php/achievements.php");

mysqli_close($conn);
?>
