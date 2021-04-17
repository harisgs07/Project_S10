<?php
include('database.php');
if (!empty($_POST['confirmpassword']))
{
	if($_POST['password'] == $_POST['confirmpassword'])
	{
		$email = $_POST['email'];
$pass = $_POST['password']; 
$password = md5($pass);
$sql = "update admin_details set password = '$password' where email = '$email'";
mysqli_query($con,$sql);
echo"<span style='color:green; font-size:15px;'>Password Updated Succesfully !!!!</span>";
	}
	else
	{
		echo" error:<span style='color:red; font-size:15px;'> Password Entered is Miss Matched </span>";
	}
	
		
}
	else
	{
		
	$email = $_POST['email'];
	$sqli = "select password from admin_details where email ='$email'";
	$query = mysqli_query($con,$sqli);
	$res = mysqli_fetch_array($query);
	$pass = $_POST['password'];
	$password = md5($pass);
	if($password == $res['password'])
	{
		echo "<span style='color:red; font-size:14px;'> Used Password !!!!</span>";
		echo "<script>$('#passwordidupdate').focus();</script>";
	}
	else
	{
		$lcase = preg_match('@[a-z]@', $pass);
	$ucase = preg_match('@[A-Z]@', $pass);
	$number = preg_match('@[0-9]@', $pass);
	$schar = preg_match('@[^\w]@', $pass);
	if (!$lcase || !$ucase || !$number || !$schar || strlen($password)<8)
	{
		
		echo"<span style='color:red; font-size:12px; float:top;'> Enter Valid password !!!!</span>";
		echo "<script>$('#passwordidupdate').focus();</script>";
		
	}
	else
	{
		echo"<span style='color:green; font-size:14px;'> Valid password !!!!</span>";
	}
	}
		
	}



?>