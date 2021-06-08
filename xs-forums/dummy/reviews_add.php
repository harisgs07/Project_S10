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
    //echo "<script>alert($gap);</script>";
    //echo "<script>alert('".date('y-m-d')."');</script>";
	//$rid = $_POST['rid'];
	//$prid = $_POST['prid'];
    $e = date('y-m-d');
	$sql = "INSERT INTO tbl_reviews (about_review,entr_date,whom_regid,by_who_regid,prjct) VALUES('$about','$e','$gap','$s',$prjctid)" ;
	mysqli_query($con,$sql);

?>