<?php $this->setSiteTitle('edit');?>
 <?php $this->setLayout('loginhomelayout')?>
<?php $this->start('body'); ?>
<ul class="slideshow">
  <li><span>Image 01</span></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="<?=PROOT?>icons/logo.jpg" alt="" width="auto" height="30px " >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?=PROOT?>counselorregister/showProfile/<?=$this->counselor->counsellorid?>">Home <span class="sr-only">(current)</span></a>
            </li>
            </ul>

        </div>
    </nav>

    <p><br></p>

    <?php
      $id = $this->counselor->counsellorid;
      $image = $this->counselor->image;
      $name = $this->counselor->name;
      $email = $this->counselor->email;
      $faculty = $this->counselor->faculty;
      $department = $this->counselor->department;
      echo "<center>";
      echo '<div class="container">';
      echo "<div class='card'>";

      echo "<legend ><b>My Profile</b></legend>";
      echo "<center>";
              echo "<img src='";
              echo $image;
              echo "' width='175' height='200'><br>";
              echo "</center>";
              echo "<br>";
              echo "<ul><li>Name:     ";
              echo $name;
              echo "</br>";
              echo "<li>Faculty:   ";
              echo $faculty;
              echo "</br>";
              echo "<li>Department:   ";
              echo $department;
              echo "</br>";
              echo "<li>Email:   ";
              echo $email;
              echo "</br>";
              echo "</ul></div></div></center>";

      ?>
    
  
    

    
   