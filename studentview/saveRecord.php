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
$dbname = "ruah";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );
$studentID = $_POST['StudentID'];
$record = $_POST["Record"];


$sql = "INSERT INTO `records`(`studentId`, `records`) VALUES ('$studentID','$record')";
if($conn->query($sql)){
	$sql1 = "SELECT  records FROM records WHERE studentId = '".$studentID."'"; 
       $result1 = $conn->query($sql1);
       echo "<ul>";
        if ($result1->num_rows > 0){
            while($row = $result1->fetch_assoc()) {
                
                echo "<li>".$row['records']."</br>";
            }
        }
        echo "</ul>";
}
$conn->close();

?>