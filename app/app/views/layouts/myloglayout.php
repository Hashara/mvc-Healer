<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$this->siteTitle();?></title>

  <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.css">
    <link rel="stylesheet" href="<?=PROOT?>css/css/_variables.scss">
    <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/css/_bootswatch.scss">
  <link rel="stylesheet" href="<?=PROOT?>css/css/f2.css">

    <?= $this->content('head');?>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
</div>
</nav>

<body>


<?= $this->content('body');?>

</body>
</html>
