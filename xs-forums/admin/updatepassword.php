<?php
session_start();
include('database.php');
$id = $_SESSION['adminid'];
$sql = "select email from admin_details where regid = '$id'";
$q = mysqli_query($con,$sql);
$res = mysqli_fetch_array($q);
?>
<script>
$('document').ready(function(){
	
	$('#passwordidupdate').blur(function(){
		var password = $('#passwordidupdate').val();
		var email = $('#email1').val();
		$.ajax({
		type:'POST',
		url:'updatepasswordajax.php',
		data:{email:email, password:password },
		success:function(result)
		{
			
			$('#userstatus').html(result);
			
		}
		
	})
		
	});
	
	
$('#update').click(function(){
	if($('#email1').val() == '' || $('#passwordidupdate').val() == '' ||  $('#confirm_password').val() == '')
	{
		alert('All Fields Should Be Filled Before Submission ');
	}
else
{	
	var email = $('#email1').val();
	var password = $('#passwordidupdate').val();
	var confirmpassword = $('#confirm_password').val();
	$.ajax({
		type:'POST',
		url:'updatepasswordajax.php',
		data:{email:email, password:password , confirmpassword:confirmpassword },
		success:function(result)
		{
			$('#passwordidupdate').val('');
			$('#confirm_password').val('');
			$('#pus').html(result);
			$('#userstatus').html('');
		}
		
	})
}
	
});
});
</script>

 <form method="post" name ='updateform' style="margin-left: 20%; margin-top:8%; ">
 <span id='pus' style='color:green;'></span>
		<h2>Update Password </h2>
		<h6><p>create new password!</p></h6>
		<div  style="padding-left:5%;">
        <div class="form-group row">
				<i class="fa fa-paper-plane " style="font-size: 20px; margin-top:5px;" ></i>
				<input type="text" readonly class="form-control-plaintext"  style="width: 80%; font-size:17px;  margin-left:2%; color:white;" border=0 id='email1' name="email" value='<?php echo $res['email'];?>' placeholder="Email Address" required="required" disabled>	 
        </div>
		<div class="form-group row">
				<i class="fa fa-lock" style="font-size: 25px; margin-top:5px;"></i>
				<input type="text" class="form-control" style="width: 80%; margin-left:1.5%; margin-bottom:-5px;" name="password" id='passwordidupdate' placeholder="New Password"  onBlur="validpassword()"  required="required">	
				
        </div>
		<span id="userstatus" style="font-size:8px; color:red;"></span>
		<div class="form-group row">
					<i class="fa fa-lock" style="font-size: 25px; margin-top:5px;"></i>
				<input type="text" style="width: 80%;  margin-left:1.5%;" class="form-control" name="confirm_password" id='confirm_password' placeholder="Confirm Password" required="required">
			
        </div>
		<div class="form-group">
            <button type='button' style="margin-left:1.5%; background-color:#918a8a;" id='update' name='updates' class="btn btn-primary btn-md" >Update Password</button>
			</div>
		</div>
    </form>