<?php 
//print_r($_POST);
$id = $_GET['id'];

include"db.php";

////MY Code////

if(isset($_POST['submit'])){
    
// Function to get the client IP address start
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
// Function to get the client IP address end      
  
    
$message='';
$title = $_POST['title'];
$sort_description = $_POST['short_description'];
$description = $_POST['description'];
$country = $_POST['country'];
$offer1 = $_POST['offer1'];
$offer2 = $_POST['offer2'];
$offer3 = $_POST['offer3'];
$offer4 = $_POST['offer4'];
$offer5 = $_POST['offer5'];
$date = date('Y-m-d');
$ip = get_client_ip();    
@$category = $_POST['category'];
@$users = $_POST['users'];    
    

$sql = "UPDATE `needyamin_smartlink` SET `title` = '$title', `short_description` = '$sort_description', `description` = '$description', `country` = '$country', `offer1` = '$offer1', `offer2` = '$offer2', `offer3` = '$offer3', `offer4` = '$offer4', `offer5` = '$offer5', `IP` = '$ip', `status` = '0', `creation_date` = '$date' WHERE `needyamin_smartlink`.`id` = '$id';";    
    
/////////////////////////
if ($mysqli->query($sql) === TRUE) {
  $message ="<script>alert('New record update successfully')</script>";  
  $last_id = $mysqli->insert_id;
} else {
  $message= "Error: " . $sql . "<br>" . $mysqli->error;
}
///////////////////////// 
    
 
    
    
    
}
;?>



<!DOCTYPE html>
<html>
    <head>
        
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
 <style>

select[data-multi-select-plugin] {
    display: none !important;
}

.multi-select-component {
    position: relative;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    height: auto;
    width: 100%;
    padding: 3px 8px;
    font-size: 14px;
    line-height: 1.42857143;
    padding-bottom: 0px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

.autocomplete-list {
    border-radius: 4px 0px 0px 4px;
}

.multi-select-component:focus-within {
    box-shadow: inset 0px 0px 0px 2px #78ABFE;
}

.multi-select-component .btn-group {
    display: none !important;
}

.multiselect-native-select .multiselect-container {
    width: 100%;
}

.selected-wrapper {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    display: inline-block;
    border: 1px solid #d9d9d9;
    background-color: #ededed;
    white-space: nowrap;
    margin: 1px 5px 5px 0;
    height: 22px;
    vertical-align: top;
    cursor: default;
}

.selected-wrapper .selected-label {
    max-width: 514px;
    display: inline-block;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-left: 4px;
    vertical-align: top;
}

.selected-wrapper .selected-close {
    display: inline-block;
    text-decoration: none;
    font-size: 14px;
    line-height: 1.49em;
    margin-left: 5px;
    padding-bottom: 10px;
    height: 100%;
    vertical-align: top;
    padding-right: 4px;
    opacity: 0.2;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    font-weight: 700;
}

.search-container {
    display: flex;
    flex-direction: row;
}

.search-container .selected-input {
    background: none;
    border: 0;
    height: 20px;
    width: 60px;
    padding: 0;
    margin-bottom: 6px;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.search-container .selected-input:focus {
    outline: none;
}

.dropdown-icon.active {
    transform: rotateX(180deg)
}

.search-container .dropdown-icon {
    display: inline-block;
    padding: 10px 5px;
    position: absolute;
    top: 5px;
    right: 5px;
    width: 10px;
    height: 10px;
    border: 0 !important;
    /* needed */
    -webkit-appearance: none;
    -moz-appearance: none;
    /* SVG background image */
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2212%22%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%3E%3Ctitle%3Edown-arrow%3C%2Ftitle%3E%3Cg%20fill%3D%22%23818181%22%3E%3Cpath%20d%3D%22M10.293%2C3.293%2C6%2C7.586%2C1.707%2C3.293A1%2C1%2C0%2C0%2C0%2C.293%2C4.707l5%2C5a1%2C1%2C0%2C0%2C0%2C1.414%2C0l5-5a1%2C1%2C0%2C1%2C0-1.414-1.414Z%22%20fill%3D%22%23818181%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    background-position: center;
    background-size: 10px;
    background-repeat: no-repeat;
}

.search-container ul {
    position: absolute;
    list-style: none;
    padding: 0;
    z-index: 3;
    margin-top: 29px;
    width: 100%;
    right: 0px;
    background: #fff;
    border: 1px solid #ccc;
    border-top: none;
    border-bottom: none;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}

.search-container ul :focus {
    outline: none;
}

.search-container ul li {
    display: block;
    text-align: left;
    padding: 8px 29px 2px 12px;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
    min-height: 31px;
}

.search-container ul li:first-child {
    border-top: 1px solid #ccc;
    border-radius: 4px 0px 0 0;
}

.search-container ul li:last-child {
    border-radius: 4px 0px 0 0;
}


.search-container ul li:hover.not-cursor {
    cursor: default;
}

.search-container ul li:hover {
    color: #333;
    background-color: rgb(251, 242, 152);
    ;
    border-color: #adadad;
    cursor: pointer;
}

/* Adding scrool to select options */
.autocomplete-list {
    max-height: 130px;
    overflow-y: auto;
}</style>
        
        
    </head>

<body>
    
<div class="container">
  <form action="" method="POST">
    <div style="background:black; color:white; padding:10px;"> Create New Smart Link 
        <a href="all_links.php">
        <span style="float:right; background:green;color:white; padding:2px;">ALl SmartLinks</span>
            </a></div>
      
      


    <table> 
   <tr>
       <td style="padding:20px;"> Title</td> <td>
       <input type="text" style="width:500px" class="form-control-sm" name="title" placeholder="SmartLink Title" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'";
if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[1];}};?>" required></td> 
        </tr>
        
        
    <tr>
       <td style="padding:20px;">Short Description</td> <td> 
               <input type="text" style="width:700px" class="form-control-sm" name="short_description"   value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[2];}};?>" placeholder="Short Description"></td>
        </tr>
        
        
        
    <tr>
        <td style="padding:20px;">Description</td> <td> 
        <textarea type="text" style="width:700px; height:100px;" name="description" class="form-control-sm" id="name" placeholder="Description" ><?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'";if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[3];}};?></textarea>
        </td>
        </tr>
    
  
        
       
    
        
<tr>
    <td style="padding:20px;">Country</td> <td>         
                   
<select name="country" id="cars">  
 <option value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'";
if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[4];}};?>"><?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'";
if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[4];}};?></option>  
       
<?php $sql = "SELECT * FROM `country`";
if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) {;?> 
       
<option value="<?php echo $row[1];?>"><?php echo $row[2];?></option>

<?php }};?>   

  </select>     

    
        </td>
        </tr>        
        
   

        
        
        
      <tr style="background:#d8f9ff;">
       <td style="padding:20px;">Add Offers</td> <td>           
  
        <div class="form-group">
     <input type="text" style="padding:20px;width:500px;margin-top:5px;" class="form-control-sm" name="offer1" placeholder="Add Offers 1" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[5];}};?>" required>  </div>
    
          
          <div class="form-group">
  <a class="btn-sm btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Add More Offers Link
              </a></div>


          
<div class="collapse" id="collapseExample">

    <div class="form-group">
     <input type="text" style="padding:20px;width:500px" class="form-control-sm" name="offer2" placeholder="Add Offers 2" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[6];}};?>">  </div>
    
    <div class="form-group">
       <input type="text" style="padding:20px;width:500px"  class="form-control-sm" name="offer3" placeholder="Add Offers 3" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[7];}};?>"> </div>
    
    <div class="form-group">
        <input type="text" style="padding:20px;width:500px" class="form-control-sm" name="offer4" placeholder="Add Offers 4" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[8];}};?>"> </div>

        <div class="form-group">
        <input type="text" style="padding:20px;width:500px" class="form-control-sm" name="offer5" placeholder="Add Offers 5" value="<?php $sql = "SELECT * FROM `needyamin_smartlink` WHERE ID ='$id'"; if ($result = $mysqli -> query($sql)) {  while ($row = $result -> fetch_row()) { echo $row[9];}};?>"> </div>
    
</div>
          
     </td>
        </tr>           
        
        
        
        
  
    
    
       <tr><td> </td><td> <button type = "submit" name="submit" class = "btn btn-primary">Update</button></td> </tr>
          </table>
      
      <?php if(isset($_POST['submit'])){echo $message;}?>
      
      </form>
      
    
    
    
    
</div> 




    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    

    
    
</body>



