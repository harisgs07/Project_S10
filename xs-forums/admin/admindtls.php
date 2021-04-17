
<?php
include('database.php');
?>
	<div class="table-responsive"style="font-size:15px;">
	<table class="table table-hover table-dark table-lg" style="margin-top:5%;" border='1'>
		<caption class="top">List of users
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">sl.no</th>
			  <th scope="col">Username</th>
			  <th scope="col">Email</th>
			  <th scope="col">Firstname</th>
			  <th scope="col">Secondname</th>
			  <th scope="col">Address1</th>
			  <th scope="col">Address2</th>
			  <th scope="col">City</th>
			  <th scope="col">State</th>
			  <th scope="col">Zipcode</th>
			  <th scope="col">Phone</th>
			  <th scope="col">AlternateNo</th>
			  <th scope="col">Stastus</th>
			</tr>
		  </thead>
		  <tbody>
	<?php
	$sql ="SELECT * from admin_details LIMIT 9";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{	
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><?php echo $result['regid'];?></td>
			  <td  style='text-align:left;'><?php echo $result['username'];?></td>
			  <td style='text-align:left;'><?php echo $result['email'];?></td>
			  <td><?php echo $result['firstname'];?></td>
			  <td><?php echo $result['secondname'];?></td>
			  <td><?php echo $result['address1'];?></td>
			  <td><?php echo $result['address2'];?></td>
			  <?php
	$distid = $result['city'];
	$s ="SELECT * from tbl_dist where distid='$distid'";
	$q=mysqli_query($con,$s);
	$re = mysqli_fetch_array($q);?>
	
	<td><?php echo $re['name']; ?></td>
	<?php
	$distid = $result['state'];
	$s ="SELECT * from tbl_state where stateid='$distid'";
	$q=mysqli_query($con,$s);
	$re = mysqli_fetch_array($q);?>
	<td><?php echo $re['name'];?></td>
	<td><?php echo $result['zipcode'];?></td>
	<td><?php echo $result['phone'];?></td>
	<td><?php echo $result['alternateno'];?></td>
	<td><?php echo $result['stastus'];?></td>
			</tr>
			<?php
		}
		
	}?>

		</tbody>
	
	</table>
	
</div>