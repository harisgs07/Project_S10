<?php 
require_once("database.php");
if(!empty($_POST["email"])) 
{
	$email= $_POST["email"];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) 
	{
		echo "error : <span style='color:red'>  You did not enter a valid email. </span>";
		echo "<script>$('#submitdev').prop('disabled',true);</script>";
		
	}
	else 
	{
		$sql ="SELECT email FROM tbl_contact WHERE email='$email'";
		$query= mysqli_query($con,$sql);
		$results = mysqli_fetch_array($query);
		if($results)
		{
			echo "<span style='color:red'> Email already exists .</span>";
			echo "<script>$('#submitdev').prop('disabled',true);</script>";
		} 
		else
		{
			
			echo "<span style='color:green'> Email available for Registration .</span>";
			echo "<script>$('#submitdev').prop('disabled',false);</script>";
			
		}
	}
}


?>