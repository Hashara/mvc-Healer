<?php

class Connection{
  private $dbhost;
  private $dbuser;
  private $dbpass;
  private $dbname;

function callConnection($dbhost,$dbuser,$dbpass, $dbname){

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(! $conn ) {
    die('Could not connect: ' );

}

  return $conn;
}
}
?>
