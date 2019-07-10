<?php $this->setLayout('counselorviewlayout')?>



<?php $this->start('body'); ?>


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

<div class='card mb-3 divpadding' style=max-width: 20rem;>
      <div class='card-header'><h3>Records</h3></div>
      <div class='card-body'>
        <div id="recordDiv">
        <?php 
        $sql1 = "SELECT  Record FROM records WHERE StudentID = '".$StudentID."'"; 
        $result1 = $conn->query($sql1);
        echo "<ul>";
            if ($result1->num_rows > 0){
                while($row = $result1->fetch_assoc()) {
                    echo "<li>".$row['Record']."</br>";
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
      <div class='card-body'>
        <div id = "taskDiv">
        <?php 
        $sql2 = "SELECT  Task FROM Tasks WHERE StudentID = '".$StudentID."'"; 
        $result2 = $conn->query($sql2);
        echo "<ul>";
            if ($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()) {
                    echo "<li>".$row['Task']."</br>";
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
      <div class='card-body'>
        <div id="commentDiv">
        <?php 
        $sql2 = "SELECT  Comment FROM Comments WHERE StudentID = '".$StudentID."'"; 
        $result2 = $conn->query($sql2);
        echo "<ul>";
            if ($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()) {
                    echo "<li>".$row['Comment']."</br>";
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

<?php $this->end(); ?>