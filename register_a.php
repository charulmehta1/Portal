<?php
extract($_POST);
include("db.php");
$sql=mysqli_query($conn,"SELECT * FROM registration where  name='$name', email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
        $query="INSERT INTO registration(name,email,password) VALUES ( '$name', '$email', 'md5($password)')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");

?>