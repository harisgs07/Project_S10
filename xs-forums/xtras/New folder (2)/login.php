<?php
session_start();
include('database.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$pass=$_POST['password'];
$password = md5($pass);
$sql ="SELECT regid,email,type FROM tbl_reg_users WHERE email='$email' and password ='$password'";
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
				$s = "update tbl_account set stastus='online' where regid='$id'";
				$q=mysqli_query($con,$s);
				$sql1 = "SELECT username FROM tbl_account WHERE regid=$id";
				$query1=mysqli_query($con,$sql1);
				$r1=mysqli_num_rows($query1);
				if($r1 > 0)
				{
					while($results1=mysqli_fetch_array($query1))
					{
						$_SESSION['uname']=$results1['username'];
					}
				}		
			$_SESSION['login']=$results['regid'];
			$_SESSION['email']=$results['email'];
				if ($results['type'] == 'user')
				{
				echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
				}
			}
			else
			{
				$id = $results['regid'];
				$_SESSION['id'] = $results['regid'];
				$s = "update tbl_cmpny_account set stastus='online' where regid='$id'";
				$q=mysqli_query($con,$s);
				$sql1 = "SELECT username FROM tbl_cmpny_account WHERE regid=$id";
				$query1=mysqli_query($con,$sql1);
				$r1=mysqli_num_rows($query1);
				if($r1 > 0)
				{
					while($results1=mysqli_fetch_array($query1))
					{
						$_SESSION['uname']=$results1['username'];
					}
				}		
			$_SESSION['login']=$results['regid'];
			$_SESSION['email']=$results['email'];
				if ($results['type'] == 'company')
				{
				echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
				}
			}
		} 
	}	
	else
	{
	  echo "<script>alert('Invalid Details');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Elegant Modal Login Modal Form with Icons</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 
	.modal-login {
		color: #636363;
		width: 350px;
		margin: 30px auto;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>

</head>
<body>
<!-- Modal HTML -->

<div id="myModallog" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group">
				<i class="fa fa-paper-plane"></i>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" name='password' class="form-control" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" name='login' id='signin'class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>								
			</div>
			<div class="modal-footer text-center">
        <p>Don't have an account? <a href="#myModalreg" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#myModalforgot" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
		</div>
	</div>
</div>    
</body>
</html>