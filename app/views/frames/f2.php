<!--  -->
<!--
// $ID='170007T';

// $id=(string)$ID;



//  -->

<html>
<head>

  <link rel="stylesheet" href="../../../css/css/bootstrap.css">
  <link rel="stylesheet" href="../../../css/css/_variables.scss">
  <link rel="stylesheet" href="../../../css/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/css/_bootswatch.scss">
  <link rel="stylesheet" href="../../../css/css/f2.css">


</head>


<style>
  p.padding {
    padding-left: 0.4cm;
  }
  </style>



<body>
  <div class="bg">
    <br>
    <?php $ID=$_GET['id'];
    // echo $ID;
    ?>
    <!-- ?php
    echo "../../../taskviewer/tasks/".$ID;
    ?> -->
    <form name="form1" method="POST" action=<?php
        echo "../../../mylogviewer/mylog/".$ID;
        ?> target="_top">
      <!--my log button-->
      <p class="padding"><input type = "submit" class="btn btn-primary btn-lg" style="border-radius: 10px;" name="submit" value="My Log"/></p>

        <!--Task link-->
      <p style="font-size:20px;" class="padding"><strong><A href =<?php
        echo "../../../taskviewer/tasks/".$ID;
        ?> target="f3"> Tasks</A></strong></p>

    <!--Achievement link-->
    <p style="font-size:20px;" class="padding"><strong><A href =<?php
        echo "../../../taskviewer/archievements/".$ID;
        ?> target="f3">  Achievements</A></strong></p>

        <!--Record link-->
      <p style="font-size:20px;" class="padding"><strong><A href =<?php
        echo "../../../recordviewer/records/".$ID;
        ?> target="f3"> Records</A></strong></p>

        <!--Comment link-->
      <p style="font-size:20px;" class="padding"><strong><A href =<?php
        echo "../../../commentviewer/comments/".$ID;
        ?> target="f3"> Comments</A></strong></p>


</div>
</body>
</html>
