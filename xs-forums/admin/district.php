<?php
session_start();
include('database.php');
$a = $_SESSION['adminid'];
if(! empty($_POST["state"])) {
    
    $state = $_POST["state"];
	$city = $_POST['city'];
$sql1 = "select d.name, d.distid from tbl_dist d,tbl_state s where d.stateid = '$state' and d.stateid = s.stateid";
$query1 = mysqli_query($con,$sql1);
if(!empty($_POST["city"]))
{
	$sql = "select name from tbl_dist where distid = '$city'";
$query = mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);
	?>

<option selected disabled><?php echo $res['name']; ?></option>
<?php

}
else
{
	$sql = "select d.name from tbl_dist d, admin_details a where a.city = d.distid and a.regid = $a";
$query = mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);
	?>
	<option selected value="<?php echo $res1["distid"]; ?>"><?php echo $res['name']; ?></option>
	<?php
}
while($res1 = mysqli_fetch_array($query1))
{
?>
<option value="<?php echo $res1["distid"]; ?>"><?php echo $res1["name"]; ?></option>

<?php
}
}

else
{
	$sql1 = "select state, city from admin_details where regid='$a'";
$query1 = mysqli_query($con,$sql1);
$res1 = mysqli_fetch_array($query1);
$sid = $res1['state'];
$did = $res1['city'];
$sql = "select name from tbl_dist where distid = '$did'";
$query = mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);
	?>
<option selected disabled><?php echo $res['name']; ?></option>
<?php
$sql = "select name from tbl_dist where stateid = '$sid'";
$query = mysqli_query($con,$sql);
while($res = mysqli_fetch_array($query))
{
?>
<option value="<?php echo $res["distid"]; ?>"><?php echo $res["name"]; ?></option>

<?php	
}

}
	


?>