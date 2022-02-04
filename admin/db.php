<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project22";

// Create connection
$conntion =  mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo "failed to connect " . mysqli_connect_errno() ;
  exit();
}



?>