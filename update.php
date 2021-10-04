<?php
	include('db.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"update `registration` set name='$name', email='$email' where id='$id'");
	header('location:detail.php');
?>