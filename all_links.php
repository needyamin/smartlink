
                      
                      
 <?php include"db.php";
////////////////////////////////////// ;

@$deleted = $_GET['del'];
if(isset($deleted)){
echo"<script>alert('Smartlink has been deleted')</script>";
};

;?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://aff.topsmartlink.com/smartlink/stylesheet/jquery.dataTables.min.css">  
     <link rel="stylesheet" href="stylesheet/bootstrap.min.css">  
     
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      
    <!--Bootstrap JSS-->
    <script src="stylesheet/jquery-3.5.1.js" crossorigin="anonymous"></script>
 

<title>Smartlinks</title>
  </head>
    
    
<body>
    
<div class="container">
    
    <div style="background:black; color:white; padding:15px;margin-top:10px;"> All Smartlinks 
      <a href="create.php">
    <span style="float:right; background:green;color:white; padding:2px;">Create New Smartlink</span>
       </a>
         </div>    
    <br>
<table id="needyamin_data" class="table table-striped table-bordered" style="width:100%;text-align:center;">
        <thead>
            <tr>
                <th style="text-align:center;">Title</th>
                <th style="text-align:center;">Description</th>
                <th style="text-align:center;">Country</th>
                <th style="text-align:center;">Status</th>
                <th style="text-align:center;">Your Shareable link</th>
            </tr>
        </thead>
        <tbody>

         
            
<!------- 
<input type="text" value="Hello World" id="myInput">
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Smartlink Copied");
}
</script>    ---------->
            
            
            
            
            
            
    
            
<?php $sql = "SELECT * FROM `needyamin_smartlink`";
if ($result = $mysqli -> query($sql)) {

 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {;?>   

            <tr>
                <td><?php echo $row["title"];?></td>
                <td><?php echo $row["description"];?></td>
                <td><?php echo $row["country"];?></td>
                <td>
                    <?php if ($row["status"] == '0') {echo"<i class='fa fa-toggle-on' aria-hidden='true' title='Active Offer'></i>";} else {echo"<i class='fa fa-toggle-off' aria-hidden='true' title='Inactive Offer'></i>";};?>
                
                </td>
                <td> 
                    <input type='text' value='http://<?php echo $_SERVER['SERVER_NAME'];?>/smartlink.php?id=<?php echo $row["id"];?>' style="width:300px;"> <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/smartlink.php?id=<?php echo $row["id"];?>" target="_blank" class="btn-success p-2">Open Link</a>     
                </td>
                
                
                
            </tr>  
         <?php  }}};?> 
            
        </tbody>
    </table>
 </div>      

    
    
    
</body>
    

    
<!-- footer core files start-->
<script>$(document).ready(function() {
    $('#needyamin_data').DataTable();
} );</script>
      

<script src="stylesheet/jquery.dataTables.min.js" crossorigin="anonymous"></script>

<!-- footer core files end-->       
    
</html>      
      
                      