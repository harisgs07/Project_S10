<?php
session_start();
	$s = $_SESSION['id'];
	include('database.php');
	$id=$_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['about'];
	$stastus = $_POST['stastus'];
	$leader = $_POST['leaders'];
	$email = $_POST['cemail'];
	$members = $_POST['members'];
	$sql = "update tbl_projects set name='$name', description='$description', stastus='$stastus', 
	Client_Email='$email', leader='$leader', total_members='members' where prjctid='$id'";
	$query= mysqli_query($con,$sql);
	
?>