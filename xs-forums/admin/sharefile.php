
<?php
session_start();
include('database.php');
if(isset($_POST['sb1']))
{
	
	$move = "Uploads/";
	$a = $_FILES['storefile']['name'];
	$b = $move.$a;
	$type = pathinfo($b, PATHINFO_EXTENSION);
	$allowtype = array('mp4');
	if(in_array($type,$allowtype))
	{
		echo"<script>alert('No-way it is possible');</script>";
		 include('adminhome.php');
		echo "<script>$('.txt').load('sharefile.php');</script>";
	}
	else
	{
	move_uploaded_file($_FILES['storefile']['tmp_name'], $move.$a);
	$sql = "delete from tbl_store_share_file where stastus = '0' ";
	 $query = mysqli_query($con,$sql);
	 
	 $sql = "insert into tbl_store_share_file (file) values ('$a') ";
	 $query = mysqli_query($con,$sql);
	 $_SESSION['kl'] = mysqli_insert_id($con);
	 
	 include('adminhome.php');
	 echo "<script>$('.txt').load('sharefile.php');</script>";
	}
	
}
?>
<form method='POST' action='sharefile.php' enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name='storefile' class="form-control-file" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group">
     <button style="font-size:15px;" type="submit" class="btn btn-outline-success" name='sb1'  >Click Here To Confirm</button>
  </div>
  <div class="form-group" id='hj' >
         <a class="nav-link" id="profile-tab" data-target="#myModalselect" data-toggle="modal" href="#repname" role="tab" aria-controls="profile" aria-selected="false">Choose Recipients</a>
  </div>
</form>

