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
	
	$sql ="SELECT * from tbl_group LIMIT 9";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			$_SESSION['d']= $result['acid'];
			
			?>
			<tr  >
			
			 <td ><?php echo $result['groupid'];?></td>
			  <td  style='text-align:left;'><?php echo $result['name'];?></td>
			  <td style='text-align:left; vertical-align:center;'><?php echo $result['name'];?></td>
			  <td >
			  <table  border='1'>	
	<?php
	$a = $result['groupid'];
	$sql1 ="SELECT a.name from tbl_account as a, tbl_group as g where a.regid=g.regid and g.groupid='$a'";
	$query1=mysqli_query($con,$sql1);
	$r1=mysqli_num_rows($query1);
	if($r1>0)
	{
		while($result1 = mysqli_fetch_array($query1))
		{
			
			?>
		<tr colspan=2> 
		<td><?php echo $result1['name'];?></td> </tr>
		<?php  
		}
	}
	?>
		</table>
			  
			  </td>
			   <td ><?php echo $result['grp_stastus'];?></td>
			   <td >
			   <?php 
			   if ($result['valid']=='' || $result['valid']== 1 )
			   {
				   ?>
					<a href="#?userdisable=<?php echo htmlentities($result['acid']);?>" onclick="return confirm('Do you really want to Disable')"  ><span id=ll style='color:red;' disabled>Enabled </span></a>
			  <?php }
			   else
			   {
				   ?>
				   <a href="#?userenable=<?php echo htmlentities($result['acid']);?>" onclick="return confirm('Do you really want to Enable')"  ><span style='color:red;' disabled> Disabled</span></a>
			   
			 
			 <?php
			   }
			   ?></td>
			 </tr>
			<?php
		}
		
	}?>

		
	
	</table>
	</div>