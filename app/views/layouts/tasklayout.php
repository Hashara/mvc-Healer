<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle();?></title>

   
<link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.css">
  <link rel="stylesheet" href="<?=PROOT?>css/css/_variables.scss">
  <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=PROOT?>css/css/_bootswatch.scss">
  <link rel="stylesheet" href="<?=PROOT?>css/css/background.css">
    
    <?= $this->content('head');?>
  </head>
  <body>
  
  
  <?= $this->content('body');?>   

  </body>
</html>