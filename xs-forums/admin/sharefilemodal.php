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
var ary = [];
function checking(val,id)
{
	
	if(jQuery.inArray(id,ary) == -1)
	{
		ary.push(id);
	}
	else
	{
		ary = jQuery.grep(ary, function(value){
			
			return value != id;
		});
		//alert(ary);
	}
}
$('document').ready(function(){
	$('#sb').click(function(){
		var send_id = $('#sb').val();
		var b = JSON.stringify(ary);
		alert("Message Have been send to the recipients");
		$.ajax({
            url: 'send.php',
            type: 'post',
            data: {ary : ary},
			cache: false,
            
            success: function(data){
            }
            
        })
	});
	
});

</script>


<!-- Modal HTML -->

<div id="myModalselect" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			<form class="form-inline col-sm-12" method = 'post'>
			
				
    
	
	<?php
	
	include('database.php');
	$sql = "select * from tbl_account";
	$qry = mysqli_query($con,$sql);
	if(mysqli_num_rows($qry)>0)
	{
		while($res=mysqli_fetch_array($qry))
		{
			?>
		<div >
			<input type="checkbox" id="<?php echo $res['regid'];?>" value='<?php echo $res['username'];?>' required="required" onclick='checking(this.value,this.id)'><?php echo $res['username'];?></input>
			</div>
			
		<?php
		}
	}
	else
	{
		echo "No Registered Candidates Available";
	}
	
			
		
	
	?>
	
  </form>
  <div class="form-group">
  <label class="checkbox-inline col-sm-12"><input type="checkbox" required="required"> Select ALl</label>
  </div>
  <div class="form-group">
			<button style="font-size:15px;" type="submit" class="btn btn-outline-success" id='sb' value="<?php echo $_SESSION['adminid'];?>" data-dismiss="modal" aria-hidden="true">SEND</button>
			</div>
  
  </div>
  <!--<div class='form-inline'>
			<input class="form-control col-sm-2" type="text" placeholder="Search" id="stxt" ></input>	
			<button class="form-control col-sm-2" type="submit" id='search' data-toggle="tab"  href="#grpsearch" role="tab" name='bb'>Search</button></div>-->
			
			
			
			<div class="modal-footer text-center">
        <p>Don't have an account? <a href="#myModalreg" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#myModalgetotp" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
		</div>
	</div>
</div>    

</html>