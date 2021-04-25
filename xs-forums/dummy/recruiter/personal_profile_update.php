<?php

$uid = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$username = $_POST['username'];
	include('database.php');
	$sql2 ="update tbl_account set name='$name', phone='$phone', username='$username' where regid=$uid";
	$query2=mysqli_query($con,$sql2);

?>