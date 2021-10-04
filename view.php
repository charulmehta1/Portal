<?php
include('db.php');
?>
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
            <option value="#">View</option>
    </select>
        </ul> 
</div>
</div>
</head> 
<style>
body { font-size: 20px; }
input, select { font-size: 60%; }
</style>

<body>
<section class="page-content" align="center">
            <link rel="stylesheet" href="style2.css">
            <table class="table">
                       <thead>
                        <tr>
                            <center>
                        <th>ID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>state</th>
                            <th>city</th>
                            <th>Action</th>
                                </tr>
                                </thead> 
                                <tbody>
                                <?php
$sql = "SELECT customer.Dob,customer.city,customer.state,registration.name,customer.reg_id
FROM customer
INNER JOIN registration ON customer.reg_id=registration.id";
   $result=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_assoc($result))
                    
                                 {
                                     ?>
                                <tr>
                                    <td><?php echo $row['reg_id'];?></td><br>
                                <td><?php echo $row['name'];?> </td><br>
                                <td><?php echo $row['Dob'];?> </td><br>
                                <td><?php echo $row['state'];?> </td><br>
                                <td><?php echo $row['city'];?> </td><br>
                                
                                <td> <a href='view.php?id=<?php echo $row['reg_id']; ?>'>view</a> 
                            <a href='edit.php?reg_id=<?php echo $row['reg_id']; ?>'>edit</a>
                             <a href='delete-process.php?reg_id=<?php echo $row['reg_id']; ?>'>delete</a>    
                                </tr>
                                <?php 
                                }
                               ?>
                                  </table>
                                  <input type="hidden" name="customer_id" id="cust_id"/>
           
           
                                  <form align="right-margin" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
</form>
 <script type="text/javascript">
function getCustData(val){
  alert(val); 
  
  document.getElementById("cust_id").value = val;
}
</script>
</section>








