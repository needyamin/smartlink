
<?php 
$id = $_GET['id'];
////////////////////////////////////
include"db.php";
//////////////////////////////////////

$sql = "SELECT * FROM `needyamin_smartlink` where id='$id'";
if ($result = $mysqli -> query($sql)) {

 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {;?>
<?php 
$mre = $row['country'];
$offer1 = $row['offer1'];
$offer2 = $row['offer2'];
$offer3 = $row['offer3'];
$offer4 = $row['offer4'];
$offer5 = $row['offer5'];

?>
      
<?php 

$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];

if ($countrycode=="$mre")
    header("Location: $offer1");
  
else if ($countrycode=="$mre")
    header("Location: $offer2") ; 
    
else if ($countrycode=="$mre")
    header("Location: $offer3") ; 
    
else if ($countrycode=="$mre")
    header("Location: $offer4") ; 
    
else if ($countrycode=="$mre")
    header("Location: $offer5");     
    
else
    header("Location: https://aff.topsmartlink.com/");
    ;?>
    

  

<?php }}
  
else {
  echo "0 results";
} 

}; 




//$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
//$countrycode= $a['geoplugin_countryCode'];

//if ($countrycode=='US')
    //header( 'Location: https://www.cpagrip.com/show.php?l=0&u=97145&id=9378&tracking_id=' ) ;
//else if ($countrycode=='GB')
    //header( 'Location: https://www.cpagrip.com/show.php?l=0&u=97145&id=9643&tracking_id=' ) ;
//else if ($countrycode=='CA')
    //header( 'Location: https://www.cpagrip.com/show.php?l=0&u=97145&id=5882&tracking_id=' ) ;

//else if ($countrycode=='ALL')
    //header( 'Location: https://www.google.com' ) ;

//else
    //header( 'Location: http://google.com' ) ;



;?>