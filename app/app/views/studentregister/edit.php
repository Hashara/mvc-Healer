<?php $this->setSiteTitle('Edit');?>
 <?php $this->setLayout('signuplayout')?>
<?php $this->start('body'); ?>

<?php
    $ID=$this->student->studentId;

 ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="<?=PROOT?>icons/logo.jpg" alt="" width="auto" height="30px " >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?=PROOT?>studentregister/showProfile/<?=$this->student->studentId?>">Home <span class="sr-only">(current)</span></a>
            </li>
            </ul>

        </div>
    </nav>

    <p><br></p>

    <form action="" method="post">
         <center>

       <div class="card" >

       <legend ><b>Edit</b></legend>

       <!-- <p>  <button class="btn btn-primary" style="border-radius: 10px;">
           <a href="">Edit Profile</a></button></p>

    <p>  <button class="btn btn-primary" style="border-radius: 10px;">
        <a href="?=PROOT?>studentregister/editPassword/<?=$this->student->studentId?>">Change Password</a></button></p> -->
        <a class="btn btn-primary" style="margin-left: 10px;" href ="<?=PROOT?>studentregister/editPassword/<?=$this->student->studentId?>">Change Password</a>
    <p><br></p>
    <a class="btn btn-primary" style="margin-left: 10px;" href = '<?=PROOT?>studentregister/editProfile/<?=$this->student->studentId?>'>Edit Profile</a>

     </div>
     </center>

    </form>
       <?php $this->end(); ?>
