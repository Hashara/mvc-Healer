<?php $this->setSiteTitle('messagehome');?>
<?php $this->setLayout('messagelayout')?>
<?php $this->start('body'); ?>

  <!-- ?php echo ($this->student->studentId);?> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img src="<?=PROOT?>icons/logo.jpg" alt="" width="auto" height="30px " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href=
        <?php 
        if ($this->isstudent=='true'){
          echo PROOT;
          echo "/studentregister/showProfile/";
          echo $this->student->studentId;
          //echo ">"
        }else{
        echo PROOT;

        echo "counselorregister/showProfile/";
        echo $this->student->Counselor;
      }?>
      >My Account</a>
      </li>
            
    </ul>
    
  </div>
</nav>

<center>
<div class="container">
<br>
<h1 align="center" style="color:white;">Message </h1>
<br>
<div class="row">
  <div class="column">
    <div class="container">
        <div class="card">
        <h3><b>Contact </b></h3>
        <center><img src="<?=PROOT?>icons/newmsg.png" alt="message" width=200 height=auto ></center> 
<br>
<!-- ?php echo ($this->isstudent);?> -->
        <?php if($this->isstudent=='true'){
          echo "<a href=";
          echo PROOT;
          echo "message/messagesender/";
          echo $this->student->studentId;
          echo "/";
          echo $this->student->Counselor;
        }else{
          echo "<a href=";
          echo PROOT;
          echo "message/messagesender/";
          echo $this->student->Counselor;
          echo "/";
          echo $this->student->studentId;
        }?>
         
         
        <button type='submit' name='newBtn'  class="btn btn-primary" action="">New message</button>

      </a>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="container">
    <div class="card">
    <h3><b>My Messages</b></h3>
        <center><img src="<?=PROOT?>icons/receive.png" alt="message" width=200 height=auto ></center> 
<br>

  <?php if($this->isstudent=='true'){
          echo "<a href=";
          echo PROOT;
          echo "message/messageviewer/";
          echo $this->student->studentId;
          echo "/";
          echo $this->student->Counselor;
        }else{
          echo "<a href=";
          echo PROOT;
          echo "message/messageviewer/";
          echo $this->student->Counselor;
          echo "/";
          echo $this->student->studentId;
        }?>
        
        <button type='submit' name='ViewBtn' class="btn btn-primary"  action="">View</button>

      </a>
        </div>
    </div>
  </div>

 
</div>
</center>

<?php $this->end(); ?>



