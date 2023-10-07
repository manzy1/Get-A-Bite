<?php 
$databaseHost="localhost";
$databaseUser="manzy";
$databasePassword="emmanuel";
$databaseName="getabite";

//create connection
$conn = mysqli_connect('localhost','manzy','emmanuel','getabite');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>