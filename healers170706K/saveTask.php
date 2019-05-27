<!DOCTYPE html>

<html>

<head> 
        
        <script src="js/GetdataButtonFunctions.js"></script>
</head>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Healersdb";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );

$studentID = $_POST['studentID'];
$task = $_POST["Task"];

$sql = "INSERT INTO `tasks` (`StudentID`, `Task`) VALUES ('$studentID', '$task')";
if($conn->query($sql)){
	$sql2 = "SELECT  Task FROM Tasks WHERE StudentID = '".$studentID."'"; 
       $result2 = $conn->query($sql2);
       echo "<ul>";
        if ($result2->num_rows > 0){
            while($row = $result2->fetch_assoc()) {
                echo "<li>".$row['Task']."</br>";
            }
        }
        echo "</ul>";
}
$conn->close();

?>
