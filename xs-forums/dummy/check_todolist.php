<?php
//session_start();
//$s = $_SESSION['id'];
	include('database.php');	
	//echo "<script>alert('".$s."');</script>";
	//echo "<script>alert('fdgdg');</script>";
	$about = $_POST['vals'];
	//echo "<script>alert('".$about."');</script>";
	//$gap = $_POST['gap'];
	//$rid = $_POST['rid'];
	//$prid = $_POST['prid'];
	
	$sql ="SELECT * from todolist where id='$about'";
	$query=mysqli_query($con,$sql);
	if(mysqli_num_rows($query)>0)
	{
		$r=mysqli_fetch_array($query);
		if ($r['check_check'] == 1)
		{
			$sql = "update todolist set check_check = '0' where id='$about'" ;
			mysqli_query($con,$sql);
			echo 'none';
		}
		else
		{
			$sql = "update todolist set check_check = '1' where id='$about'" ;
			mysqli_query($con,$sql);
			echo 'line-through';	
		}
	}
	
		
?>