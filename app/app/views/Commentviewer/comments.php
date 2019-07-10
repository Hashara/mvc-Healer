<?php $this->setLayout('commentlayout')?>


<body class='bg-c'>

<?php $this->start('body'); ?>

<?php

  echo "<br>";

   foreach($this->comment as $t)
   {

   echo "<div><ul><li>";
   echo $t->comments;
   echo "</li>


    </ul></div>";
   }



?>
<?php $this->end(); ?>
