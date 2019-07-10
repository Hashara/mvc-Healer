<?php $this->setSiteTitle('edit');?>
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
      <?php
      $id = $this->counselor->counsellorid;
      ?>
    <div class="card" >
    <h3> Edit Profile </h3>
    <a class="btn btn-primary" style="margin-left: 10px;" href ="<?=PROOT?>counselorregister/editPassword/<?=$id?>">Change Password</a>
    <p><br></p>
    <a class="btn btn-primary" style="margin-left: 10px;" href = '<?php echo "../changeProfilePic/".$id;?>'>Change Profile Picture</a>
    </div>
  </center>

</form>
<?php $this->end(); ?>
