<?php
/*
	$s = $_SESSION['id'];*/
	include('database.php');
	$prid = $_POST['prid'];
	$id = $_POST['id'];
	$messages = $_POST['messages'];
	$sql = "INSERT INTO tbl_chat(chat, regid, grpid) VALUES ('$messages','$id',$prid)";
	$query= mysqli_query($con,$sql);
	
?>