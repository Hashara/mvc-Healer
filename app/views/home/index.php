<?php $this->setSiteTitle('Home');?>
<?php $this->setLayout('homelayout')?>
<?php $this->start('body'); ?>

<ul class="slideshow">
  <li><span>Image 01</span></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img src="icons/logo.jpg" alt="" width="auto" height="30px " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=PROOT?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="container">
  <p><br></p>
<h1 align="center" style="color:white;">Healers</h1>
<p><br></p>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><b>Already have an account?</b></h3>
      
      <img align="center" src="<?=PROOT?>icons/login.png" alt="login" width=40% height="auto">
      <p><br></p>
      <div>
      <a href="<?=PROOT?>Register/loginHome">
      <button type="button" class="btn btn-primary" >Log in</button>
      </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><b>Sign up Today</b> </h3>
      <img src="<?=PROOT?>icons/signup.png" alt="signup" width=40% height="auto">
      <p><br></p>
      <div>
      <a href="<?=PROOT?>Studentregister/register" > 
      <button type="button" class="btn btn-primary" >Sign up</button>
      </a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><b>Want to help someone?</b></h3>
      <img src="<?=PROOT?>icons/view.png" alt="visit" width=40% height="auto">
      <p><br></p>
      <a href="<?=PROOT?>visitor/visit" > 
      
      <button type="button" class="btn btn-primary" >Visit</button>
      </a>
      </div>
     
    </div>
  </div>
  </div>
 
</div>
<?php $this->end(); ?>