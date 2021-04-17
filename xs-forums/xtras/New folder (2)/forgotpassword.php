<?php
include('database.php');
$pass = $_POST['password'];
$password = md5($pass);
$email = $_POST['email'];
if(isset($_POST['updates']))
{
	$sql = "select * from tbl_reg_users where email='$email'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);
	if ($row>0)
		{
			$sql1="update tbl_reg_users set password='$password' where email='$email'";
			$query1 = mysqli_query($con,$sql1);
			echo "<script>alert('Updation successfull. Now you can login');</script>";
			echo "<script type=text/javascript>window.location.href = index.php</script>";
		}
	else
		{
			echo "<script>alert('Something went wrong. Please try again');</script>";
		}	
}

?>

<script>
function checkemail() {
$.ajax({
url: "check_forgot_pass.php",
data:'email='+$("#emailidupdate").val(),
type: "POST",
success:function(data1){
$("#user-status").html(data1);
},
error:function (){}
});

}
</script>
<script>
function validpassword() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_forgot_pass.php",
data:'pass='+$("#passwordidupdate").val(),
type: "POST",
success:function(data1){
$("#user-pass-status").html(data1);
},
error:function (){}
});
}
</script>

<script type="text/javascript">
function valid()
{
if(document.updateform.password.value!= document.updateform.confirm_password.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.updateform.confirm_password.focus();
return false;
}
return true;
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Sign up Form with Icons</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	div.modal-content
	{
		width:450px;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 10px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 10px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
<div id="myModalforgot" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">XS-FORUM</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
<div class="signup-form">
    <form  method="post" name ='updateform' onSubmit="return valid();">
		<h2>Update Password </h2>
		<p>create new password!</p>
		<hr>
        <div class="form-group">
				<i class="fa fa-paper-plane"></i>
				<input type="email" class="form-control" id='emailidupdate' name="email" onBlur="checkemail()" placeholder="Email Address" required="required">
				<span id="user-status" style="font-size:12px;"></span> 
        </div>
		<div class="form-group">
				<i class="fa fa-lock"></i>
				<input type="text" class="form-control" name="password" id='passwordidupdate' placeholder="New Password"  onBlur="validpassword()"  required="required">	
				<span id="user-pass-status" style="font-size:12px;"></span>
        </div>
		<div class="form-group">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			
        </div>
		<div class="form-group">
           <center> <button type="submit" id='update' name='updates' class="btn btn-primary btn-lg">Update Password</button>
			</center>
		</div>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>