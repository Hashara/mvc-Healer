<?php $this->setSiteTitle('register');?>
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          
            </ul>
            
        </div>
    </nav>
<p><br></p>
    <form action="" method="post">
      <center>
    
    <div class="card" >

    <legend ><b>Sign Up</b></legend>

    <div class="bg-danger">+<?=$this->displayErrors?></div> 
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" id="name"  placeholder="Enter name" value="<?=$this->post['name']?>">
      
    </div>

    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" name="email" class="form-control" id="email"  placeholder="Enter university email" value="<?=$this->post['email']?>">
      
    </div>

    
    <div class="form-group">
      <label for="">Gender</label>
      <select class="form-control" name="gender" id="gender" value="<?=$this->post['gender']?>" >
        <option>Female</option>
        <option>Male </option>
        </select>
    </div>
   
    <div class="form-group">
      <label for="e">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?=$this->post['password']?>" >
    </div>

    <div class="form-group">
      <label for="e">Confirm password</label>
      <input type="password" name="confirm" class="form-control" id="confirm" placeholder="confirm password"  value="<?=$this->post['confirm']?>">
    </div>
    <div class="form-group">
      <label for="e">Designation</label>
      <input type="text" name="designation" class="form-control" id="designation" placeholder="designation" value="<?=$this->post['designation']?>" >
    </div>
    
    <div class="form-group">
      <label for="">Faculty</label>
      <select class="form-control" name="faculty" id="faculty"  value="<?=$this->post['faculty']?>">
        <option>Faculty of Engineering</option>
        <option>Faculty of Architecture </option>
        <option>Faculty of Information Technology </option>
        <option>Faculty of Business</option>
        </select>
    </div>
    <div class="form-group">
      <label for="">Department</label>
      <input type="text" name="department" class="form-control" id="department" aria-describedby="emailHelp" placeholder="Enter your department" value="<?=$this->post['department']?>">
      
    </div>
   
    
    <p><button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
  
  </div>
  </center>
      
</form>
<?php $this->end(); ?>