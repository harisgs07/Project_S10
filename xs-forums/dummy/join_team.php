 <?php
 session_start();
 include('database.php');			
	$pid = $_POST['pid'];
	$s=$_SESSION['id'];
	//echo "<script>alert('".$s."')</script>";
	//echo "<script>alert('".$pid."')</script>";
	$sql ="insert into tbl_group(regid,prjctid) VALUES ('$s',$pid)";
	$query=mysqli_query($con,$sql);
	$res=mysqli_fetch_array($query);	

?>
 