<?php
session_start();
$b1 = $_SESSION['kl'];
include('database.php');
foreach($_POST['ary'] as $a)
{
	$sql1 = "select * from tbl_store_share_file where stastus = '0' ";
	$qry1 = mysqli_query($con,$sql1);
	if(mysqli_num_rows($qry1)> 0 )
	{
			$b = $res1['fileid'];
			$sql = "insert into tbl_share(send_recp_id,recv_recp_id,fileid) values('4','$a','$b1')";
			$qry = mysqli_query($con,$sql);
	
	}

}
$sql = "update tbl_store_share_file set  stastus = '1' where stastus = '0' ";
$qry = mysqli_query($con,$sql);
?>