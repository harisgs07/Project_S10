<?php
include('database.php');
if (isset($_POST['si']))
{
	$pass = $_POST['inputPassword4'];
	$passs = md5($pass);
$q = "insert into admin_details (`regid`, `username`, `email`, `password`, `firstname`, `secondname`, `address1`, `address2`, `city`, `state`, `zipcode`, `phone`, `alternateno`)
 values('2','harikrishnan','harisgs07@gmail.com','$passs','hari','r','chirakarthundiyil','puliyoor','2','1','689510','7012724158','9061129468')";
$query = mysqli_query($con,$q);

}

?>
