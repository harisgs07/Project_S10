<?php
$s = $_SESSION['id'];
	include('database.php');
	echo "<script>alert('".$prjctid."')</script>";
			$about = $_POST['about'];
			echo "<script>alert('".$about."')</script>";
			$gap = $_POST['gap'];
			//$rid = $_POST['rid'];
			//$prid = $_POST['prid'];
			$sql = "INSERT INTO todolist (about,gap,regid,prjctid) VALUES('$about',$gap,'$s',$prjctid)" ;
			mysqli_query($con,$sql);
		
	}
?>