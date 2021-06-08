<form method="post" enctype="multipart/form-data" action="#">
        Folder Name: <input type="text" name="foldername" /><br/>
        Choose Directoryy:  <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory=""><br/>
    <input class="button" type="submit" value="Upload" name="upload" />
</form>

<?php
$s = $_SESSION['id'];
//echo "<script>alert('".$prjctid."')</script>";
include('database.php');
$dr = 'Uploads';
$upload_dir = 'Uploads'.DIRECTORY_SEPARATOR;
if(isset($_POST['upload']))
{
        if($_POST['foldername']!="")
        {
                $foldername=$_POST['foldername'];
                $fpath = $upload_dir.$foldername;
                if(!is_dir($foldername))
                {
                        if(file_exists($fpath))
                        {
                                echo "<script>alert('alredy existed folder name please change the folder name');</script>";
				exit;
                        }
                        
                        else
                        {
                                mkdir($dr.'/'.$foldername);
                                $e = date('y-m-d');
                                $sql = "INSERT INTO tbl_folder(foldername,date,regid) VALUES ('$foldername','$e','$s')";
                                $query = mysqli_query($con,$sql);
                                $f_id = mysqli_insert_id($con);
                                foreach($_FILES['files']['name'] as $i=>$name)
                                {
                                        if(strlen($_FILES['files']['name'][$i]) > 1)
                                        {
                                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$dr.'/'.$foldername.'/'.$name);
                                                $sql = "INSERT INTO tbl_folder_files(file,date, regid, folderid) VALUES ('$name','$e','$s','$f_id')";	
					        $query = mysqli_query($con,$sql);
					        //echo "<script> location.load('group_master?x=$prjctid');</script>";
                                        }
                                }
                                echo "<script>alert('Folder is uploaded successfully ..');</script>";
                        }
                }     
               
                
        }
        else
        echo "<script>alert('Folder uploaded Failed !! ..');</script>";
}
?>