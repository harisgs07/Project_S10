































<?php
include('database.php');

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
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Search Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
              <li class="breadcrumb-item active">Search Projects</li>
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
					$sql1 ="SELECT * from tbl_folder f , tbl_account a where a.regid = f.regid and f.regid != '$s' ";
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
					<th>By_Whom</th>   
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
						 <td>
                         <a href='download_details.php?x="<?php echo $result['folderid'];?>"'><?php echo $result['foldername'];?></td>
						 <td><?php echo $result['date'];?></td>
						 <td><a href='profile.php?x="<?php echo $result['regid'];?>"'><?php echo $result['username'];?></td>
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
					<th>By_Whom</th>           
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
    </section>         <!-- /.col -->
            
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

