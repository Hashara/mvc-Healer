<?php $this->setSiteTitle('Home');?>
<?php $this->setLayout('loginstdlayout')?>
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
    <div class="container">
    <form action="<?=PROOT?>counselorregister/login" method="post" >
        
        <center> 
         
         
          <div class="row"> 
          <div class="column">
              <div class="card">
                  <p><br></p>
              <legend><h1><b>Councellor Log in</b></h1></legend>
              <img src="<?=PROOT?>icons/login.png" alt="login" width=200 height=auto>
              <!-- 
                  if (isset($errors) && !empty($errors)){
                      echo '<pre class="alert-danger hr">
                      <p align="center">Invalid Username/password <p>
                       </pre>';
                  }
              ?> -->
              <div class="bg-danger"><?=$this->displayErrors?></div> 
               <div class="container">
              <p for="">Email :</p>
              <input type="text" name="email" id="email" placeholder="email" class="form-control"> 
              
              <p for="">Password :</p>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control">
              <!-- <div class="form-group">
                <label for="remeber_me">Remember me
                <input type="checkbox" id="remeber_me" name="remeber_me"  value="on">
                </label>
            </div> -->
              <p><button type="submit" name="submit" class="btn btn-primary">LogIn</button></p>
              </div>
              
              </div>
          </div>   
          </div>   
          </center>
      </form>
    </div> <!--.login-->
    

<?php $this->end(); ?>

