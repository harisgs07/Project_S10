<?php
include('database.php');
if(isset($_POST['sb']))
{
	
	$move = "Uploads/";
	$a = $_FILES['storefile']['name'];
	$b = $move.$a;
	$type = pathinfo($b, PATHINFO_EXTENSION);
	$allowtype = array('pdf');
	if(in_array($type,$allowtype))
	{
		echo"<script>alert('No-way it is possible');</script>";
		 include('adminhome.php');
		echo "<script>$('.txt').load('fileupload.php');</script>";
	}
	else
	{
	move_uploaded_file($_FILES['storefile']['tmp_name'], $move.$a);
	
			$sql = "insert into tbl_file_stored_users (file,regid) values('$a','4')";
	 $query = mysqli_query($con,$sql);
	 include('adminhome.php');
	 echo "<script>$('.txt').load('fileupload.php');</script>";
	}
	
}
?>
<form method='POST' action='fileupload.php' enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name='storefile' class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
     <button style="font-size:15px;" type="submit" class="btn btn-outline-success" name='sb'  >Upload</button>
  </div>
  
</form>