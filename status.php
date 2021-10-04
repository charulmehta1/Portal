<?php
include('db.php');
include("index.php");
?>
<section class="page-content" align="center">
<link rel="stylesheet" href="style2.css"><br>
<table  class="table table-bordered table-striped">
  	<thead >
  		<tr class="btn-primary">
  			<th>SL.no</th>
  			<th>Name</th>
  			<th>Email</th>
  			<th>Status</th>

  		</tr>
  	</thead>
  	<tbody>
  		<?php 
                
          $query = "SELECT * FROM registration";  
          $query_run = mysqli_query($conn, $query);
          $row  = mysqli_fetch_array($query_run);
	  		foreach ($query_run as $key => $user) {

?>
				<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['name']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><i data="<?php echo $user['id'];?>" class="status_checks btn
				<?php echo ($user['status'])?
				'btn-success': 'btn-danger'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?>
			   </i></td>
				</tr>
				<?php } ?>
				</table>
				</body>
			  </html>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
      var status = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (status=='0')? 'Deactivate' : 'Activate';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        url = "ajax.php";
        $.ajax({
          type:"POST",
          url: url,
          data: {id:$(current_element).attr('data'),status:status},
          success: function(data)
          {   
            location.reload();
          }
        });
      }      
    });
	</script>

	</section>