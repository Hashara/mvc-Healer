<?php $this->setLayout('recordlayout')?>


<body class='bg-r'>

<?php $this->start('body'); ?>

<?php

//  dnd();

  echo "<br>";

   foreach($this->record as $t)
   {


   echo "<div style='opacity:1' ><ul><li>";
   echo $t->records;
   echo "</li></ul></div>";

}




?>
<?php $this->end(); ?>
