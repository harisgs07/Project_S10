<?php
session_start();
include('database.php');
if(isset($_POST['replay']))
{
	
	$enqid = $_POST['id'];
	$id = $_SESSION['adminid'];
	$about = $_POST['replay'];
	$sql = "insert into tbl_enq_comp_ans (about_enq_ans,adminid,enqid) values('$about','$id','$enqid')";
	$a = mysqli_query($con,$sql);
	$sql = "update tbl_enq_cmp set status='0' where enqid='$enqid'";
	$a= mysqli_query($con,$sql);
	header('location:adminhome.php');
}
?>