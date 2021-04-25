 <?php
include('database.php');

//........... group Enabling/Disabling .........			
if(isset($_REQUEST['x']))
{
	
	$prjctid=$_GET['x'];
	echo "<script>alert('$prjctid');</script>";
	$sql ="SELECT * from tbl_projects where prjctid=$prjctid";
				$query=mysqli_query($con,$sql);
				$r=mysqli_fetch_array($query);
	
}?>
 
 
 
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Xs-Forum | Report.
                    <small class="float-right">Date: -----</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
			  <?php	
				include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT * from tbl_prjct_file f, tbl_account a where f.prjctid=$prjctid and f.regid=a.regid ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
				?>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <b>Total Files:</b> <?php echo $r1; ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Project Name:</b> <?php echo $r['name']; ?>
                </div>		
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Project_Id:</b> <?php echo $prjctid; ?>          
                </div>
                <!-- /.col -->
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
                    <th>File_Name</th>
                    <th>About</th>
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
						<td><?php echo $result['prjfileid'];?></td>
						 <td><?php echo $result['file'];?></td>
						 <td><?php echo $result['about'];?></td>
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
                    <th>About</th>
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
                <!-- /.col -->
              <?php
				
				include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT *,f.name from tbl_projects f, tbl_account a where f.prjctid=$prjctid and f.regid=a.regid ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
				
					if($r1>0)
					{
						while($result = mysqli_fetch_array($query1))
						{
							//$_SESSION['d']= $result['acid'];
							
							?>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead"><b><?php echo $result['name'];?></b><br>
				  <span style='font-size:15px;'>Leader: <b><a href='profile.php?x="<?php echo $result['regid'];?>"'><?php echo $result['username'];?> </b></span></p>
				  
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   <?php echo $result['description'];?>
                  </p>
                </div>
                <!-- /.col -->
              
                <!-- /.col -->
              </div>
              <!-- /.row -->
						<?php
						}
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

