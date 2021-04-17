<?php
include('database.php');
$username = $_POST['username'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$email = $_POST['email'];
	$type = "company";
if(isset($_POST['signupdev']))
{
$sql="INSERT INTO  tbl_reg_users (email, password) VALUES('$email','$password')";
$query = mysqli_query($con,$sql);
$id = mysqli_insert_id($con);
$sql1="INSERT INTO  tbl_account (username, regid) VALUES('$username',$id)";
$query1 = mysqli_query($con,$sql1);
if ($query1)
{
	echo "<script>alert('Registration successfull. Now you can login');</script>";
	echo "<script type=text/javascript>window.location.href = index.php</script>";
}
else
{
	echo "<script>alert('Something went wrong. Please try again');</script>";
}}
else
{
	if(isset($_POST['signuprec']))
	{
	$sql="INSERT INTO  tbl_reg_users (email, password,type) VALUES('$email','$password','$type')";
$query = mysqli_query($con,$sql);
$id = mysqli_insert_id($con);
$sql1="INSERT INTO  tbl_cmpny_account (username, email, regid) VALUES('$username','$email','$id')";
$query1 = mysqli_query($con,$sql1);
if ($query)
{
	echo "<script>alert('Registration successfull. Now you can login');</script>";
	echo "<script type=text/javascript>window.location.href = index.php</script>";
}
else
{
	echo "<script>alert('Something went wrong. Please try again');</script>";
	}}
}
?>

<script>
function checkAvailabilityemail1() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check.php",

data:'email='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script>
function validatingpassword1() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check.php",

data:'pass='+$("#passwordid").val(),
type: "POST",
success:function(data){
$("#user-availability-statusa").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirm_password.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirm_password.focus();
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
<div id="myModalreg" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">XS-FORUM</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
<div class="signup-form">
    <form  method="post" name ='signup' onSubmit="return valid();">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
				<i class="fa fa-user"></i>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
				<i class="fa fa-paper-plane"></i>
				<input type="email" class="form-control" id='emailid' name="email" onBlur="checkAvailabilityemail1()" placeholder="Email Address" required="required">
				<span id="user-availability-status" style="font-size:12px;"></span> 
        </div>
		<div class="form-group">
				<i class="fa fa-lock"></i>
				<input type="text" class="form-control" name="password" id='passwordid' placeholder="Password"  onBlur="validatingpassword1()"  required="required">	
				<span id="user-availability-statusa" name='yu' style="font-size:12px;"></span>
        </div>
		<div class="form-group">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
           <center> <button type="submit" id='submitdev' name='signupdev' class="btn btn-primary btn-lg">Developer</button>
			<button type="submit" id='submitrec' name='signuprec' class="btn btn-primary btn-lg">Recruiter </button></center>
		</div>
    </form>
	<div class="text-center">Already have an account? <a href='#myModallog' data-dismiss='modal' data-toggle='modal'>Login here</a></div>
	<?php
	include('login.php');
	?>
</div>
</div>
</div>
</div>
</body>
</html>