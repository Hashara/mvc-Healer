<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle('message');?></title>
   
    <link rel="stylesheet" href="<?=PROOT?>css/message/index.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/message/index.css">
    
   
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