<?php 
require_once("database.php");
if(!empty($_POST["email"])) 
{
	$email= $_POST["email"];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) 
	{
		echo "error : You did not enter a valid email.";
		echo "<script>$('#update').prop('disabled',true);</script>";
		
	}
	else 
	{
		$sql ="SELECT email FROM admin_details WHERE email='$email'";
		$query= mysqli_query($con,$sql);
		$results = mysqli_fetch_array($query);
		if(!$results)
		{
			echo "<span style='color:red'> Email Not Exists .</span>";
			echo "<script>$('#update').prop('disabled',true);</script>";
		} 
		else
		{
			echo "<script>$('#update').prop('disabled',false);</script>";
		}
	}
}
if (!empty($_POST['pass']))
{
	$password = $_POST['pass'];
	$lcase = preg_match('@[a-z]@', $password);
	$ucase = preg_match('@[A-Z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$schar = preg_match('@[^\w]@', $password);
	if (!$lcase || !$ucase || !$number || !$schar || strlen($password)<8)
	{
		echo"<span style='color:red'> Enter Valid password .</span>";
		echo "<script>$('#passwordidupdate').focus();</script>";
	}
}
?>
