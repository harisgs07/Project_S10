<?php
session_start();
	$s = $_SESSION['id'];
	include('database.php');
	$name = $_POST['name'];
	$description = $_POST['description'];
	$stastus = $_POST['stastus'];
	$leader = $_POST['leader'];
	$email = $_POST['email'];
	$members = $_POST['members'];
	$sql = "INSERT INTO tbl_projects(name, description, stastus, Client_Email, leader, total_members, regid) VALUES ('$name','$description','$stastus',
	'$email','$leader','$members','$s')";
	$query= mysqli_query($con,$sql);
	
?>