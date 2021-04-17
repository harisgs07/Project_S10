<?php 
session_start();
require_once("database.php");
if(!empty($_POST["email"])) 
{
	$email= $_POST["email"];
	$firstname = $_POST["firstname"];
	$secondname = $_POST["secondname"];
	$address1 = $_POST["address1"];
	$address2 = $_POST["address2"];
	$phone = $_POST["phone"];
	$alterno = $_POST["alternateno"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zipcode = $_POST["zipcode"];
	$id = $_SESSION['adminid'];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) 
	{
		echo "error : <span style='color:red'>  You did not enter a valid email. </span>";
		
	}
	else
	{
		if (empty($state) and empty($city) )
		{
			$sql = "update admin_details set phone='$phone',email='$email', firstname ='$firstname', secondname='$secondname' , address1='$address1' , address2='$address2' , 
            alternateno='$alterno' , zipcode = '$zipcode'	where regid = '$id'";
			$query=mysqli_query($con,$sql);
			echo "<span style='color:green'> Profile Updated Succesfully !!..</span>";
		}
		else
		{
		if(empty($state))
		{
			$sql = "update admin_details set phone='$phone',email='$email', firstname ='$firstname', secondname='$secondname' , address1='$address1' , address2='$address2' , 
            alternateno='$alterno' , city='$city' , zipcode = '$zipcode'	where regid = '$id'";
			$query=mysqli_query($con,$sql);
			echo "<span style='color:green'> Profile Updated Succesfully !!..</span>";
		}
		elseif (empty($city))
		{
			$sql = "update admin_details set phone='$phone',email='$email', firstname ='$firstname', secondname='$secondname' , address1='$address1' , address2='$address2' , 
            alternateno='$alterno', state='$state' , zipcode = '$zipcode'	where regid = '$id'";
			$query=mysqli_query($con,$sql);
			echo "<span style='color:green'> Profile Updated Succesfully !!..</span>";
		}
		else
		{
			$sql = "update admin_details set phone='$phone',email='$email', firstname ='$firstname', secondname='$secondname' , address1='$address1' , address2='$address2' , 
            alternateno='$alterno' , city='$city', state='$state' , zipcode = '$zipcode'	where regid = '$id'";
			$query=mysqli_query($con,$sql);
			echo "<span style='color:green'> Profile Updated Succesfully !!..</span>";
		}
		}
	
	}
}