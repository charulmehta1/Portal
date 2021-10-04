<?php
include('db.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <link rel="stylesheet" href="style1.css">
            <li><a href="detail.php"><i class="fas fa-user"></i>user</a></li>
            <li><a href="status.php"><i class="fas fa-status"></i>status</a></li>
            <li><select name="forma" onchange="location = this.value;">
        <option selected disabled>customer</option>
        <option value="cname.php">Add</option>
            <option value="view.php">View</option>
    </select>
        </ul> 
</div>
</div>
</head> 
<style>
fieldset
{
  background-color:#CCC;
  max-width:500px;
  padding:16px;	
  border:2px solid green;
    -moz-border-radius:16px;
    -webkit-border-radius:16px;	
    border-radius:16px;	
}
.legend
{
  margin-bottom:0px;
  margin-left:90px;
}

body { font-size: 20px; }
input, select { font-size: 100%; }
</style>

<body>
    
    

<!-- $qsl="SELECT reg.*,cust.id FROM registration res, customer cust where reg.id=cust.id";
$result=mysqli_query($conn,$qsl);
while($row= mysqli_fetch_array($result))
  --><br>

    <label for="name"><center>customer Names</label>
            <select name="custname" onchange="getCustData(this.value);">
                <option value="">Select Customer</option>
                //populate value using php
                <?php
                    $sql= "SELECT * FROM registration"; 
                    $results=mysqli_query($conn, $sql);
                    //loop
                    foreach ($results as $regrecord){
                ?>
                        <option value="<?php echo $regrecord["id"]; ?>"><?php echo $regrecord["name"];?></option>
                <?php
                    }
                ?>
                
            </select><br><br>
                </center>
<form action="cname_a.php" method="post" enctype="multipart/form-data">
<div class="legend">
<fieldset>
       <legend>Enter Details</legend>
        <label>
        DOB:<input type="date" name="Dob" id="Dob" required="required"><br><br>
                </label>
      
	    <label>
         city:<input type="text" name="city" id="city" required="required"><br><br>
        </label>


        <label>
        state: <input type="text" name="state" id="state" required="required"><br><br>
        </label>


        <label>
        Email Id: <input type="email" name="email" id="email" required="required"><br><br>
        </label>


        <label>
        Mobile no.: <input type="tel" name="phone" id="phone" required="required"><br><br>
        </label>


                <label>
        zip code: <input type="text" name="zip_code" id="zip_code" required="required"><br><br>
        </label><br>
        <br>


        <label>
       Photo: <input type="file" name="fileToUpload" id="photo"><br><br>
       
                </label>


                <center>  <td><button type="button" name="add" id="add" class="btn btn-success" onclick="showExtrafields()"><i class="fa fa-plus"></i></button></td></center>
        
        <br><br>
        <div id="extraDiv" style="display:none">
      <label>
        Item code: <input type="text" name="item_code" id="item_code" style="display:inline"><br><br>
        </label>


        <label>
       Item Name: <input type="text" name="item_name"  id="item_name" style="display:inline"><br><br>
        </label> 


                 <label>
       Unit: <input type="number" name="unit" id="unit" style="display:inline"><br><br>
                </label>  

               

 
                <label>
     price: <input type="text" name="price" id="price" style="display:inline"><br><br>
                </label>

                  </div>
                <input type="hidden" name="customer_id" id="c_id"/>
             <center><input type="submit" value="submit" name="submit" onclick="return Validate()" ></center><br><br>
        </fieldset>
                </form>
</center>
<script type="text/javascript">
function getCustData(val){
  alert(val); 
  document.getElementById("c_id").value = val;
}
</script>
<script type="text/javascript">
        function Validate() {
           
            return true;
        }



        function showExtrafields(){
            document.getElementById("extraDiv").style.display="inline";
      }
    </script>










    <form align="right-margin" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>