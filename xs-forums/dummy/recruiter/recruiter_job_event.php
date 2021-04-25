


<?php
include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql ="SELECT * FROM tbl_reg_users where type='user'";
					$query=mysqli_query($con,$sql);
					$r1=mysqli_num_rows($query);		
					
					$sql ="SELECT * FROM tbl_reg_users where type='company'";
					$query=mysqli_query($con,$sql);
					$r2=mysqli_num_rows($query);

					$sql ="SELECT * FROM tbl_prjct_file";
					$query=mysqli_query($con,$sql);
					$r3=mysqli_num_rows($query);
							
					$sql ="SELECT * FROM tbl_projects";
					$query=mysqli_query($con,$sql);
					$r4=mysqli_num_rows($query);
	  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
include('top_side_navbar.php');
?>

<?php

include('database.php');
if(isset($_POST['job']))
{
	$name= $_POST['inputName'];
	$about = $_POST['inputAbout'];
	$desc = $_POST['inputDesc'];
	$qulf = $_POST['inputqua'];
	$sdate =$_POST['inputdatestrt'];
	$edate =$_POST['inputdateend'];
	$sql ="INSERT INTO tbl_projects_job( job_name, job_desc, about, reg_date_start, reg_date_ends, qualification, regid) VALUES ('$name','$desc','$about','$sdate','$edate','$qulf','$s')";
	$query=mysqli_query($con,$sql);	
}
if(isset($_POST['event']))
{
	$name= $_POST['inputName1'];
	$desc = $_POST['inputDesc1'];
	$sdate =$_POST['inputdatestrt1'];
	$edate =$_POST['inputdateend1'];
	$sql ="INSERT INTO tbl_event( event_name,event_about, event_starts, event_ends,regid) VALUES ('$name','$desc','$sdate','$edate','$s')";
	$query=mysqli_query($con,$sql);
			
}
?>
  <!-- Preloader -->
  
      <!-- /.sidebar-menu -->
 
    <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Job-Events</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Job-Events</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
	

		
		<div class="card col-sm-10-12">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <!--<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>-->
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Post Job Openings</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Events Publishing</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">    
                  <div class="tab-pane" id="timeline">
					<form  method="post" class="form-horizontal" onsubmit="#" >
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label" required>Job Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputName" placeholder="Job Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="inputDesc" placeholder="Description" required></textarea>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">About</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="inputAbout" placeholder="Methods and other Details of Exam"required></textarea>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">Qualification</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="inputqua" placeholder="Qualification" required></textarea>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="inputdatestrt" placeholder="Start Date" required >
                        </div>
                      </div>
                     <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="inputdateend" placeholder="End Date" required >
                        </div>
                      </div>
					   <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type='submit'  name='job' class="btn btn-danger"></input>
                        </div>
                      </div>
                    </form>
                      </div>
					 
                      <!-- /.timeline-label -->
                      <!-- timeline item  -->
                    
                      <!-- END timeline item
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form  method="post" class="form-horizontal" onsubmit="#">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Event Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputName1" placeholder="Job Name"  required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="inputDesc1" placeholder="Description"></textarea>
                        </div>
                      </div>
					<div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="inputdatestrt1" placeholder="Start Date" required>
                        </div>
                      </div>
                     <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="inputdateend1" placeholder="End Date" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type='submit'  name="event" class="btn btn-danger"></input>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
		
		
		
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<script>	
function submit_rec(uid)
	{
		alert(uid);
		/*var prid = id;
		var dev ='developer';
		var val1 = val;*/
		var id = uid;
		var name = $('#inputName').val();
		var username = $('#inputName2').val();
		var phone = $('#inputName3').val();
		$.ajax
			({
				type:"POST",
				url:"pernal_profile_update.php",
				data : {id:id,name:name,username:username,phone:phone},	
				success:function(data)
				{
					
				}
			})
		}
</script>



</body>
</html>
