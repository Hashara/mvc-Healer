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
$comment = $_POST["comment"];

$sql = "INSERT INTO `comments`(`StudentID`, `Comment`) VALUES ('$studentID','$comment')";

if($conn->query($sql)){
    
	$sql2 = "SELECT  Comment FROM Comments WHERE StudentID = '".$studentID."'"; 
       $result2 = $conn->query($sql2);
       echo "<ul>";
        if ($result2->num_rows > 0){
            while($row = $result2->fetch_assoc()) {
                echo "<li>".$row['Comment']."</br>";
            }
        }
        echo "</ul>";
}
$conn->close();

?>