<?php
session_start();
include('database.php');
if (isset($_SESSION['id'])){
  header('location:main.php');
}

if(isset($_POST['login']))
{
$email=$_POST['email'];
$pass=$_POST['password'];
$password = md5($pass);
$sql ="SELECT regid,email,type FROM tbl_reg_users WHERE email='$email' and password ='$password' and verification = '1'";
$query=mysqli_query($con,$sql);
$r=mysqli_num_rows($query);

	if($r > 0)
	{
		while($results=mysqli_fetch_array($query))
		{
			if($results['type'] == 'user')
			{
				$id = $results['regid'];
				$_SESSION['id'] = $results['regid'];
				//echo"<script>alert('".$_SESSION['id']."');</script>";
				
				$sql1 = "SELECT username FROM tbl_account WHERE regid=$id and valid='1'";
				$query1=mysqli_query($con,$sql1);
				$s = "update tbl_account set stastus='online' where regid='$id'";
				$q=mysqli_query($con,$s);
				$r1=mysqli_num_rows($query1);
				if($r1 > 0)
				{
					while($results1=mysqli_fetch_array($query1))
					{
            $_SESSION['log_in']='yes';
						$_SESSION['uname']=$results1['username'];
					}
				}
				else				
				{
					echo "<script>alert('Your Account Is Temporarly Unavailable or Blocked because of malicious act');</script>";
					echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
				}
			$_SESSION['login']=$results['regid'];
			$_SESSION['email']=$results['email'];
			$_SESSION['type'] = $results['type'];
				if ($results['type'] == 'user')
				{
				echo "<script type='text/javascript'> document.location = 'main.php'; </script>";
				}
			}
			else
			{
				$id = $results['regid'];
				$_SESSION['id'] = $results['regid'];
				
				$sql1 = "SELECT username FROM tbl_cmpny_account WHERE regid=$id and valid='1'";
				$query1=mysqli_query($con,$sql1);
				$s = "update tbl_cmpny_account set stastus='online' where regid='$id'";
				$q=mysqli_query($con,$s);
				$r1=mysqli_num_rows($query1);
				if($r1 > 0)
				{
					while($results1=mysqli_fetch_array($query1))
					{
						$_SESSION['uname']=$results1['username'];
					}
				}
				else
				{
					echo "<script>alert('Your Account Is Temporarly Unavailable or Blocked because of malicious act');</script>";
				}				
			$_SESSION['login']=$results['regid'];
			$_SESSION['email']=$results['email'];
				if ($results['type'] == 'company')
				{
				echo "<script type='text/javascript'> document.location = 'recruiter/recruiter_main.php'; </script>";
				}
			}
		} 
	}	
	else
	{
	  echo "<script>alert('Invalid Details/Account is Not verified');</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

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
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name='login' id='signin' class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot_password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
