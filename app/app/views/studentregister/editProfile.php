<?php $this->setSiteTitle('Edit Profile');?>
 <?php $this->setLayout('signuplayout')?>
<?php $this->start('body'); ?>
<?php
$dep=$this->student->department;
$img=$this->student->image;
?>

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

        </div>
    </nav>

    <p><br></p>

 <form action="" method="post" enctype = "multipart/form-data">
      <center>

    <div class="card" >

    <legend ><b>Edit Profile</b></legend>

    <div class="bg-danger"><?=$this->displayErrors?></div>

    <div class="form-group">
      <label for="e">Department</label>
      <input type="text" name="department" class="form-control" id="department" placeholder="Department"  value="<?=$dep?>">
    </div>

<div>
    <img width = '200' height = '200' position ='centre' src = '<?=$img?>'>
  </div>


<div>
    <form action = "" method = "post" enctype = "multipart/form-data">
        <input class="btn btn-primary" type = "file" name = "file" >

    </form>
  </div>


<div>

  <p><button type="submit"  class="btn btn-primary" style="border-radius: 10px;">Save</button></p></div>

  </div>
  </center>

</form>
<?php $this->end(); ?>
