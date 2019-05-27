<!DOCTIPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
    <link rel="stylesheet" href="stylesheet\_variables.SCSS">
    <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
    <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
    <link rel="stylesheet" href="stylesheet\style.CSS">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Healers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
    </ul>
    
  </div>
</nav>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Healersdb";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );

$ID = $_GET['ID'];



$sql = "SELECT Department, Image, Faculty,Name, Email_Address, ContactNumber FROM Counsellors WHERE CounsellorID = '".$ID."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='centerDiv' id = 'profile';>
        <div class='card-header'><h2>".$row["Name"]."</h2><br></div>
        <div class='card-body'>
        <img src='".$row['Image']."' width='175' height='200' /></br></br>
        <ul><li>Faculty:   ".$row["Faculty"]."</br>
        <li>Department:   ".$row["Department"]."</br>
        <li>Email Address:   ".$row["Email_Address"]."</br>
        <li>Phone Number:   ".$row["ContactNumber"]."</br></ul>
        
        </div>
      </div>";
        ?>
        
        </div>
        
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>