<?php
include('database.php');
if(isset($_REQUEST['id']))
{
	
	$id=$_GET['id'];
	//$id=mysqli_real_escape_string($con,$_GET['id']);
    //echo "<script>alert('$id');</script>";
    mysqli_query($con,"update tbl_reg_users set verification='1' where regid='$id'");
    echo "<script>alert('Your account is verified....Please login to Continue'); </script>";
    header('location:login.php');			

}
?>






