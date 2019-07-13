<?php $this->setSiteTitle('Home');?>
<?php $this->setLayout('messageviewerlayout')?>
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
    
    <form action="" method="post">
      <center>
    
    <div class="card">

    <legend ><b>Visit</b></legend>

    <!-- <div class="form-group" >
      <label for="">Student Id</label>
      <input type="text" name="studentId" class="form-control" id="studentId" aria-describedby="emailHelp" placeholder="Enter index">
      
    </div> -->
    

    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your university email" value="<?=$this->post['email']?>" >
      
    </div>
    
    
   
    
    <p><button type="submit" name="" class="btn btn-primary">Submit</button></p>
  
  </div>
  </center>
      
</form>

<?php $this->end(); ?>

