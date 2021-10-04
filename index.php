
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
<body>
<section class="page-content">
<div class="signup-form">
    <form action="index.php" method="post" enctype="multipart/form-data">

		
            <?php
				session_start();
				include 'db.php';
				$id= $_SESSION["id"];
				$sql=mysqli_query($conn,"SELECT * FROM registration where id='$id'");
				$row  = mysqli_fetch_array($sql);
            ?>
            
            <h2><center><?php echo $_SESSION["name"] ?> Welcome</center></h2>
        <br>

		<p class="hint-text"><center><?php echo $_SESSION["email"] ?></center></p>
    </form>
	<form align="right-margin" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>
</body>
</html>
</section>