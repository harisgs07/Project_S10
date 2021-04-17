	<style>
	.g td
	{
		color:white;
		text-align:left;
	}
	</style>
	
	<div class="table-responsive"style="font-size:15px;">
	<table class="table table-hover table-dark table-lg" id="t"style="margin-top:2%;" border='1'>
	<h3 style='color:red;'>FeedBack View</h3>
	<form method='post'>
		<caption class="top">List of Contact Details
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">sl.no</th>
			  <th scope="col">Content</th>
			  <th scope="col">Date</th>
			  <th scope="col">username</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
		  include('database.php');
	$sql ="SELECT f.*, u.username from tbl_feedback f , tbl_account u where u.regid=f.regid order by f.date DESC";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{ 
		$count = 0;
		while($result = mysqli_fetch_array($query))
		{
			$count = $count + 1;
			?>
			<tr class='g' style='text-align:center;'>
			  <td style='text-align:center;'><?php echo $count;?></td>
			  <td ><?php echo $result['content'];?></td>
			  <td ><?php echo $result['date'];?></td>
			  <td ><?php echo $result['username'];?></td>
			 </tr>
			<?php			
		}
		$sql ="update tbl_feedback set displayed = 1 where displayed = 0";
	$query=mysqli_query($con,$sql);		
	}
	
	
?>
	 <tr><td>
		  
		  </td></tr>	
		  </tbody>
		 
		  
		  </form>
		  </table>
</div>