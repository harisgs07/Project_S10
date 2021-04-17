<?php
include('database.php');
?>
	<div class="table-responsive"style="font-size:15px;">
	<div >
		<div style="float:right;" style="margin-right:100px; margin-top:-10px; ">
		<button style="font-size:15px;"  type="button" class="btn btn-outline-success" id='edit'>Edit</button>
		
			<button style="font-size:15px;" type="button" class="btn btn-outline-danger" id='submit' disabled >Submit</button>
			</div>
		</div>
	<table class="table table-hover table-dark table-lg" style="margin-top:5%;" border='1'>
		<caption class="top">List of users
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">sl.no</th>
			  <th scope="col">FileName</th>
			  <th scope="col">Name</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
	$sql ="SELECT * from tbl_file_stored_users";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><?php echo $result['fileid'];?></td>
			  <td  style='text-align:left;'><a href="showfile.php?fieldid=<?php echo htmlentities($result['fileid']);?>" target="_blank"> <?php echo $result['file'];?> </a></td>
			  <td style='text-align:left;'><?php echo $result['regid'];?></td>
			 <?php
			   }
			   ?>
			 </tr>
			<?php
		}
		
	?>

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