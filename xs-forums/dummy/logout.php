<?php
session_start();
include('database.php');
$ido = $_SESSION['id'];
if($_SESSION['type'] == 'user')
{
$sql = "update tbl_account set stastus='offline' where regid='$ido'";
mysqli_query($con,$sql);
}
else
{
	$sql = "update tbl_cmpny_account set stastus='offline' where regid='$ido'";
mysqli_query($con,$sql);
}
session_destroy(); // destroy session
echo"<script>alert('sure! You want to exit?')</script>";
echo"<script>window.location.href='login.php'</script>";
?>