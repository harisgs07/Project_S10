
<?php

include('database.php');
if(isset($_POST['updates']))
{
	$pass = $_POST['password'];
	$password = md5($pass);
	$email = $_POST['email'];
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Recover Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
      <form onSubmit="return valid();" name ='updateform' method="post">
	  <div class="input-group mb-3">
          <input type="email" id='em' name='email' class="form-control" placeholder="Email"><?php echo $email;?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		  <span id='lb'></span>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control"   name="password" id='passwordidupdate' placeholder="New Password"  onBlur="validpassword()" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
			<span id="user-pass-status" style="font-size:12px;"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" id='update' name="updates" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


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
</body>
</html>
