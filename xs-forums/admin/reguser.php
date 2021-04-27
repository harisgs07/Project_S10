

<script>
function update_stastus(id,val)
	{
		//alert(val);
		var id = id;
		var dev ='developer';
		var val1 = val;
		$.ajax
		({
			type:"POST",
			url:"enable_disable.php",
			data : {id:id,val1:val1,dev:dev},	
			success:function(data){
			if(val1 == "Enabled")
			{
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


	<div class="table-responsive"style="font-size:15px;" disabled>
	<table class="table table-hover table-dark table-lg" style="margin-top:5%;" border='1'>
		<caption class="top">List of users
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">sl.no</th>
			  <th scope="col">Name</th>
			  <th scope="col">Username</th>
			  <th scope="col">Phone</th>
			  <th scope="col">About</th>
			  <th scope="col">Stastus</th>
			  <th scope="col">check</th>
			</tr>
		  </thead>
		  <tbody>
	<?php
	$sql ="SELECT * from tbl_account LIMIT 9";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			$_SESSION['d']= $result['acid'];
			
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><?php echo $result['acid'];?></td>
			  <td  style='text-align:left;'><?php echo $result['name'];?></td>
			  <td style='text-align:left;'><?php echo $result['username'];?></td>
			  <td><?php echo $result['phone'];?></td>
			  <td><?php echo $result['about'];?></td>
			   <td><?php echo $result['stastus'];?></td>
			   <td >
			   
			   <?php 
			   if ($result['valid']=='' || $result['valid']== 1 )
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['acid'];?> class="btn btn-outline-success" value="Enabled" onclick="update_stastus(<?php echo $result['acid'];?>,this.value)">Enabled</button>

			  <?php }
			   else
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['acid'];?> class="btn btn-outline-danger" value="Disabled" onclick="update_stastus(<?php echo $result['acid'];?>,this.value)">Disabled</button>	   
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
	<!--<div>
		<div>
			<ul  style="list-style-type: none;  ">
			<li style="float: left; border-radius:50px 5px 5px 5px; " >
      <span class="page-link"><< Previous</span>
    </li>
	<li  style="float: left;">
      <span class="page-link">1</span>
    </li>
	<li  style="float: left;">
      <span class="page-link">2</span>
    </li>
	<li  style="float: left;">
      <span class="page-link">3</span>
    </li>
	<li  style="float: left;">
      <span class="page-link border-radius:50px 5px 5px 5px;">Next>></span>
    </li>
	
			</ul>
		</div>
	
	</div>-->
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