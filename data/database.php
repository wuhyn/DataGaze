<?php
$servername = "localhost";
$user = "root";
$pw = "resdata47";
$database = "form";

//Make the connection
$conn = new mysqli($servername, $user, $pw, $database);

if(mysqli_connect_errno($conn)){
  echo 'Connection Failed.';
}
else{
  //echo "Database connection is good.";
}
 ?>
