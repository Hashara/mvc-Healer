<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle('login');?></title>

    <link rel="stylesheet" href="<?=PROOT?>css/index.min.css">
<link rel="stylesheet" href="<?=PROOT?>css/login.css">

    <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
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