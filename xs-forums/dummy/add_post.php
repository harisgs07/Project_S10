<?php
session_start();
	$s = $_SESSION['id'];
	include('database.php');
	$name = $_POST['name'];
	$description = $_POST['description'];
	$question = $_POST['question'];
	$sql = "INSERT INTO tbl_post(regid,about) VALUES ('$s','$question')";
	$query= mysqli_query($con,$sql);
	
?>