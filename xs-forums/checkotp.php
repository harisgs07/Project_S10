<?php
include('database.php');
$v = $_POST['v'];
$sql1 = "select * from otp_expiry where otp = '$v' order by id DESC LIMIT 1";
$qry1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($qry1)>0)
{
	echo "success";
}
else
{
	echo "failure";
}


?>