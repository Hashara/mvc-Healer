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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Councelor</a>
            </li>
            </ul>
            
        </div>
    </nav>
    <br>
    <br>
   

      <center>
    
    <div class="card">

    <legend ><b>Visiting students</b></legend>
    <br>
    <br>

    <center>
    <table width=95% border="1" cellpadding="1" cell spacing="1">
   <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Contact Number</th>
   <th>Message</th>
   </tr>
   <?php foreach($this->list as $l): ?>
   <?php 
    echo "<tr><th>";
    echo $l->contactName;
    echo "</th><th>";
    echo $l->contactemail;
    echo "</th><th>";
    echo $l->contactNum;
    echo "</th><th>";
    echo $l->message;
    echo "</th></tr>";
   ?>
    <?php endforeach; ?>
    </table>
    </center>
  </center>
      <br>

    

<?php $this->end(); ?>