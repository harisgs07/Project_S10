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
<script>
$(document).ready(function(){
$('#em').change(function(){
$('#gotp').prop('disabled',false);
});	
});

$(document).ready(function(){
$('#gotp').click(function(){
	$('#eotp, #verify').prop('disabled',false);
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
				$('#change').prop('disabled',false);
			}
			else
			{
				$('#eotp, #verify, #change').prop('disabled',true);
				$('#em').clear();
			}
			
		}
	})
	
	
});
});

</script>

<body>
<!-- Modal HTML -->

<div id="myModalgetotp" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Update Password</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group">
				<i class="fa fa-paper-plane"></i>
				<input type="email" class="form-control" name="email" id='em' placeholder="Email Address" required="required">
					</div>
					<div class="form-group">
						<input type="button" name='gtp' id='gotp' class="btn btn-primary btn-block btn-lg" value="Generate OTP" disabled>
					</div>
					<div class="form-group">
					<span id=lb style='color:red;' disabled></span>
				<input type="text" class="form-control fa fa-lock" id="eotp" placeholder="Enter OTP" required="required" disabled>
					</div>
					<div class="form-group">
					<input type="button" name='gtep' id='verify' class="btn btn-primary btn-block btn-lg" value="verify" disabled>
					<input data-target="#myModalforgot" data-toggle="modal" data-dismiss="modal" type="button" name='ch' id='change' class="btn btn-primary btn-block btn-lg" value="Change Password" disabled>
						<!--<a href="#myModalforgot" data-toggle="modal" data-dismiss="modal">Change Password</a></p>-->
					</div>
					
				</form>								
			</div>
			<div class="modal-footer text-center">
        <p>Return to Login page: <a href="#myModalreg" data-toggle="modal" data-dismiss="modal">Signin</a></p>
      </div>
		</div>
	</div>
</div>    
</body>
</html>