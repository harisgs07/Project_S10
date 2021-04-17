


<script>
function update_stastu(id,val)
	{
		var dev ='company';
		alert(id);
		var id = id;
		var val = val;
		$.ajax
		({
			type:"POST",
			url:"enable_disable.php",
			data : {id:id,val:val,dev1:dev1},	
			success:function(data){
			if(val == "Enabled")
			{
				alert('hari');
				$('#' + id).attr("class","btn btn-outline-danger");
				$('#' + id).html('Disabled');
				$('#' + id).attr("value","Disabled");
			}
			else
			{
				$('#' + id).attr("class","btn btn-outline-success");
				$('#' + id).html('Enabled');
				$('#' + id).attr("value","Enabled");
			}
			}
		})
	}
</script>





<?php
include('database.php');
?>
	<div class="table-responsive"style="font-size:15px;">
	<table class="table table-hover table-dark table-lg" style="margin-top:5%;" border='1'>
		<caption class="top">List of users
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">Sl.No</th>
			  <th scope="col">Representative Name</th>
			  <th scope="col">Company Name</th>
			  <th scope="col">Phone</th>
			  <th scope="col">About</th>
			  <th scope="col">Possition</th>
			  <th scope="col">Username</th>
			  <th scope="col">Email-Id</th>
			  <th scope="col">Valid</th>
			  <th scope="col">Stastus</th>
			  <th scope="col">Check</th>
			</tr>
		  </thead>
		  <tbody>
	<?php
	$sql ="SELECT * from tbl_cmpny_account LIMIT 9";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			//$_SESSION['d']= $result['acid'];
			
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><?php echo $result['compid'];?></td>
			  <td  style='text-align:left;'><?php echo $result['repname'];?></td>
			  <td style='text-align:left;'><?php echo $result['cname'];?></td>
			  <td><?php echo $result['phone'];?></td>
			  <td><?php echo $result['about'];?></td>
			   <td><?php echo $result['position'];?></td>
			   <td><?php echo $result['username'];?></td>
			   <td><?php echo $result['email'];?></td>
			   <td><?php echo $result['stastus'];?></td>
			   <td ><?php echo $result['valid'];?></td>
			   <td >
			   
			   
			   
			    <?php 
			   if ($result['valid']=='' || $result['valid']== 1 )
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['compid'];?> class="btn btn-outline-success" value="Enabled" onclick="update_stastu(<?php echo $result['compid'];?>,this.value)">Enabled</button>

			  <?php }
			   else
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['compid'];?> class="btn btn-outline-danger" value="Disabled" onclick="update_stastu(<?php echo $result['compid'];?>,this.value)">Disabled</button>
			   
			 </td>
			 <?php
			   }
			   ?>

			 
			  
			 </tr>
			<?php
		}
		
	}?>

		</tbody>
	</table>
	<div  aria-label="..." class="float-right">
  <ul style="margin-top:-50px; list-style-type: none; " >
    <li class="page-item disabled" style="float: left;">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item" style="float: left;"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" style="float: left;">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item" style="float: left;"><a class="page-link" href="#">3</a></li>
    <li class="page-item" style="float: left;">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</div>
</div>