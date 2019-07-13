
<html>
<head>
<link rel="stylesheet" href="../../../css/css/bootstrap.css">
  <link rel="stylesheet" href="../../../css/css/_variables.scss">
  <link rel="stylesheet" href="../../../css/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/css/_bootswatch.scss">
  <link rel="stylesheet" href="../../../css/css/f1.css">

<!--

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/boot2.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>-->

   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


</head>
<?php $ID=$_GET['id'];
  //  echo "../../../message/sendmessage /".$ID;
    ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Healers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=PROOT?>">Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
</div>

  <!-- <div class="pull-right">
        <ul class="nav navbar-nav">
        <!  <i class="glyphicon glyphicon-envelope"></i>
            <a class="btn" href="../php/MyLog.php" target="_parent"><i class="fa fa-file"></i> Edit</a>-->
          <!--  <a href="#" style="font-size:36px;color:lightblue;text-shadow:2px 2px 4px #000000;">-->
          <a href='<?php echo "../../../message/sendmessage/".$ID; ?>' style="margin-left: 1070;"  target="_parent"  class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"> </span>
        </a>

        <a  class="btn btn-info btn-lg" style="margin-left: 10px;" href='<?php
    echo "../../../studentregister/edit/".$ID;
    ?>' target="_parent">
          <span class="fas fa-edit"></span> Edit
        </a>
            <a  class="btn btn-info btn-lg" style="margin-left: 10px;" href='<?php
    echo "../../../studentregister/logout/".$ID;
    ?>' target="_parent">
          <span class="glyphicon glyphicon-user"></span> Log Out
        </a>
            <!--<a class="btn" style="margin-left: 10px;" href="../php/myLog.php" target="_parent" type="submit"  name="logout" id="logout"  value="Log Out">Log Out</a>-->
            <!-- </ul>
</div> -->
</nav>

</html>
