
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
			  <th scope="col">about</th>
			  <th scope="col">regid</th>
			  <th scope="col">date</th>
			  <th scope="col">replay</th>
			  <th scope="col">adminid</th>
			 
			  
			</tr>
		  </thead>
		  <tbody>
	<?php
	$sql ="SELECT q.*, a.* from tbl_enq_cmp as q, tbl_enq_comp_ans as a where a.enqid = q.enqid order by a.enqansid desc";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			
			
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><?php echo $result['enqansid'];?></td>
			  <td  style='text-align:left;'><?php echo $result['about'];?></td>
			  <td style='text-align:left;'><?php echo $result['regid'];?></td>
			  <td><?php echo $result['date'];?></td>
			  <td><?php echo $result['about_enq_ans'];?></td>
			   <td><?php echo $result['adminid'];?></td>
  
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