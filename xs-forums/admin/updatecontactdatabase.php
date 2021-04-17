<?php 
require_once("database.php");
if(!empty($_POST["email"])) 
{
	$email= $_POST["email"];
	$sql = "update tbl_contact set email='$email' where conid = 1";
	$query=mysqli_query($con,$sql);
}