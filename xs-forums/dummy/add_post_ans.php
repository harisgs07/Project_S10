<?php
session_start();
	$s = $_SESSION['id'];
	include('database.php');
	$title = $_POST['title'];
	$pstid =$_POST['v'];
	$sql = "INSERT INTO tbl_post_ans(regid,about,postid) VALUES ('$s','$title',$pstid)";
	$query= mysqli_query($con,$sql);
	
?>