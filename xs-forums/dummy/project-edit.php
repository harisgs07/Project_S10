<!DOCTYPE html>
<?php
include('database.php');

//........... group Enabling/Disabling .........			
if(isset($_REQUEST['e']))
{
	
	$prjctid=$_GET['e'];
	//echo "<script>alert('$prjctid');</script>";
	
}
include('database.php');
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
				$q=mysqli_num_rows($query1);*/
		
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS-FORUM | Project Edit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
			  <li class="breadcrumb-item active"><a href='group_master.php?x="<?php echo $r['prjctid'];?>"'><?php echo $r['name'];?></a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

             
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $r['name'];?>"></input>
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"><?php echo $r['description'];?></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select" >
                  <option disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option >Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Mail</label>
                <input type="email" id="inputClientCompany" class="form-control" value="<?php echo $r['Client_Email'];?>"></input>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control"value="<?php echo $r['leader'];?>"></input>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control" step="1" value="<?php echo $r['amount'];?>"></input>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total Members</label>
                <input type="number" id="inputSpentBudget" class="form-control" step="1" value="<?php echo $r['total_members'];?>"></input>
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>
				<div class="card-tools">
                <a href='project-edit.php?e=<?php echo $prjctid;?>' class="btn btn-sm btn-secondary float-right">Refresh Table</a>
                </button>
              </div>
             
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>


<?php
include('database.php');
//........... group Enabling/Disabling .........			
				
				$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
				$query1=mysqli_query($con,$sql1);
				$q=mysqli_num_rows($query1);
				
				$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
				$query1=mysqli_query($con,$sql1);
				$q=mysqli_num_rows($query1);
				if($q>0)
				{
					while($res=mysqli_fetch_array($query1))
					{
										

?>
                  <tr>
                    <td><?php echo $res['file']; ?></td>
                    <td><?php echo $res['date']; ?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <button onclick='del(<?php echo $res['prjfileid'];?>)' class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  <tr>
                    <?php
					}
				}
					?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href='group_master.php?x="<?php echo $r['prjctid'];?>"' class="btn btn-secondary">Cancel</a>
          <input type="button" value="Save Changes" onclick='updateprjct(<?php echo $prjctid;?>)' class="btn btn-success float-right toastrDefaultSuccess">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
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

<script>

	function updateprjct(vall)
	{
		var id = vall;
		var name = $('#inputName').val();
		//alert(name);
		var about = $('#inputDescription').val();
		var stastus = $('#inputStatus').val();
		var cemail = $('#inputClientCompany').val();
		var leaders = $('#inputProjectLeader').val();
		var members = $('#inputSpentBudget').val();
		
		jQuery.ajax({
		url: "project-edit-ajax.php",
		data:{id:id,name:name,about:about,stastus:stastus,cemail:cemail,leaders:leaders,members:members},
		type: "POST",
		success:function(data){
			toastr.success('Successfully Updated The Details');
			$('document').load('project-edit.php');
		},
		error:function (){
			toastr.danger('updation Went Error');
		}
		})
	}
</script>
<script>
function del(vid)
	{
		alert(vid);
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
	

    
   
   
   
  });
</script>
<script src="plugins/toastr/toastr.min.js"></script>
</body>
</html>
