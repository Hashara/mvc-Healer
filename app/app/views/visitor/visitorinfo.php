<?php $this->setSiteTitle('Visitor Info');?>
<?php $this->setLayout('visitorinfolayout')?>
<?php $this->start('body'); ?>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="icon/logo.jpg" alt="" width="auto" height="30px " >
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?=PROOT?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Councelor</a>
            </li>
            </ul>
            
        </div>
    </nav>
    
    <p><br></p>
   
    <form action="" method="post">
      <center>
    
    <div class="card" >

    <legend ><b>Student Info</b></legend>
    <p> <h4> Fill the below form with information about the student who needs councilling </h4></p>
   
    
    <div class="form-group">
      <label for=""><b>Name</b></label>
      <input type="text" name="contactName" class="form-control" id="contactName" aria-describedby="emailHelp" placeholder="Enter name" >
      
    </div>

    <div class="form-group">
      <label for=""><b>Email address</b></label>
      <input type="email" name="contactemail" class="form-control" id="contactemail" aria-describedby="emailHelp" placeholder="Enter contact email"  >
      
    </div>
    <div class="form-group">
      <label for="e"><b>Contact Number</b></label>
      <input type="text" name="contactNum" class="form-control" id="contactNum" aria-describedby="emailHelp" placeholder="Enter contact number"  >
    </div>
   
    <div class="form-group">
      <label for=""><b>Message</b></label>
      <input type="text" name="	message" class="form-control" id="message" aria-describedby="emailHelp" placeholder="Enter name"  >
      
    </div>
   
    
    <p><button type="submit" name="" class="btn btn-primary">Submit</button></p>
  
  </div>
  </center>
      
</form>
    

<?php $this->end(); ?>

