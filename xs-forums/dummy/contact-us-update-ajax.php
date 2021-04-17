<?php
	include('database.php');
	$id=$_POST['vid'];
	$msg = $_POST['msg'];
	$sql = "insert into tbl_enq_cmp (regid,about) values('$id','$msg')";
	$query= mysqli_query($con,$sql);
	
?>