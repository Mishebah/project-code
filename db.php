<?php


$host="localhost";
$user="root";
$pass="";
$db_name="EPS4";

$con =new mysqli($host,$user,$pass,$db_name);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>