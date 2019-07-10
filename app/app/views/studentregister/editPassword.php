<?php $this->setSiteTitle('Edit Password');?>
 <?php $this->setLayout('signuplayout')?>
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

        </div>
    </nav>

    <p><br></p>

 <form action="" method="post">
      <center>

    <div class="card" >

    <legend ><b>Edit</b></legend>

  <div class="bg-danger"><?=$this->displayErrors?></div>


    <div class="form-group">
      <label for="">Current Password</label>
      <input type="password" name="current" class="form-control" id="current" placeholder=" Current Password" >

    </div>


    <div class="form-group">
      <label for="e">New Password</label>
      <input type="password" name="new" class="form-control" id="new" placeholder="New Password"  >
    </div>

    <div class="form-group">
      <label for="e">Confirm Password</label>
      <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Confirm Password"  >
    </div>

  <p><button type="submit"  class="btn btn-primary" style="border-radius: 10px;">Save</button></p>

  </div>
  </center>

</form>
<?php $this->end(); ?>
