<?php

// requring the file "database_credentials.php"


// Create connection
$conn = mysqli_connect('localhost','root','','televisionstations');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  return true ;
}
?>