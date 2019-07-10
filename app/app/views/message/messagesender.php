<?php $this->setSiteTitle('send');?>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=PROOT?>/counselorregister/showProfile/<?=$this->tofromarray[0]?>">My Account</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?=PROOT?>message/messageviewer/<?=$this->tofromarray[0]?>/<?=$this->tofromarray[1]?>">Chat</a> <!--connect to chat display -->
      </li>
      
    </ul>
    
  </div>
</nav>

<center>
<div class="container">
<br>
<h1 align="center" style="color:white;">Chat Room</h1>
<br>
<form   action="<?=PROOT?>message/messagesender/<?=$this->tofromarray[0]?>/<?=$this->tofromarray[1]?>" method="post">

  
    <div class="container" style="width:100%">
        <div class="card" >
        <center><img src="<?=PROOT?>icons/messages.png" alt="message" width=200 height=auto ></center> 

            <p><input type="text" name="message" id="" placeholder="message" class="form-control" value=""></p>   
          
          <a href="<?=PROOT?>message/messagesender/<?=$this->tofromarray[0]?>/<?=$this->tofromarray[1]?>">
        <button type='submit' name='ViewBtn' class="btn btn-primary"  action="">Send</button>

      </a>
        </div>
    
  </div>
  <!-- <div class="column">
    <div class="container">
    <div id="chatbox"></div>
    </div>
  </div> -->

 
</form>
</center>

<?php $this->end(); ?>