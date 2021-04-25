


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="lugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form action="#recover-password.html" method="post">
        <div class="input-group mb-3">
          <input type="email" id='em' class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		  <span id='lb'></span>
        </div>
        <div class="input-group mb-3">
          <div class="col-12">
            <button id="otp" class="btn btn-primary btn-block" disabled>Get Otp</button>
          </div>
          <!-- /.col -->
        </div>
		<div class="input-group mb-3">
          <div class="col-8">
            <input type='text' id="eotp" class="form-control" placeholder='Enter Otp'></input>
          </div>
		  <div class="col-4">
            <button type='submit' id="verify" class="btn btn-success btn-block">Enter</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login.php">Login</a><br>
		<a href="register.php" class="text-center">Register a new membership</a>
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
$(document).ready(function(){
$('#em').change(function(){
$('#otp').prop('disabled',false);
});	
});

$(document).ready(function(){
$('#otp').click(function(){
	//$('#eotp, #verify').prop('disabled',false);
	var email = $('#em').val();
	$('#lb').html('An OTP have been send to the registered Email');
	$.ajax
	({
		
		url:'otpgen.php',
		data:{email:email},
		type:'post',
		success:function(data)
		{
			
			alert(data);
		}
	})
});
$('#verify').click(function(){
	var v = $('#eotp').val();
	$.ajax
	({
		type:'post',
		data:{v:v},
		url:'checkotp.php',
		
		success:function(data)
		{
			if(data == "success")
			{
				window.location.replace('forgot_password_type.php');
			}
			else
			{
				$('#otp').prop('disabled',true);
				$('#em').clear();
			}
			
		}
	})
	
	
});
});

</script>


</body>
</html>
