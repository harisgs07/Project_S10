

<?php
include('database.php');

if(isset($_POST['signupdev']))
{
	$name = $_POST['username'];
	$phone = $_POST['phoneid'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$sql ="SELECT email FROM tbl_contact WHERE email='$email'";
		$query= mysqli_query($con,$sql);
		$results = mysqli_num_rows($query);
		if($results>0)
		{
			echo "<script>$('.txt').load('contactupdate.php');</script>";
		} 
		else
		{
			
			$sql="INSERT INTO  tbl_contact (name,email, phone , role) VALUES('$name','$email','$phone','$role')";
$query = mysqli_query($con,$sql);
if ($query)
{
	echo "<script>alert('Registration successfull. Now you can login');</script>";
	echo "<script>$('.txt').load('contactupdate.php');</script>";
	
}
else
{
	echo "<script>alert('Something went wrong. Please try again');</script>";
	echo "<script>$('.txt').load('contactupdate.php');</script>";
}
			
		}
	}
?>

<script>
function checkAvailabilityemail1() {
$("#loaderIcon").show();
jQuery.ajax({
url: "addnewcontactphp.php",

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
url: "phonenumber.php",

data:'phone='+$("#pid").val(),
type: "POST",
success:function(data){
$("#user-availability-statusa").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html lang="en">

<link rel="stylesheet" href='style.css' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>





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
		<h2>New Contact Us</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-row" style="margin-top:14px;">
				<i class="fa fa-user col-md-1" style="padding-top:8px;"></i>
				<input type="text" class="form-control col-md-10" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-row" style="margin-top:14px;">
				<i class="fa fa-paper-plane col-md-1" style="padding-top:8px;"></i>
				<input type="email" class="form-control col-md-10" id='emailid' name="email" onBlur="checkAvailabilityemail1()" placeholder="Email Address" required="required">
				<span id="user-availability-status" style="font-size:12px;"></span> 
        </div>
		<div class="form-row" style="margin-top:14px;">
				<i class="fa fa-phone col-md-1" style="padding-top:8px;"></i>
				<input type="text" class="form-control col-md-10" name="phoneid" id='pid' placeholder="PhoneNumber"  onBlur="validatingpassword1()"  required="required">	
				<span id="user-availability-statusa" name='yu' style="font-size:12px;"></span>
        </div>
		<div class="form-row" style="margin-top:14px;">
					<i class="fa fa-lock col-md-1" style="padding-top:8px;"></i>
				<input type="text" class="form-control col-md-10" name="role" placeholder="Role" required="required">
			
        </div>
      
		<div class="form-group" style="margin-top:12px;">
           <center> <button type="submit" id='submitdev' name='signupdev' class="btn btn-primary btn-lg">Add</button>
			</center>
		</div>
		</form>
</div>
</div>
</div>
</div>
</body>
</html>