<?php
include("database.php");
$user_id=$_POST['id'];
if($_POST['dev'] == 'developer')
{
	if($_POST['val1'] == 'Enabled')
	{
		$sql ="update tbl_account set valid='0' where acid='$user_id' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='invalid' where regid='$user_id' ";
	$query1=mysqli_query($con,$sql1);
	}

	else
	{
		$sql ="update tbl_account set valid='1' where acid='$user_id' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='valid' where regid='$user_id' ";
	$query1=mysqli_query($con,$sql1);
		
	}
}
if($_POST['dev1']=='company')
{
	
	if($_POST['val'] == 'Enabled')
	{
		$sql ="update tbl_cmpny_account set valid='1' where compid='$user_id' ";
	$query=mysqli_query($con,$sql);
	//echo "<script>$('.tab-content').load('company_dtls.php');</script>";
	}

	else
	{
		$sql ="update tbl_cmpny_account set valid='0' where compid='$user_id' ";
	$query=mysqli_query($con,$sql);
	//echo "<script>$('.tab-content').load('company_dtls.php');</script>";
	}
}


if($_POST['dev']=='group')
{
	if($_POST['val1'] == 'Enabled')
	{
		$sql ="update tbl_orgnl_group set stastus='invalid' where grpid='$user_id' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='invalid' where grpid='$user_id' ";
	$query1=mysqli_query($con,$sql1);
	}

	else
	{
		$sql ="update tbl_orgnl_group set stastus='valid' where grpid='$user_id' ";
		$query=mysqli_query($con,$sql);
		$sql1 ="select a.valid, a.regid from tbl_group g, tbl_account a where a.regid = g.regid and g.grpid='$user_id' ";
		$query1=mysqli_query($con,$sql1);
	while($res = mysqli_fetch_array($query1))
	{
		if($res['valid'] == 0)
		{
			
			$a = $res['regid'];
			$sql2 ="update tbl_group set regid_stastus='invalid' where regid='$a' and grpid='$user_id' ";
			$query2=mysqli_query($con,$sql2);
		}
		else
		{
			$a = $res['regid'];
			$sql2 ="update tbl_group set regid_stastus='valid' where regid='$a' and grpid='$user_id' ";
			$query2=mysqli_query($con,$sql2);
		}
	}	
}

}



if($_POST['dev']=='contact')
{
	
	if($_POST['val1'] == 'Enabled')
	{
		$sql ="update tbl_contact set status='invalid' where conid='$user_id' ";
		$query=mysqli_query($con,$sql);
	}

	else
	{
		$sql ="update tbl_contact set status='valid' where conid='$user_id' ";
$query=mysqli_query($con,$sql);
	}
}


if($_POST['de'] == 'groupsearch')
{
	if($_POST['va'] == 'Enabled')
	{
		$sql ="update tbl_orgnl_group set stastus='invalid' where grpid='$user_id' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='invalid' where grpid='$user_id' ";
	$query1=mysqli_query($con,$sql1);
	}

	else
	{
		$sql ="update tbl_orgnl_group set stastus='valid' where grpid='$user_id' ";
		$query=mysqli_query($con,$sql);
		$sql1 ="select a.valid, a.regid from tbl_group g, tbl_account a where a.regid = g.regid and g.grpid='$user_id' ";
		$query1=mysqli_query($con,$sql1);
	while($res = mysqli_fetch_array($query1))
	{
		if($res['valid'] == 0)
		{
			
			$a = $res['regid'];
			$sql2 ="update tbl_group set regid_stastus='invalid' where regid='$a' and grpid='$user_id' ";
			$query2=mysqli_query($con,$sql2);
		}
		else
		{
			$a = $res['regid'];
			$sql2 ="update tbl_group set regid_stastus='valid' where regid='$a' and grpid='$user_id' ";
			$query2=mysqli_query($con,$sql2);
		}
	}	
}

}

?>