<?php

include("connection.php");

class FetchData{


  function fetchData($dbhost,$dbuser,$dbpass,$tableName,$id){

    $connectionPage= new Connection();
    $connection = $connectionPage -> callConnection($dbhost,$dbuser,$dbpass);

    $sql = 'SELECT achievements,ach_id FROM $tableName WHERE studentID="170007T"';
    mysqli_select_db($connection,'project');
    $retval = mysqli_query( $connection,$sql );

    if(! $retval ) {
       die('Could not get data: ' );

  }

}

 ?>

}
