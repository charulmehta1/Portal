<?php
include_once 'db.php';
$sql = "DELETE FROM customer WHERE reg_id='" . $_GET["reg_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:view.php");
?>
