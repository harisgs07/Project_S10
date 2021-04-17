<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html lang="en">

<link rel="stylesheet" href='style.css' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  
<style>

.content
{
	color:red;
	border-radius: 10px 10px 10px 10px;
	margin-top:70px;
	height: 88.5%;
	margin-left:217px;
	position: fixed;
	top: 0;
	left:0;
	overflow-x:scroll;
	font-size:10px;
	width:84%;
	background-color: #111;
	
}
.adminheader
{
	color:white;
	border-radius: 10px 10px 10px 10px;
	margin-top:5px;
	height: 10%;
	width: 84%;
	margin-left:216px;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;

}

.op1
{
	display:inline-block;
}

.op
{
	display:inline-block;
}

.txt
{
	margin-left:30px;
	margin-right:30px;
	margin-top:15px;
	width:1050px;
	font-size:16px;

	
}

</style>
</head><body>
<?php
session_start();
include('database.php');
if(!empty($_SESSION['admin']))
{	

?>
	<div class='op1' >
		<div >
			<?php
			include ('adminleftbar.php');
			?>
		</div>
	</div>
	

	<div class='op'>

<div class='adminheader'>
			<?php
		include ('header.php');
		?>
		</div>
		<div class='content'>
			<div class='txt' id='txt1'>
			
			<?php
			
			
//........... group Enabling/Disabling .........			
if(isset($_REQUEST['groupdisable']))
{
	$udisable=intval($_GET['groupdisable']);
	$sql ="update tbl_orgnl_group set stastus='invalid' where grpid='$udisable' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='invalid' where grpid='$udisable' ";
	$query1=mysqli_query($con,$sql1);
include('group.php');
}
if(isset($_REQUEST['groupenable']))
{
	$udisable=intval($_GET['groupenable']);
	$sql ="update tbl_orgnl_group set stastus='valid' where grpid='$udisable' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="select a.valid, a.regid from tbl_group g, tbl_account a where a.regid = g.regid and g.grpid='$udisable' ";
	$query1=mysqli_query($con,$sql1);
while($res = mysqli_fetch_array($query1))
{
	if($res['valid'] == 0)
	{		
		$a = $res['regid'];	
		$sql2 ="update tbl_group set regid_stastus='invalid' where regid='$a' and grpid='$udisable' ";
		$query2=mysqli_query($con,$sql2);
	}
	else
	{
		$a = $res['regid'];
		$sql2 ="update tbl_group set regid_stastus='valid' where regid='$a' and grpid='$udisable' ";
		$query2=mysqli_query($con,$sql2);
	}
}
include('group.php');
}
			
//........... Contact Update Enabling/Disabling .........			
if(isset($_REQUEST['contactdisable']))
{
	$udisable=intval($_GET['contactdisable']);
	$sql ="update tbl_contact set status='invalid' where conid='$udisable' ";
	$query=mysqli_query($con,$sql);
}
if(isset($_REQUEST['contactenable']))
{
	$udisable=intval($_GET['contactenable']);
	$sql ="update tbl_contact set status='valid' where conid='$udisable' ";
	$query=mysqli_query($con,$sql);
	include('adminhome.php');
include('contactupdate.php');
}

//.......... Register Users ............
if(isset($_REQUEST['userdisable']))
{
	$udisable=intval($_GET['userdisable']);
	$sql ="update tbl_account set valid='0' where acid='$udisable' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='invalid' where regid='$udisable' ";
	$query1=mysqli_query($con,$sql1);
	echo "<script>$('#tab').load('reguser.php');</script>";

}
if(isset($_REQUEST['userenable']))
{
	$uenable=intval($_GET['userenable']);
	$sql ="update tbl_account set valid='1' where acid='$uenable' ";
	$query=mysqli_query($con,$sql);
	$sql1 ="update tbl_group set regid_stastus='valid' where regid='$uenable' ";
	$query1=mysqli_query($con,$sql1);
	include('diff_reguser.php');
	//echo "<script>$('#home-tab').href.vall('#tab');</script>";
	}

//.......... company Users ............	
if(isset($_REQUEST['compenable']))
{
	$uenable=intval($_GET['compenable']);
	$sql ="update tbl_cmpny_account set valid='1' where compid='$uenable' ";
	$query=mysqli_query($con,$sql);
include('diff_reguser.php');
//echo "<script>$('.tab-content').load('company_dtls.php');</script>";
}

if(isset($_REQUEST['compdisable']))
{
	$udisable=intval($_GET['compdisable']);
	$sql ="update tbl_cmpny_account set valid='0' where compid='$udisable' ";
	$query=mysqli_query($con,$sql);
include('diff_reguser.php');
//echo "<script>$('.tab-content').load('company_dtls.php');</script>";
}
?>		
			</div>		
		</div>		
	</div>
	<?php
}
else
{
	header('location:index.php');
}
	?>
	<?php
		  include('addnewcontact.php');
		  include('sharefilemodal.php');
		  ?>
	</body>
	 