<?php

$s = $_SESSION['id'];
//echo "<script>alert('".$prjctid."')</script>";
include('database.php');
if(isset($_POST['sb']))
{
	$about = $_POST['about'];
	$move = "Uploads/";
	$a = $_FILES['storefile']['name'];
	$b = $move.$a;
	$type = pathinfo($b, PATHINFO_EXTENSION);
	$allowtype = array('jif');
	if(in_array($type,$allowtype))
	{
		echo"<script>alert('No-way it is possible');</script>";
		
	}
	else
	{
	move_uploaded_file($_FILES['storefile']['tmp_name'], $move.$a);
	
			$sql = "INSERT INTO tbl_prjct_file(file, about, regid, prjctid) VALUES ('$a','$about','$s',$prjctid)";	
			$query = mysqli_query($con,$sql);
			
	 
	}
	
}
?>
<form method='POST' action='#' enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name='storefile' class="form-control-file" id="exampleFormControlFile1">
  </div>
   <div class="form-group">
    <label for="exampleFormControlDesc">Description</label>
    <input type="text" name='about' class="form-control" id="exampleFormControlDesc">
  </div>
  <div class="form-group">
     <button style="font-size:15px;" type="submit" class="btn btn-outline-success" name='sb'  >Upload</button>
  </div>
  
</form>