<?php
include('db.php');
include("index.php");
?>
<section class="page-content">

                    <link rel="stylesheet" href="style1.css">
                <center>
                        <!-- <?php
                         if(isset($_GET['id']))
                         {
                            $query = "SELECT * FROM registration";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($query_run);
                            if(isset($_POST['update'])) // when click on Update button
                            {  
                                $name = $row['name'];
                                $email = $row['email'];
                                $edit = "UPDATE * FROM registration set name='$name', email='$email' Where id='$id'";
                            }}
?> -->
<?php
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `registration` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<input type="text" value="<?php echo $row['name']; ?>" name="name">
		<input type="text" value="<?php echo $row['email']; ?>" name="email">
		<input type="submit" name="submit">
		
	</form>
</body>
</html>