<?php $this->setLayout('tasklayout')?>


<body class='bg-a'>

<?php $this->start('body'); ?>

<?php

//  dnd();

  echo "<br>";

   foreach($this->archievement as $t)
   {
    //    dnd($archievement);
//    array_push($a,$t->tasks);
      // dnd(PROOT);
   if($t->completed==1){
   echo "<div style='opacity:1' ><ul><li>";
   echo $t->tasks;
   echo "</li>

       <form action='";
   echo PROOT;
   echo    "taskviewer/update_ach'  method='post'>
          <button type='submit' class='btn btn-primary btn-sm' formtarget='_self' formmethod='post' name='done_button'  value=";
    echo  $t->id;
    echo ">
          REDO
          </button>
        </form>

      <br></ul></div>";
   }
}
//    dnd($a);



?>
<?php $this->end(); ?>
