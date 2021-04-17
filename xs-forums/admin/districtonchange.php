<?php
include('database.php');
if (! empty($_POST["state"])) {
    
    $stateid = $_POST["state"];
$sql1 = "select * from tbl_dist where stateid = '$stateid'";
$query1 = mysqli_query($con,$sql1);
while($res1 = mysqli_fetch_array($query1))
{
?>
<option value="<?php echo $res1["distid"]; ?>"><?php echo $res1["name"]; ?></option>
<?php
}
}
?>