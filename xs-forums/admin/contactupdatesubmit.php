<?php
include('database.php');
echo "<script>alert('fggf');</script>";
if(isset($_POST['email']))
{
	
	$id = $_POST['conid'];
	$email = $_POST['email'];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) 
	{
		echo "error : <span style='color:red'>  You did not enter a valid email. </span>";
		
	}
	else
	{
	$sql = "update tbl_contact set email='$email',phone='$phone', role='$role' where conid='$id'";
	mysqli_query($con,$sql);
	}	
	
}

elseif($_POST['phone'])
{
	$id = $_POST['conid'];
	$phone = $_POST['phone'];
	if(preg_match("/^[6-9]{1}[0-9]{9}$/", $phone)) 
	{
	$sql = "update tbl_contact set phone='$phone' where conid='$id'";
	mysqli_query($con,$sql);
	}
	else
	{
		echo "<script>alert('error :  Invalid Phone Number.');</script>";
	}
	
}

elseif($_POST['role'])
{
	$id = $_POST['conid'];
	$role = $_POST['role'];
	if (!empty($_POST['role']))
	{
	$password = $_POST['name'];
	$lcase = preg_match('@[a-z]@', $password);
	$ucase = preg_match('@[A-Z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$schar = preg_match('@[^\w]@', $password);
		if ($number || $schar)
		{
		echo"<span style='color:red; font-size:13px;'>Role Should Not contain any special char .</span>";
		}
		else
		{	
		$sql = "update tbl_contact set role='$role' where conid='$id'";
		mysqli_query($con,$sql);
		}
	}
	else
	{
	echo"<span style='color:red; font-size:13px;'> Role Is Required .</span>";
	}		
}
	
	
?>