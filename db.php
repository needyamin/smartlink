<?php 
////////////////////////////////////
$mysqli = new mysqli("localhost","needyamin","Yamin143","test1");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
};?>