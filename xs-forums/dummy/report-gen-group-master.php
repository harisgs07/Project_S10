<!DOCTYPE html>
<?php
  include('database.php');
  //........... group Enabling/Disabling .........			
  if(isset($_REQUEST['x']))
    {
      $prjctid=$_GET['x'];
      //echo "<script>alert('$prjctid');</script>";
    }
          $sql ="SELECT * from tbl_projects where prjctid=$prjctid";
          $query=mysqli_query($con,$sql);
          $r=mysqli_fetch_array($query);
          $_SESSION['hi'] = $r['description'];
          $a=$_SESSION['hi'];
          /*  
              $sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
              $query1=mysqli_query($con,$sql1);
              $q=mysqli_num_rows($query1);
              $sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
              $query1=mysqli_query($con,$sql1);
              $q=mysqli_num_rows($query1);
          */		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS-Forum | Report</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
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
            <h1>Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active"><a href='group_master.php?x="<?php echo $r['prjctid'];?>"'><?php echo $r['name'];?></a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
			<div class="row mb-2">
			<div>
			<h5><i class="fas fa-info"></i>&nbsp;Note:</h5>
			</div>
			<div style="padding-top:4px;">
			<h6>
			&nbsp;&nbsp;This page has been enhanced for Report Generation. Select the Category and Date for Report generation.</h6>
			</div>
			</div>
			
			<div class="row mb-3">
			
			<div class='col-sm-6'>
				<div class="form-group">
					<div>
						<select id="inputStatus" class="form-control" placeholder='select one'> 
						  <option value='1'>All Files Record</option>
						  <option value='2'>Own Files Record</option>
						  <option value='3'>Members Record</option>
						</select>
					</div>
					<div>
						<span style="font-size:12px;">Category </span>
					</div>
				</div>
			</div>
			
			<div class='col-sm-2'>
				<button onclick="rprtgen()" type="button" class="btn btn-success float-left"><i class="far fa-credit-card"></i> &nbsp;&nbsp;Submit
                    Search
                  </button>
            </div>
			
		</div>
	</div>
	

            <!-- Main content -->
            <div class="invoice p-3 mb-3" id='load'>
              <!-- title row -->
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>


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

</body>
</html>


<script>

	function rprtgen()
	{
		//alert($('#inputStatus').val());
		
		switch ($('#inputStatus').val())
		{
			case '1':
			$('#load').load('timeline-report.php?x=<?php echo $prjctid;?>');
			break;
			case '2':
			$('#load').load('own-timeline-report.php?x=<?php echo $prjctid;?>');
			break;
			case '3':
			$('#load').load('members-details-report.php?x=<?php echo $prjctid;?>');
			break;
			
		}
		
	}
</script>
<script>
function del(vid)
	{
		//alert(vid);
		jQuery.ajax({
		url: "file-dlt.php",
		data:{vid:vid},
		type: "POST",
		success:function(data){
			toastr.success('File Has Been Deleted');
		},
		error:function (){
			toastr.danger('Something Went Error!!');
		}
		})
	}

</script>

<script>
$(function() {
	

    
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
   
   
  });
</script>

