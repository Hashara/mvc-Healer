<!DOCTYPE html>
<html>
<head>

<style>
body, html {
  height: 100%;
  margin: 0;
}

img {
  border-radius: 5px 5px 0 0;
}


</style>
<link rel="stylesheet" href="../css/f3.css">
</head>
<body>


<div class="bg">
  <!--first card; bootsrap dark-->
  <div class="card text-white bg-dark mb-3" style="max-width: 300px;">
  <!--<div class="card-header"style="margin-left: 10px;margin-right: 10px;margin-top: 10px;margin-bottom: 10px;"><h1>Header</h1></div>-->
  <div class="card-body" style="margin-left: 10px;margin-right: 10px;margin-top: 10px;margin-bottom: 10px;">
    <h1 class="card-title">
      <?php echo

    include("connection.php");

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';


    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);
    mysqli_select_db($connection,'project');


    //mt_rand("", ""); // this creates random numbers and use it in a variable as:
    $id= mt_rand("1", "6");
    // hatever id number is generated it will put out that one in the query but it is only for one if you want multiple put $id in a for loop  than print the result in while loop.
    $sql = "SELECT tasks FROM tasks WHERE task_id= '$id' LIMIT 0, 10";
     $retval = mysqli_query( $connection,$sql );
     if(! $retval ) {
        die('Could not get data: ' );
     }

    $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);

      echo "{$row['tasks']}";


    mysqli_close($connection);


    ?></h1>
    <h3 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h3>
  </div>
</div>
<!--second card; css cord
<div class="card" style="background-color: Black;">
  <div class="container">
    <h4><b>Jane Doe</b></h4>
    <p>Interior Designer</p>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Dark card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>-->

  <div class="content">

    <h1>WELCOME</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>


</body>
</html>
