<?php $this->setLayout('myloglayout')?>


<body class='bg'>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=
        <?php
        echo PROOT;
        echo "studentregister/showProfile/";
        foreach($this->mylog as $t)
   {
         echo $t->studentId;
   }?>
        >Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
</div>
</nav>
<?php $this->start('body'); ?>

<?php

//  dnd();

  echo "<br>";

   foreach($this->mylog as $t)
   {

      //dnd ($this->mylog);
      //echo $t->studentId;
        echo "<div><ul><br><li>NAME :";
        echo $t->studentName;
        echo "<br><br></li>";
        echo "<li>BIRTHDAY: ";
       echo $t->birthday;
       echo "<br><br></li>";
       echo "<li>FACULTY :";
       echo $t->faculty;
       echo "<br><br></li>";
       echo "<li>DEPARTMENT : ";
       echo $t->department;
       echo "<br><br></li>";
       echo "<li>BATCH :";
       echo $t->batch;
       echo "<br><br></li>";
       echo "<li>EMAIL :";
       echo $t->email;
       echo "<br><br></li></ul>";

   }
//    dnd($a);



?>
<?php $this->end(); ?>
