
<?php $this->setLayout('studentprofilelayout')?>


<!-- <p>sasvdbnvabnsdvnasdvnvdasvdavbnvasdn  ?= $this->user->studentId ?>    hxsgjhgdjhagdf </p> -->
<frameset rows="8%, * " framespacing=0 frameborder="0">
  <frame name="f1" src="<?=PROOT?>app/views/frames/f1.php?id=<?php echo ($this->user->studentId);?>" noresize = "noresize" scrolling = "no" >
  <frameset cols="15%, * " framespacing=0 frameborder="0">
  <frame name="f2" src="<?=PROOT?>app/views/frames/f2.php?id=<?php echo ($this->user->studentId);?>" noresize = "noresize" scrolling = "no">
  <frame name="f3" src="<?=PROOT?>app/views/frames/f3.php?id=<?php echo ($this->user->studentId);?>" noresize = "noresize" scrolling = "no">
</frameset>
</frameset>

<?php $this->start('body'); ?>
<?php $this->end(); ?>
