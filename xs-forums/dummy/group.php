<?php
session_start();
$s = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS-FORUM | Group</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<?php
include('top_side_navbar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-top:-40px;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Group</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
              <li class="breadcrumb-item active">Group</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <!--
		  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"></span>
              </div>
             
            </div>

          </div> -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Activity</span>
				<div >
		<div style="float:right;" style="margin-right:100px; margin-top:-10px; ">
		<button style="font-size:15px;"   class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-default" >Post Job</button>
		<button style="font-size:15px;"   class="btn btn-outline-success" id='addnew' onclick='create_group();' >+Create Group</button>
			</div>
			
		</div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
			  <?php
			include('database.php');
				$sql ="SELECT * from tbl_projects where regid='$s' LIMIT 9";
				$query=mysqli_query($con,$sql);
				$r=mysqli_num_rows($query);
				?>
                <span class="info-box-text">Own Projects</span>
                <span class="info-box-number"><?php echo $r; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
			  <?php
			  include('database.php');
			  $sql ="SELECT distinct p.prjctid, p.name, p.stastus, p.total_members, p.start, p.end from tbl_projects p , tbl_group g where g.regid = '$s' and g.prjctid = p.prjctid and p.regid != '$s'";
				$query=mysqli_query($con,$sql);
				$r=mysqli_num_rows($query);
			  ?>
                <span class="info-box-text">Participating Projects</span>
                <span class="info-box-number"><?php echo $r; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

       

        <!-- Main row -->
       
          <!-- Left col -->
         
            <!-- MAP & BOX PANE -->
           
		   <!-- TABLE: LATEST ORDERS -->
            <div class="card">
			
              <div class="card-header border-transparent">
                <h3 class="card-title">Own Projects</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="example1" class="table m-0 table-hover table-fixed" >
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>name</th>
                      
                      <th>stastus</th>
					  
					  <th>total_members</th>
					  <th>start</th>
					  <th>end</th>
                    </tr>
					
                    </thead>
                    <tbody>
			<?php
			include('database.php');
				$sql ="SELECT * from tbl_projects where regid='$s' LIMIT 9";
				$query=mysqli_query($con,$sql);
				$r=mysqli_num_rows($query);
				if($r>0)
				{
					while($result = mysqli_fetch_array($query))
					{
						//$_SESSION['d']= $result['acid'];
						
						?>
                    <tr>
                      <td><a href='group_master.php?x="<?php echo $result['prjctid'];?>"'><?php echo $result['prjctid'];?></a></td>
                      <td><a href='group_master.php?x="<?php echo $result['prjctid'];?>"'><?php echo $result['name'];?></td>
					 
                      <td>
					   <?php 
			   if ($result['stastus']== 'On Hold' || $result['stastus']== 'Starting' )
			   {
				   ?>
				   <span class="badge badge-warning"><?php echo $result['stastus'];?></span>

			  <?php }
			   else
			   {
				    if ($result['stastus']== 'Over' )
			   {
				   ?>
				   <span class="badge badge-warning"><?php echo $result['stastus'];?></span>

			  <?php }
			  else
			  {
			  
				   ?>
				   <span class="badge badge-success"><?php echo $result['stastus'];?></span>
			   <?php }}
			  ?>
			 </td>
					  <td><?php echo $result['total_members'];?></td>
					  <td><?php echo $result['start'];?></td>
					  <td><?php echo $result['end'];?></td>
					  
                    </tr>
        
			<?php
		}	
	}?>
                    </tbody>
                  </table>
				  <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>	
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href="group.php" class="btn btn-sm btn-secondary float-right">Refresh Table</a>
              </div>
              <!-- /.card-footer -->
            </div>
	
            <!-- /.row -->

            
            <!-- /.card -->
        
          <!-- /.col -->

          
            <!-- Info Boxes Style 2 -->
            
             <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Participating Projects</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="example1" class="table m-0 table-hover table-fixed" >
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>name</th>
                      
                      <th>stastus</th>
					  
					  <th>total_members</th>
					  <th>start</th>
					  <th>end</th>
                    </tr>
					
                    </thead>
                    <tbody>
			<?php
			include('database.php');
				$sql ="SELECT distinct p.prjctid, p.name, p.stastus, p.total_members, p.start, p.end from tbl_projects p , tbl_group g where g.regid = '$s' and g.prjctid = p.prjctid and p.regid != '$s'";
				$query=mysqli_query($con,$sql);
				$r=mysqli_num_rows($query);
				if($r>0)
				{
					while($result = mysqli_fetch_array($query))
					{
						//$_SESSION['d']= $result['acid'];
						
						?>
                    <tr>
                      <td><a href='group_participants.php?x="<?php echo $result['prjctid'];?>"'><?php echo $result['prjctid'];?></a></td>
                      <td><a href='group_participants.php?x="<?php echo $result['prjctid'];?>"'><?php echo $result['name'];?></td>
					 
                      <td>
					   <?php 
			   if ($result['stastus']== 'On Hold' || $result['stastus']== 'Starting' )
			   {
				   ?>
				   <span class="badge badge-warning"><?php echo $result['stastus'];?></span>

			  <?php }
			   else
			   {
				    if ($result['stastus']== 'Over' )
			   {
				   ?>
				   <span class="badge badge-warning"><?php echo $result['stastus'];?></span>

			  <?php }
			  else
			  {
			  
				   ?>
				   <span class="badge badge-success"><?php echo $result['stastus'];?></span>
			   <?php }}
			  ?>
			 </td>
					  <td><?php echo $result['total_members'];?></td>
					  <td><?php echo $result['start'];?></td>
					  <td><?php echo $result['end'];?></td>
					  
                    </tr>
        
			<?php
		}	
	}?>
                    </tbody>
                  </table>
				  <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>	
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                 <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href="group.php" class="btn btn-sm btn-secondary float-right">Refresh Table</a>
              </div>
              <!-- /.card-footer -->
            </div>
	
            <!-- /.row -->
		
			
			
        
          <!-- /.col -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  
   <!-- modal for job post -->
 <div class="modal fade" id="modal-default">
        <div class="modal-dialog" Style="margin-right:560px;">
          <div class="modal-content" Style="width:800px;">
		  
            <div class="modal-header">
              <h4 class="modal-title">Post Project</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card card-primary">
            <!-- Project-add -->
            <div class="card-body">
			<?php
			include('project_description.php');
			?>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id='savechanges' data-dismiss="modal" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  
	  
	  
	  
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

<script>
function create_group()
{
	window.location.href="create_group.php";
}
</script>



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

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$('document').ready(function()
{
	
	$('#savechanges').click(function()
	{
		var name = $('#inputName').val();
		var description = $('#inputDescription').val();
		var stastus = $('#inputStatus').val();
		var members = $('#inputTotalMembers').val();
		var email = $('#inputClientCompany').val();
		var leader = $('#inputProjectLeader').val();
		jQuery.ajax({
		url: "add_project_topic.php",
		data:{name:name,description:description,members:members,email:email,leader:leader,stastus:stastus},
		type: "POST",
		success:function(data){
			$('.form-control').val('');
		},
		error:function (){}
		})
	});
	
});
  /*$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"paging": false, "searching": true,
     // "buttons": ["csv", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });*/
</script>
</body>
</html>
