<?php $this->setLayout('counsellorlayout')?>



<?php $this->start('body'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img src="<?=PROOT?>icons/logo.jpg" alt="" width="auto" height="30px " >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="<?=PROOT?>index.php">Home <span class="sr-only">(current)</span></a>
  </li>
      </ul>
      <!--<button id = "EditProfileButton"class="btn btn-primary" >Edit Profile</button>-->
      <a class="btn btn-primary" style="margin-left: 10px;" href = '<?=PROOT?>visitor/visitorCounselor/<?php echo $this->counselor->counsellorid; ?>'><font color = 'white'>Visitor List</font></a>
      
      <?php $id = $this->counselor->counsellorid;?>
      <a class="btn btn-primary" style="margin-left: 10px;" href = '<?php echo "../edit/".$id;?>'><font color = 'white'>Edit</font></a>
      <a class="btn btn-primary" style="margin-left: 10px;" href = '<?php echo "../view/".$id;?>'><font color = 'white'>View</font></a>
      <a class="btn btn-primary" style="margin-left: 10px;" href = '<?php echo "../../counselorregister/login/"?>'><font color = 'white'>Log Out</font></a>
      
    
      
    </div>
  </nav>

<?php 
 echo "<h2 class = 'title'>My Students</h2>";
foreach($this->studentlist as $t){
 
        // output data of each row
      
          
          echo "<div class='card mb-3 divpadding' id = 'studentProfile' style=max-width: 20rem;>
          <div class='card-header'><h3><a href ='";
          echo PROOT;
          echo "counselorregister/viewStudent/";
          echo $this->counselor->counsellorid;
          
          echo "/";
          echo $t->studentId;
          echo "'";
          echo $t->studentId;
          echo ">";
          echo $t->studentName;
          echo "</a></h3></div>
          <div class='card-body'>";//href?link
              echo "<img src='";
              echo $t->image;
              echo "' width='175' height='200'><br>";
              echo "<br>";
              echo "<ul><li>Faculty:   ";
              echo $t->faculty;
              echo "</br>";
              echo "<li>Department:   ";
              echo $t->department;
              echo "</br>";
              echo "<li>Birthday:   ";
              echo $t->birthday;
              echo "</br>";
              echo "<li>Email:   ";
              echo $t->email;
              echo "</br>";
              echo "<li>Year:   ";
              echo $t->batch;
              echo "</br>";
          
            
          echo "</ul></div>
        </div>";
}?>
<?php $this->end(); ?>