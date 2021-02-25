<?php 
$id = $_GET['id'];
$conn = new mysqli("localhost","needyamin","Yamin143","test1");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql1 = "DELETE FROM `needyamin_smartlink` WHERE `id` = '$id';";

$sql2 = "DELETE FROM `needyamin_category` WHERE `last_insert_smartlink_id` = '$id';";

$sql3 = "DELETE FROM `needyamin_users` WHERE `last_insert_smartlink_id` = '$id';";    

//////////////////////////////////////////
if ($conn->query($sql1) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
//////////////////////////////////////////

//////////////////////////////////////////
if ($conn->query($sql2) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
//////////////////////////////////////////

//////////////////////////////////////////
if ($conn->query($sql3) === TRUE) {
  header('location: index.php?del=deleted');
} else {
  echo "Error deleting record: " . $conn->error;
}
//////////////////////////////////////////


;?>