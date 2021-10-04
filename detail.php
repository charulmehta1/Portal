<?php
include('db.php');
include("index.php");
?>
<section class="page-content">

                    <link rel="stylesheet" href="style2.css">
                
                        <?php
                            $query = "SELECT * FROM registration";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                             echo '<h2><br><center>Total users: '.$row.'</center></h2>';
                                ?>
                            <table class="table">
                       <thead>
                        <tr>
                        <th>SL No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                             <?php
                            if ($query_run->num_rows > 0) {
                                $i=1;
                                while($row = $query_run->fetch_assoc())
                                { 
                                ?>
                                <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row['name'];?> </td><br>
                                <td><?php echo $row['email'];?> </td><br>
                                <td> <a href='edit1.php?id=<?php echo $row['id']; ?>'>edit</a>
                               <a href='delete1.php?id=<?php echo $row['id']; ?>'>delete</a>    
                                </tr>
                                <?php 
                                }}
                               ?>
                                  </table>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
</section>
<form align="right-margin" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
          
