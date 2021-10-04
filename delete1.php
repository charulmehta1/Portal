<?php
	$id=$_GET['id'];
	include('db.php');
	mysqli_query($conn,"delete from `registration` where id='$id'");
	header('location:detail.php');
?>