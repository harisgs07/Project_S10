<?php
session_start();
	$s = $_SESSION['id'];
	include('database.php');
	$id=$_POST['vid'];
	$sql = "delete from tbl_prjct_file where prjfileid='$id'";
	$query= mysqli_query($con,$sql);
	
?>