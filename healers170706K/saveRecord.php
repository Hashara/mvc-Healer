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
$record = $_POST["Record"];

$sql = "INSERT INTO `records`(`StudentID`, `Record`) VALUES ('$studentID','$record')";
if($conn->query($sql)){
	$sql1 = "SELECT  Record FROM records WHERE StudentID = '".$studentID."'"; 
       $result1 = $conn->query($sql1);
       echo "<ul>";
        if ($result1->num_rows > 0){
            while($row = $result1->fetch_assoc()) {
                echo "<li>".$row['Record']."</br>";
            }
        }
        echo "</ul>";
}
$conn->close();

?>