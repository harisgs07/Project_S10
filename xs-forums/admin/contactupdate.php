


<script>

	$('#edits').click(function(){
		$('.input').prop('disabled', false);
		//$('#save1').prop('disabled', false);
		$('#edits').prop('disabled', true);
		
	});
	$('#addnew').click(function(){
		$('.input').prop('disabled', true);
	});
	$('#save1').click(function(){
		$('.input').prop('disabled', true);
		$('#edits').prop('disabled', false);
		//$('#save1').prop('disabled', true);
	});
	
	
	function update_email(conid,val)
	{
		var conid = conid;
		var email = val;
		$.ajax
		({
			type:"POST",
			url:"contactupdatesubmit.php",
			data : {conid:conid,email:email},	
			success:function(data){

			}
		})
	}
	function update_phone(conid,val)
	{
		var phone = val;
		$.ajax
		({
			
			url:"contactupdatesubmit.php",
			type:"POST",
			data : {conid:conid,phone:phone},
			success:function(data){
				
			}
		})
	}
	function update_role(conid,val)
	{
		var role = val;
		$.ajax
		({
			url:"contactupdatesubmit.php",
			type:"POST",
			data : {conid:conid,role:role},
			success:function(data){
				
			}
		})
	}
	
</script>
<script>
function update_stastus(id,val)
	{
		alert(id);
		var id = id;
		var dev ='contact';
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
	<div class="table-responsive"style="font-size:15px;">

	
	
		
		
	<table class="table table-hover table-dark table-lg" id="t"style="margin-top:5%;" border='1'>
	
	<form method='post'>
	<div >
		<div style="float:right;" style="margin-right:100px; margin-top:-10px; ">
		<button style="font-size:15px;"  type="button" class="btn btn-outline-success" id='edits'>Edit</button>
		<button style="font-size:15px;"  type="button" class="btn btn-outline-danger " id="save1" name='save' >Save</button>
		<button style="font-size:15px;"   class="btn btn-outline-success" id='addnew' data-target="#myModalreg" data-toggle="modal" >+Add New</button>
			</div>
		</div>
		<caption class="top">List of Contact Details
		</caption>
		  <thead>
			<tr style='text-align:center;'>
			  <th scope="col">sl.no</th>
			  <th scope="col">Name</th>
			  <th scope="col">Email</th>
			  <th scope="col">Phone</th>
			  <th scope="col">Role</th>
			  <th scope="col">Stastus</th>
			  <th scope="col">check</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
		  
	$sql ="SELECT * from tbl_contact";
	$query=mysqli_query($con,$sql);
	$r=mysqli_num_rows($query);
	if($r>0)
	{
		while($result = mysqli_fetch_array($query))
		{
			
			?>
			<tr class='g' style='text-align:center;'>
			
			 <td ><span id='po'><?php echo $result['conid'];?></span></td>
			  <td  style='text-align:left;'><?php echo $result['name'];?></td>
			  <td style='text-align:left; color:black;'><input class='input' type='text'  name='email' value='<?php echo $result['email'];?>' onchange="update_email(<?php echo $result['conid'];?>, this.value)" disabled></td>
			  <td style='text-align:left; color:black;'><input class='input' type='text' name='phone' value='<?php echo $result['phone'];?>'  onchange="update_phone(<?php echo $result['conid'];?>, this.value)" disabled></td>
			  <td style='text-align:left; color:black;'><input  class='input' type='text' name='role' value='<?php echo $result['role'];?>'  onchange="update_role(<?php echo $result['conid'];?>, this.value)" disabled></td>
			   <td><?php echo $result['status'];?></td>
			   <td >
			   
			   
			   
			   
			    <?php 
			   if ($result['status']=='valid' )
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['conid'];?> class="btn btn-outline-success" value="Enabled" onclick="update_stastus(<?php echo $result['conid'];?>,this.value)">Enabled</button>

			  <?php }
			   else
			   {
				   ?>
				   <button style="font-size:15px;"  type="button"  id=<?php echo $result['conid'];?> class="btn btn-outline-danger" value="Disabled" onclick="update_stastus(<?php echo $result['conid'];?>,this.value)">Disabled</button>
			   
			 </td>
			 <?php
			   }
			   ?>
			   
			   
			 </tr>
			<?php
			
			
		}
		
	}
?>
	 <tr><td>
		  
		  </td></tr>	
		  </tbody>
		 
		  
		  </form>
		  </table>
		  
</div>
