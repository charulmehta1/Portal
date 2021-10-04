<?php

include_once "db.php"; // Using database connection file here

$reg_id = $_GET['reg_id']; // get id through query string
$intreg_id = intval($reg_id);

$qsl = mysqli_query($conn,"SELECT customer.Dob,customer.city,customer.state,registration.name,customer.reg_id
FROM customer
INNER JOIN registration ON customer.reg_id=$intreg_id"); // select query

$row = mysqli_fetch_assoc($qsl); // fetch data

if(isset($_POST['update'])) // when click on Update button
{ 
    $name = $_POST['name'];
    $Dob = $_POST['Dob'];
	$state=$_POST['state'];
    $city=$_POST['city'];
    $query = "UPDATE customer Set Dob='$Dob', state='$state', city='$city' Where reg_id=$intreg_id";
    $edit = mysqli_query($conn,$query);

    if(isset($_POST['edit']))
    {
        mysqli_close($conn); // Close connection
      
    }  
    else
    header("location:view.php"); 
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="name" Required>
  <input type="text" name="Dob" value="<?php echo $row['Dob'] ?>" placeholder="Dob" Required>
  <input type="text" name="state" value="<?php echo $row['state'] ?>" placeholder="state" Required>
  <input type="text" name="city" value="<?php echo $row['city'] ?>" placeholder="city" Required>
  <input type="submit" name="update" value="Update">
</form>