<?php
//$about = $_POST['about'];
$s = $_SESSION['id'];
//echo "<script>alert('".$prjctid."')</script>";
include('database.php');
if(isset($_POST['sb']))
{
$about = $_POST['about'];
// Configure upload directory and allowed file types
$upload_dir = 'Uploads'.DIRECTORY_SEPARATOR;
$allowed_types = array('jpg', 'png', 'jpeg', 'gif','pdf','txt','sql');
  
// Define maxsize for files i.e 2MB
//$maxsize = 2 * 1024 * 1024; 

// Checks if user sent an empty form 
if(!empty(array_filter($_FILES['files']['name']))) {

	// Loop through each file in files[] array
	foreach ($_FILES['files']['tmp_name'] as $key => $value) {
		  
		$file_tmpname = $_FILES['files']['tmp_name'][$key];
		$file_name = $_FILES['files']['name'][$key];
		$file_size = $_FILES['files']['size'][$key];
		$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

		// Set upload file path
		$filepath = $upload_dir.$file_name;

		// Check file type is allowed or not
		if(in_array(strtolower($file_ext), $allowed_types)) {

			// Verify file size - 2MB max 
			//if ($file_size > $maxsize)         
				//echo "Error: File size is larger than the allowed limit."; 

			// If file with name already exist then append time in
			// front of name of the file to avoid overwriting of file
			if(file_exists($filepath)) {
				echo "<script>alert('alredy existed file name please change the file name');</script>";
				break;
				/*$filepath = $upload_dir.time().$file_name;
				  
				if( move_uploaded_file($file_tmpname, $filepath)) {
					$sql = "INSERT INTO tbl_prjct_file(file, about, regid, prjctid) VALUES ('$file_tmpname','$about','$s',$prjctid)";	
					$query = mysqli_query($con,$sql);
					echo "<script> location.load('group_master?x=$prjctid');</script>";
				} 
				else {                     
					//echo "Error uploading {$file_name} <br />"; 
				}*/
			}
			else {
			  
				if( move_uploaded_file($file_tmpname, $filepath)) {
					$sql = "INSERT INTO tbl_prjct_file(file, about, regid, prjctid) VALUES ('$file_tmpname','$about','$s',$prjctid)";	
					$query = mysqli_query($con,$sql);
					echo "<script> location.load('group_master?x=$prjctid');</script>";
				}
				else {                     
					echo "Error uploading {$file_name} <br />"; 
				}
			}
		}
		else {
			  
			// If file extention not valid
			echo "Error uploading {$file_name} "; 
			echo "({$file_ext} file type is not allowed)<br / >";
		} 
	}
} 
else {
	  
	// If no files selected
	echo "No files selected.";
}

} 

/*	$about = $_POST['about'];
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
	
}*/
?>
<form method='POST' action='#' enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name='files[]' class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>
   <div class="form-group">
    <label for="exampleFormControlDesc">Description</label>
    <input type="text" name='about' class="form-control" id="exampleFormControlDesc">
  </div>
  <div class="form-group">
     <button style="font-size:15px;" type="submit" class="btn btn-outline-success" name='sb'  >Upload</button>
  </div>
  
</form>