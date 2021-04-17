

<script>
function update_stastus(id,val)
	{
		alert(val);
		var id = id;
		var dev ='group';
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
	<div class="table-responsive" style="font-size:15px;">
	<div >
		<div style="float:right;" style="margin-right:100px; margin-top:-10px; ">
		<button style="font-size:15px;"  type="button" class="btn btn-outline-success" id='edit'>Edit</button>
		
			<button style="font-size:15px;" type="button" class="btn btn-outline-danger" id='submit' disabled >Submit</button>
			</div>
		</div>
	<table class="table table-hover table-dark table-lg" style="margin-top:5%;" border='1'>
		<caption class="top">List of Groups
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th >sl.no</th>
			  <th >Group Name</th>
			  <th >Name of participants</th>
			  <th >Group Stastus</th>
			  <th >Users Status</th>
			  <th >check</th>
			</tr>
		  </thead>
	<?php
	$count = 0;
	$sql="SELECT * from tbl_orgnl_group ";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($r1=mysqli_fetch_array($query))
		{
			$a = $r1['grpid'];
			$sql1 ="SELECT * from tbl_group where grpid = '$a'";
			$query1=mysqli_query($con,$sql1);
			$result=mysqli_num_rows($query1);
			if($result <= 0)
			{
				//echo "<script>alert($a);</script>";
				continue;
			}
			else
			{
			$count = $count + 1;
			?>
			<tr  >
			
			 <td ><?php echo $count;?></td>
			<td><?php echo $r1['name'];?></td>

			  <td >
			  <table  border='1'>	
	<?php
	$a = $r1['grpid'];
	$sql2 ="SELECT a.username from tbl_account a, tbl_group g where a.regid=g.regid and g.grpid='$a'";
	$query2=mysqli_query($con,$sql2);
	$r2=mysqli_num_rows($query2);
	if($r2>0)
	{ 
		while($result1 = mysqli_fetch_array($query2))
		{
			
			?>
		<tr colspan="<?php echo $r2 ?>"> 
		<td><?php echo $result1['username'];?></td> </tr>
		<?php  
		}
	}
	?>
		</table>
			  
			  </td>
			   
			   <?php
			   $a = $r1['grpid'];
	$sql2 ="SELECT stastus from tbl_orgnl_group  where grpid='$a'";
	$query2=mysqli_query($con,$sql2);
	$r2=mysqli_fetch_array($query2);?>
			   <td ><?Php echo $r2['stastus'];?></td>
			  <td >
			   <table  border='1'>	
	<?php
	$a = $r1['grpid'];
	$sql2 ="SELECT regid_stastus from tbl_group where grpid='$a'";
	$query2=mysqli_query($con,$sql2);
	$r2=mysqli_num_rows($query2);
	if($r2>0)
	{ 
		while($result1 = mysqli_fetch_array($query2))
		{
			
			?>
		<tr colspan="<?php echo $r1 ?>"> 
		<td><?php echo $result1['regid_stastus'];?></td> </tr>
		<?php  
		}
	}
	?>
		</table>
			   </td>
			   <td>
			   <?php
			   $a = $r1['grpid'];
	$sql2 ="SELECT stastus from tbl_orgnl_group  where grpid='$a'";
	$query2=mysqli_query($con,$sql2);
	$r2=mysqli_fetch_array($query2);
			   if ($r2['stastus']=='valid' )
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $r1['grpid'];?> class="btn btn-outline-success" value="Enabled" onclick="update_stastus(<?php echo $r1['grpid'];?>,this.value)">Enabled</button>

			  <?php }
			   else
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $r1['grpid'];?> class="btn btn-outline-danger" value="Disabled" onclick="update_stastus(<?php echo $r1['grpid'];?>,this.value)">Disabled</button>
			   
			 </td>
			 <?php
			   }
			   ?>

			 </tr>
			<?php
			}
		}
		
	}?>

		
	
	</table>
	</div>