<?php $this->setSiteTitle('Done');?>
<?php $this->setLayout('visitorinfolayout')?>
<?php $this->start('body'); ?>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="<?=PROOT?>icons/logo.jpg" alt="" width="auto" height="30px " >
        
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
<p><br></p>
   
<center>
      
    <div class="card" >

    <legend ><b>You have Successfully Contacted Councellor</b></legend>
    <p><br></p>
    <center><img src="<?=PROOT?>icons/contacted.png" alt="message" width=200 height=auto ></center> 
    <p><br></p>
    <p> <h2><b>Councellor will contact you or your friend in near future<b> </h2></p>

    <p><br></p>
   

    
  
  </div>
  </center>
      
</form>
    

<?php $this->end(); ?>

