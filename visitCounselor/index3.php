<!DOCTIPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
    <link rel="stylesheet" href="stylesheet\_variables.SCSS">
    <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
    <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
    <link rel="stylesheet" href="stylesheet\style.CSS">
<style>
        
        img {
            margin-top:7vh;
            border-style: double;
        }
    
    </style>
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
$dbname = "ruah";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );

$CounselorID = $_GET['CounselorID'];
$visitorID = $_GET['visitorID'];

$sql = "UPDATE visitors SET counselor='$CounselorID' WHERE id='$visitorID'";

if ($conn->query($sql) === TRUE) {
    // output data of each row
    header('Location: ../../../app/visitor/visitorinfo/'.$visitorID);
    //header('Location: ../../../app/index.php?id='.$visitor->id);

}
// ?>
</body>
</html>