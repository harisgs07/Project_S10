<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'auth-recovery/vendor/autoload.php';

$success = "";
$error_message = "";
include('database.php');

function sendVerification($email,$id)
	{
		
	
		$message_body = "Please confirm your account registration by clicking the button or link below: <a href='http://localhost/xs-forums/dummy/verification_email.php?id=$id'>
    http://127.0.0.1/php/verification_email.php?id=$id</a>";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 587;
		$mail->Username = 'harikrishnanrc@mca.ajce.in';
		$mail->Password = 'ambilyradha';     
		$mail->Host     =  'smtp.gmail.com;';
		$mail->Mailer   = "smtp";
		$mail->SetFrom("harikrishnanrc@mca.ajce.in", "AMIN");
		$mail->AddAddress($email);
		$mail->Subject = "Verifying The Account";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		if(!$result)
		{
			echo"Mailer Error :".$mail->ErrorInfo;
		}
		else
		{
			return $result;
		}
		
	}

$msg="";
if(isset($_POST['signupdev']))
{
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$email = $_POST['email'];

$sql="INSERT INTO  tbl_reg_users (email, password,type) VALUES('$email','$password','user')";
$query = mysqli_query($con,$sql);
$id = mysqli_insert_id($con);
$sql1="INSERT INTO  tbl_account (username, regid) VALUES('$username',$id)";
$query1 = mysqli_query($con,$sql1);
  if ($query1)
  {	

    $mail_status = sendVerification($email,$id);
		echo $error_message;
    if($mail_status == 1) 
			{
				$success="Check Your Email For The Link to activate your account !!!";
					echo "<script>alert($success)</script>";
				}
    //$mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://127.0.0.1/php/email_verification/verification_email.php?id=$verification_id'>
    //http://127.0.0.1/php/email_verification/verification_email.php?id=$verification_id</a>";
    //echo "<script>alert('Successfully Registered');</script>";	
    //header('location:login.php');
  }
  else
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
else
{
	if(isset($_POST['signuprec']))
	{
		$username = $_POST['username'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$email = $_POST['email'];
		
	$sql="INSERT INTO  tbl_reg_users (email, password,type) VALUES('$email','$password','company')";
$query = mysqli_query($con,$sql);
$id = mysqli_insert_id($con);
$sql1="INSERT INTO  tbl_cmpny_account (username, email, regid) VALUES('$username','$email','$id')";
$query1 = mysqli_query($con,$sql1);
    if ($query1)
    {
      $mail_status = sendVerification($email,$id);
		echo $error_message;
    if($mail_status == 1) 
			{
				$success="Check Your Email For The Link to activate your account !!!";
				echo "<script>alert($success)</script>";
				}
			
      
     // $mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://127.0.0.1/php/email_verification/verification_email.php?id=$verification_id'>
     // http://127.0.0.1/php/email_verification/verification_email.php?id=$verification_id</a>";
      //echo "<script>alert('Successfully Registered');</script>";	
      //header('location:login.php');
      
    }
    else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
	}
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS-FORUM | Registration Page </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>XS-FORUM</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form onSubmit="return valid();" name ='signup' method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="emailid" class="form-control" onBlur="checkAvailabilityemail1()" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="" class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		<span id="user-availability-status" style="font-size:12px;"></span> 

		<span id="user-availability-status" style="font-size:10px;"></span> 
        <div class="input-group mb-3">
          <input type="password" name="password" id="passwordid" class="form-control" onBlur="validatingpassword1()" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
			<span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		<span id="user-availability-statusa" style="font-size:12px;"></span> 
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="text-center">
        <button type='submit' name='signupdev' id='submitdev' class="btn btn-block btn-primary">
          <i class="fab fa-user mr-2"></i>
          Sign up as Developer
        </button>
        <button type='submit' id='submitrec' name='signuprec' class="btn btn-block btn-danger">
          <i class="fab fa-user mr-2"></i>
          Sign up as Recruiter
        </button>
      </div>
      </form>


      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
