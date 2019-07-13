<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle();?></title>

    <link rel="stylesheet" href="<?=PROOT?>css/css/_bootswatch.scss">  

  <link rel="stylesheet" href="<?=PROOT?>css/css/_variables.scss">
  <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.css">
  <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?=PROOT?>css/signup.css">
    <link rel="stylesheet" href="<?=PROOT?>css/login.css">
    <link rel="stylesheet" href="<?=PROOT?>css/index.css">
    <?= $this->content('head');?>
  </head>
  <body>
  <ul class="slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
  </ul>

  
  
  <?= $this->content('body');?>   

  </body>
</html>