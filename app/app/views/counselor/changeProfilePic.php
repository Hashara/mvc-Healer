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
    <form action="" method="post" enctype="multipart/form-data">
      <center>


    <div class="card" >
    <legend ><b>Change Profile Picture</b></legend>
    <?php
    $id = $this->counselor->counsellorid;
    $image = $this->counselor->image;
    $path1 = "C:\\xampp\\htdocs\\app\\img\\councelor\\\\";
    $path2 = "\\\app\\\img\\\councelor\\\\";
    //dnd($path2);
    if(isset($_POST['submit'])){
        move_uploaded_file($_FILES['file']['tmp_name'],$path1.$_FILES['file']['name']);
       //dnd($_FILES['file']['tmp_name']);
        $con = mysqli_connect("localhost","root","","ruah");
        $q = mysqli_query($con,"UPDATE counselors SET Image ='".$path2.$_FILES['file']['name']."' WHERE counsellorid = '".$id."'");
        header('Location: ../showProfile/'.$id);
    }


    ?>

    <img width = '200' height = '200' position ='centre' src = '<?php echo $image?>'>
    <br>

    <form action = "" method = "post" enctype = "multipart/form-data">
        <input class="btn btn-primary" type = "file" name = "file" >
        <br>
        <input class="btn btn-primary" type = "submit" name = "submit">
    </form>

    <?php

    ?>


    </div>
  </center>

</form>
<?php $this->end(); ?>
