<?php $this->setLayout('myloglayout')?>


<body class='bg'>

<?php $this->start('body'); ?>

<?php

//  dnd();

  echo "<br>";

   foreach($this->mylog as $t)
   {


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
