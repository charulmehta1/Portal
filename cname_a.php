<?php
extract($_POST);
include("db.php");
if(isset($_POST['submit']))
{
$customer =$_POST['customer_id'];

 $qsl="INSERT INTO customer(reg_id, Dob, city, state, phone, zip_code, item_code, item_name, unit, price) VALUES 
 ('$customer', '$Dob', '$city', '$state', '$phone', '$zip_code', '$item_code', '$item_name', '$unit', '$price')"; 
 $sql=mysqli_query($conn,$qsl)or die("Could Not Perform the Query"); 
 header("location:view.php?id=$customer");}  ?>

  