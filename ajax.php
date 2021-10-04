<?php
include("db.php");
extract($_POST);
$user_id=$conn->real_escape_string($id);
$status=$conn->real_escape_string($status);
$query=$conn->query("UPDATE registration SET status='$status' WHERE id='$id'");
echo 1;
?>
