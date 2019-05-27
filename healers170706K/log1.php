<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Healersdb";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );

if(isset($_POST['UserID'])){
    $UID = $_POST['UserID'];
    $password = $_POST['password'];
        $sql = "SELECT `Name` FROM `Counsellors` WHERE `CounsellorID` = '$UID' and `Password` = '$password' limit 1";
        $result = $conn->query($sql);

    if ($result->num_rows>0) {
      while($row = $result->fetch_assoc()) {
        $name = $row['Name'];
    }
    // output data of each row
        
 
    }
} else {
    echo "0 results";
    exit();
}
?>


<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
    <link rel="stylesheet" href="stylesheet\_variables.SCSS">
    <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
    <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
    <link rel="stylesheet" href="stylesheet\style.CSS">
    <script src="js\ButtonMethodsProfile.js"></script>
</head>
<!--navigation bar starts-->
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
      <!--<button id = "EditProfileButton"class="btn btn-primary" >Edit Profile</button>-->
      <input type = button class="btn btn-primary" onClick = "parent.location = 'editProfile.php?ID=<?php echo $UID ?>'" value = 'Edit My Profile'>
      <input type = button class="btn btn-primary" onClick = "parent.location = 'viewProfile.php?ID=<?php echo $UID ?>'" value = 'View My Profile'>
      <button id = "LogOutButton"class="btn btn-primary" >LogOUT</button>
    
      
    </div>
  </nav>
  <!--navigation bar ends-->
  <body>
    

    
    <?php
    if(isset($_POST['UserID'])){
    $UID = $_POST['UserID'];

    
    $sql1 = "SELECT * FROM `Students` WHERE ChosenCounselor='$UID'";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      echo "<h2 class = 'title'>My Students</h2>";
        // output data of each row
        while($row = $result1->fetch_assoc()) {
          
          echo "<div class='card mb-3 divpadding' id = 'studentProfile' style=max-width: 20rem;>
          <div class='card-header'><h3><a href = Student.php?StudentID=".$row['StudentID'].">".$row['Name']."</a></h3></div>
          <div class='card-body'>";
              echo "<img src='".$row['Image']."' width='175' height='200'><br>";
              echo "<br>";
              echo "<ul><li>Faculty:   ".$row["Faculty"]."</br>";
              echo "<li>Department:   ".$row["Department"]."</br>";
              echo "<li>Age:   ".$row["Age"]."</br>";
              echo "<li>Email:   ".$row["Email_Address"]."</br>";
              echo "<li>Year:   ".$row["StudyYear"]."</br>";
          
            
          echo "</ul></div>
        </div>";
        }
        
        
        
    } else {
        echo "0 results";
    
}
}
    
    $conn->close();
    ?>
</body>
</html>