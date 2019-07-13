<?php $this->setSiteTitle('messagehome');?>
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
        <a class="nav-link" href="#">My Account</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">Chat Room</a> <!--connect to chat room -->
      </li>
      
    </ul>
    
  </div>
</nav>
<br>
<center>
<div class="container">

<div class="card">
<br>
<h1 align="center" style="color:white;">Chat</h1>
<br>
     
      <?php foreach($this->messages as $message): ?>
      <?php 
       if($this->senderisastudent){
        if(strlen($message->sender)!=7){
          echo "<p align='right'>";
          echo "<button style=' background-color: #008CBA;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: right;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;'> You:";

          echo  base64_decode($message->content) ;
          echo "</button>";
          echo "</p>";
        }else{
          echo "<p align='left'>";
          echo "<button style='background-color: #e7e7e7; color: black;
          border: none;
          
          padding: 15px 32px;
          text-align: left;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;'> counselor:";

          echo  base64_decode($message->content) ;
          echo "</button>";
          echo "</p>";
        }
      
       }else{
        if(strlen($message->sender)==7){
          echo "<p align='right'>";
          echo "<button style=' background-color: #008CBA;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: right;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;'> You:";

          echo  base64_decode($message->content) ;
          echo "</button>";
          echo "</p>";
        }else{
          echo "<p align='left'>";
          echo "<button style=' background-color: #e7e7e7; color: black;
          border: none;
          
          padding: 15px 32px;
          text-align: left;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;'> Student:";

          echo  base64_decode($message->content) ;
          echo "</button>";
          echo "</p>";
        }
        ;
       }
      
      ?>
      

      <?php endforeach; ?>
    
</center>

<?php $this->end(); ?>