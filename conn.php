



<?php

$servername = "localhost";
$database = "space_db";
$username = "root";
$password = "";

$con1 = mysqli_connect($servername, $username, $password, $database);

if (!$con1)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  
  
mysqli_set_charset($con1,"utf8");
mysqli_select_db($con1,"space_db");

?>