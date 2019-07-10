<!DOCTYPE html>

<html>

<head> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
        <link rel="stylesheet" href="stylesheet\_variables.SCSS">
        <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
        <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
        <link rel="stylesheet" href="stylesheet\style.CSS">
        <script src="js/GetdataButtonFunctions.js"></script>
        <script src="js/cookie.js"></script>
        <script src="js/jquery.js"></script>
        <?php
        $StudentID = $_GET['StudentID'];
        $counselorId=$_GET['counselorid'];
        ?>
        <script>
     
    $( document ).ready(function(){
      var id = <?php echo json_encode($StudentID);?>;
      $('#TaskSubmit').on('click', function () {
          $.ajax({
      type: 'POST',
      // make sure you respect the same origin policy with this url:
      // http://en.wikipedia.org/wiki/Same_origin_policy
      url: 'saveTask.php',
      data: { 
          'StudentID': id , 
          'Task':  $(' #taskTextArea' ).val() 
      },
      success: function(response){
          $( '#taskDiv').html(response);
          $( '#centerTask' ).hide();
          $('#showTask').show();
          $('#Task').hide();
      }
  });
      }
      )
  
  
  
      $('#recordSubmit').on('click', function () {
          $.ajax({
      type: 'POST',
      // make sure you respect the same origin policy with this url:
      // http://en.wikipedia.org/wiki/Same_origin_policy
      url: 'saveRecord.php',
      data: { 
            'StudentID': id , 
          'Record':  $(' #recordTextArea' ).val() 
      },
      success: function(response){
          
          $( '#recordDiv').html(response);
          $( '#centerRecord' ).hide();
          $('#showRecord').show();
          $('#Record').hide();
      }
  });
      }
      )
  
  
      
      $('#commentSubmit').on('click', function () {
          $.ajax({
      type: 'POST',
      // make sure you respect the same origin policy with this url:
      // http://en.wikipedia.org/wiki/Same_origin_policy
      url: 'saveComment.php',
      data: { 
            'StudentID': id , 
          'comment':  $(' #commentTextArea' ).val() 
      },
      success: function(response){
          
          $( '#commentDiv').html(response);
          $( '#centerComment' ).hide();
          $('#showComment').show();
          $('#Comment').hide();
      }
  });
      }
      )
  
  
  
  
  
  
  
  
  //Record Button
      $('#showRecord').on('click', function () {
        $('#Record').show();
      $('#centerRecord').show();
      $(this).hide();
  })
  
  $('#closeRecord').on('click', function () {
    $('#Record').hide();
      $('#centerRecord').hide();
      $('#showRecord').show();
  })
  });
  
  
  
  
  
  
  
  //task button
  $( document ).ready(function(){
      $('#showTask').on('click', function () {
        $('#Task').show();
      $('#centerTask').show();
      
      $(this).hide();
  })
  
  $('#closeTask').on('click', function () {
    $('#Task').hide();
      $('#centerTask').hide();
      $('#showTask').show();
  })
  });
  
  
  
  
  
  //comment button
  $( document ).ready(function(){
      $('#showComment').on('click', function () {
        $('#Comment').show();
      $('#centerComment').show();
      $(this).hide();
  })
  
  $('#closeComment').on('click', function () {
    $('#Comment').hide();
      $('#centerComment').hide();
      $('#showComment').show();
  })
  });
  
    </script>
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
  <a href="../app/message/counsendmessge/<?php echo $counselorId?>/<?php echo $StudentID ?>"> 
  <button>Message</button>
  </a>
</div>
</nav>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruah";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );


$StudentID = $_GET['StudentID'];


$sql = "SELECT  * FROM students WHERE studentId = '".$StudentID."'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<div class = 'title'><h1>".$row['studentName']."</h1></br>";
        
        
    }
}
echo "</ul>"
?>



<body>

<!-- Record button -->
<div class='card mb-3 divpadding' style=max-width: 20rem;>
      <div class='card-header'><h3>Records</h3></div>
      <div class='card-body' id ="RecordBody">
        <div id="recordDiv">
        <?php 
        $sql1 = "SELECT  records FROM records WHERE studentId = '".$StudentID."'"; 
        $result1 = $conn->query($sql1);
        echo "<ul>";
            if ($result1->num_rows > 0){
                while($row = $result1->fetch_assoc()) {
                    echo "<li>".$row['records']."</br>";
                }
            }
            echo "</ul>";
        ?>
        
        </div></div>
    <!-- Record form starts-->
    <div class = "modal" id = "Record">
    <div class="center hideform FixedPosition" id = "centerRecord">
<button id="closeRecord" style="float: right;">X</button>

    Add Record<br>
    <input type="text" class = "GetText" id = "recordTextArea" width="100%">
    
    <br>
    <button id = "recordSubmit" class="btn btn-primary">Submit</button>

</div>
        </div>
        <button id="showRecord" class="btn btn-primary">Add Record</button>
        </div>







<!-- Task button -->
<div class='card mb-3 divpadding' style=max-width: 20rem;>
      <div class='card-header'><h3>Tasks</h3></div>
      <div class='card-body' id ="TaskBody" >
        <div id = "taskDiv">
        <?php 
        $sql2 = "SELECT  tasks FROM tasks WHERE studentId = '".$StudentID."'"; 
        $result2 = $conn->query($sql2);
        echo "<ul>";
            if ($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()) {
                    echo "<li>".$row['tasks']."</br>";
                }
            }
            echo "</ul>";
        ?>
        
        </div></div>
        <div class = "modal" id = "Task">
<div class="center hideform FixedPosition" id = "centerTask">
<button id="closeTask" style="float: right;">X</button>
Add Task<br>
<input type="text" class = "GetText" id = "taskTextArea" width="100%">
    <br>
<button id = "TaskSubmit" class="btn btn-primary">Submit</button>

</div></div>
<button id="showTask" class="btn btn-primary">Add Task</button>
</div>



<!-- comment button -->
<div class='card mb-3 divpadding' style=max-width: 20rem;>
      <div class='card-header'><h3>Comments</h3></div>
      <div class='card-body' id ="CommentBody">
        <div id="commentDiv">
        <?php 
        $sql2 = "SELECT  comments FROM comments WHERE studentId = '".$StudentID."'"; 
        $result2 = $conn->query($sql2);
        echo "<ul>";
            if ($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()) {
                    echo "<li>".$row['comments']."</br>";
                }
            }
            echo "</ul>";
        ?>
        
        </div></div>
        <div class = "modal" id ="Comment">
<div class="center hideform FixedPosition" id = "centerComment">
<button id="closeComment" style="float: right;">X</button>

Add Comment<br>
<input type="text" class = "GetText" id = "commentTextArea" width="100%">

    <br>
    <button id = "commentSubmit" class="btn btn-primary">Submit</button>
</div></div>
<button id="showComment" class="btn btn-primary">Add Comment</button>
</div>

</body>

</html>