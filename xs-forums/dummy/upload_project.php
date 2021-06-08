<?php
//session_start();


include('database.php');
//echo "<script>alert($_SESSION['id']);</script>";



//........... group Enabling/Disabling .........			
if(isset($_REQUEST['x']))
{
	
	$prjctid=$_GET['x'];
	//echo "<script>alert('$prjctid');</script>";
	$sql ="SELECT * from tbl_projects where prjctid=$prjctid";
				$query=mysqli_query($con,$sql);
				$r=mysqli_fetch_array($query);
	
}?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS_FORUM | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">
 <?php
 include('top_side_navbar.php');
 //echo "<script>alert('".$s."')</script>";
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3" >
            <h1>Upload Projects</h1>
          </div>
          <div class="col-sm-2" >
                <form method='post' action='report-gen-group-master.php?x=<?php echo $prjctid;?>' >
                <button type="submit" id="chng1" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fas fa-upload"></i> Upload</button>
                </form>
              </div>
          <div class="col-sm-7">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
              <li class="breadcrumb-item active">Upload Projects</li>
            </ol>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Xs-Forum | Projects.
                    <small class="float-right">Date: <?php echo date('d-m-y');?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
			  <?php	
				include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT * from tbl_folder f , tbl_account a where f.regid = '$s' and a.regid = f.regid ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
				?>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <b>Total Projects:</b> <?php echo $r1; ?>
                </div>
                <!-- /.col -->
               
                <!-- /.col -->
              </div>
              </div>
              <!-- /.row -->
              <!-- Table row -->             
    <section class="content">
      <div class="container-fluid">
        <div class="row">        
            <!-- /.card -->
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>   
              <a href="upload_project.php" class="btn btn-sm btn-secondary float-right" style="height:30px;">Refresh Table</a>      
                 <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
			  </div>
             
			  <div class="row">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Folder Name</th>
                    <!--<th>About</th>-->
                    <th>Date</th>  
                  </tr>
                  </thead>
                  <tbody>
                 
                 <?php
					
					if($r1>0)
					{
						while($result = mysqli_fetch_array($query1))
						{
							//$_SESSION['d']= $result['acid'];
							
							?>
						<tr>
						<td><?php echo $result['folderid'];?></td>
						 <td><a href='download_details.php?x="<?php echo $result['folderid'];?>"'><?php echo $result['foldername'];?></td></td>
						 <td><?php echo $result['date'];?></td>
						</tr>
						<?php
						}	
					}?>  
				  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>File_Name</th>
                    <th>Date</th>
					    
                  </tr>
                  </tfoot>				  
                </table>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</section>   

<div class="modal fade" id="modal-default">
        <div class="modal-dialog" Style="margin-right:560px;">
          <div class="modal-content" Style="width:800px;">
            <div class="modal-header">
              <h4 class="modal-title">Upload Project Folder</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card card-primary">
            <!-- Project-add -->
            <div class="card-body">
 
			<form method="post" enctype="multipart/form-data" action="upload_project.php">
            Folder Name: <input class='a' type="text" name="foldername" /><br/><br/>
            Choose Directoryy:  <input class = 'a' type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory=""><br/><br/>
            Amount : <input class='a' type="text" name="amount" /><br/><br/>
            <input class="button" type="submit" value="Upload" name="upload" />
            </form>
			 
            </div>
            <!-- /.card-body -->
          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 <!-- /.col -->
    <?php
     
      $dr = 'Uploads';
$upload_dir = 'Uploads'.DIRECTORY_SEPARATOR;
if(isset($_POST['upload']))
{
    $amount = $_POST['amount'];
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
                                $sql = "INSERT INTO tbl_folder(foldername,date,price,regid) VALUES ('$foldername','$e','$amount','$s')";
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
                                echo "<script> $('.a').val='';</script>";
                        }
                }         
        }
        else
        echo "<script>alert('Folder uploaded Failed !! ..');</script>";
}

?>


              <!-- this row will not appear when printing -->           
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>

