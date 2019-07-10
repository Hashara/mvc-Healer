<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle('viewmessage');?></title>
   
    <link rel="stylesheet" href="<?=PROOT?>css/message/index.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/message/index.css">
    <link rel="stylesheet" href="<?=PROOT?>css/message/chat.css">
   <script>
    .button {
      background-color: #008CBA;/
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

     
    .button1 {background-color: #e7e7e7; color: black;} /* Gray */ 
    
   </script>
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