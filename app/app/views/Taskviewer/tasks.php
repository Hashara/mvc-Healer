<?php $this->setLayout('tasklayout')?>


<body class='bg-t'>

<?php $this->start('body'); ?>

<?php

//  dnd();

  echo "<br>";

   foreach($this->task as $t)
   {
//    array_push($a,$t->tasks);
      // dnd(PROOT);
   if($t->completed==0){
   echo "<div style='opacity:1' ><ul><li>";
   echo $t->tasks;
   echo "</li>

       <form action='";
   echo PROOT;
   echo    "taskviewer/update_tasks'  method='post'>
          <button type='submit' class='btn btn-primary btn-sm' formtarget='_self' formmethod='post' name='done_button'  value=";
    echo  $t->id;
    echo ">
          DONE
          </button>
        </form>

      <br></ul></div>";
   }
}
//    dnd($a);



?>
<?php $this->end(); ?>
