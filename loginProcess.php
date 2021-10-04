<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'db.php';
    $sql=mysqli_query($conn,"SELECT * FROM registration where Email='$email' and Password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password'];
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>