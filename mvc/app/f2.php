<?php

$ID='170007T';

$id=(string)$ID;



?>

<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/_variables.scss">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/_bootswatch.scss">
  <link rel="stylesheet" href="../css/f2.css">


</head>


<style>
  p.padding {
    padding-left: 0.4cm;
  }
  </style>



<body>
  <div class="bg">
    <br>
<form name="form1" method="POST" action="../php/myLog.php" target="_top">
  <p class="padding"><input type = "submit" class="btn btn-primary btn-lg" name="submit" value="My Log"/></p>
  <p class="padding"><A href ="../php/tasks.php?id=<?php echo $ID?>" target="f3"> Tasks</A></p>
  <p class="padding"><A href ="../php/achievements.php?id=<?php echo $ID?>" target="f3"> Achievements</A></p>
  <p class="padding"><A href ="../php/records.php?id=<?php echo $ID?>" target="f3"> Records</A></p>
  <p class="padding"><A href ="../php/comments.php?id=<?php echo $ID?>" target="f3">Comments</A></p>

</div>
</body>
</html>
