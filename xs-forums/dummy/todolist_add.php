<?php
session_start();
$s = $_SESSION['id'];
	include('database.php');	
	//echo "<script>alert('".$s."');</script>";
	//echo "<script>alert('fdgdg');</script>";
	$about = $_POST['about'];
	$prjctid = $_POST['vale'];
	//echo "<script>alert('".$about."');</script>";
	$gap = $_POST['gap'];
	//$rid = $_POST['rid'];
	//$prid = $_POST['prid'];
	$sql = "INSERT INTO todolist (about,last_date,regid,prjctid) VALUES('$about','$gap','$s',$prjctid)" ;
	mysqli_query($con,$sql);

?>