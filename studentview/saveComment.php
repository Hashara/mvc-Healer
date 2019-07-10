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
$comment = $_POST["comment"];

$sql = "INSERT INTO `comments`(`studentID`, `comments`) VALUES ('$studentID','$comment')";

if($conn->query($sql)){
    
	$sql2 = "SELECT  comments FROM comments WHERE studentId = '".$studentID."'"; 
       $result2 = $conn->query($sql2);
       echo "<ul>";
        if ($result2->num_rows > 0){
            while($row = $result2->fetch_assoc()) {
                
                echo "<li>".$row['comments']."</br>";
            }
        }
        echo "</ul>";
}
$conn->close();

?>