<?php	
include("database.php");	
if(isset($_REQUEST['fieldid']))
{
	$fieldid = intval($_GET['fieldid']);
	$sql ="select * from tbl_file_stored_users where fileid='$fieldid'";
$query=mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);
$a=$res['file'];
?>
<p><?php
header("location: Uploads/$a");
?>
</p>
<?php
}
?>