<?php
include('database.php');
$conid = $_POST['cr'];	
	$email  = $_POST['email'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];
$sql="update tbl_contact set email = '$email', phone = '$phone', role='$role' where conid = '$conid'";
$query = mysqli_query($con,$sql);
if ($query)
{
	echo "<script>alert('Registration successfull. Now you can login');</script>";
}
?>