<?php

// project deadline things Need to Be updated;


 include('database.php');
//........... group Enabling/Disabling .........			
if(isset($_REQUEST['x']))
{
	
	$folderid=$_GET['x'];
	//echo "<script>alert('".$prjctid."')</script>";
	$sql ="SELECT * from tbl_folder f, tbl_account a where folderid=$folderid and a.regid=f.regid";
	$query=mysqli_query($con,$sql);
	$r=mysqli_fetch_array($query);
	$_SESSION['fid'] = $r['folderid'];		
}

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS_FORUM  | Project Files</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <?php
 include('top_side_navbar.php');
 $s=$_SESSION['id'];

if (isset($_POST['join']))
{			
	
	
	//echo "<script>alert('".$pid."')</script>";
	$sql1 ="insert into tbl_group(regid,prjctid) VALUES ('$s',$prjctid)";
	$query1=mysqli_query($con,$sql1);
	
	
}





 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id='folder' value="<?php echo $r['folderid'];?>"><?php echo $r['foldername'];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li id='who' value="<?php echo $s;?>" class="breadcrumb-item"><a href="main.php">Home</a></li>
			  <li class="breadcrumb-item"><a href="search_folder.php">Search Projects</a></li>
              <li class="breadcrumb-item active">Project Files</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Project Files</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              
              <div class="row">
                <div class="col-12">
                  <h4>All Files </h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $r['username']; ?></a>
                        </span>
                        <span class="description">Shared - <?php echo $r['date']; ?></span>
                      </div>
                      <!-- /.user-block -->

                    <?php
                         $sqlfiletable ="SELECT * from tbl_folder_files where folderid=$folderid";
                         $queryfiletable=mysqli_query($con,$sqlfiletable);
                         $rowfile=mysqli_num_rows($queryfiletable);
                         if($rowfile > 0)
                         {
                             while($resultfile = mysqli_fetch_array($queryfiletable))
                             {
                                 
                    ?>
                                 <p>
                                    <a href="" class="link-black text-sm"><i class="fas fa-link mr-1"></i> <?php echo $resultfile['file']; ?></a>
                                </p>
                    <?php

                             }
                         }
                         else{
                    ?>
                                <p>
                                    No Files For Disaplaying
                                </p>
                    <?php
                         }

                    ?>

                     
                    </div>

                     </div>

              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?php echo $r['foldername'];?></h3>
              <p class="text-muted"><?php echo $r['username'];?></p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Creator Email
                <?php
                $emailrtv = $r['regid'];
                $sqlemail ="SELECT * from tbl_reg_users where regid='$emailrtv'";
                $queryemail=mysqli_query($con,$sqlemail);
                $remail=mysqli_fetch_array($queryemail);
                ?>
                  <b class="d-block"><?php echo $remail['email'];?></b>
                </p>
                <p class="text-sm">Project Creator
                  <b class="d-block"><?php echo $r['name'];?></b>
                  <b class="d-block"><?php echo $r['phone'];?></b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Creator Stastus</h5>
              <span class="badge badge-warning"><?php echo $r['stastus'];?></span>
              <div class="text-left" style="margin-top:25px;">
			  <?php
			    include('database.php');
                $sqlpayment ="SELECT * from tbl_payment where regid='$s' and folderid=$folderid";
                $querypayment=mysqli_query($con,$sqlpayment);
                $r7=mysqli_num_rows($querypayment);
                $spayment ="SELECT * from tbl_folder where regid='$s' and folderid=$folderid";
                $qpayment=mysqli_query($con,$spayment);
                $r77=mysqli_num_rows($qpayment);
                if($r7>0 or $r77>0)
                {
                        ?>
                       <form method='post' action='checkcheck_zip.php?x=<?php echo $r['foldername'];?>'>
                        <button type="submitt" name="download" class="btn btn-md btn-success toastrDefaultSuccessdownload" >
                            Download
                        </button>
                        <button  type="button" class="btn btn-md btn-warning " disabled >
                        Payment
                        </button>
                        <button  class="btn btn-md btn-primary">
                  Chat
                </button> 
                        </form>
                       
                <?php
                }
                else
                    {
                        ?>

<div class="text-muted">
                <p class="text-sm">
                <span class="badge badge-danger float-left" style="font-size:12px;">In Order to Download files your are requested to pay the amount</span>
                      <br/>  <span class="badge badge-danger"id=p value='<?php echo $r['price']; ?>' style="font-size:13px;">Amount: <?php echo $r['price']; ?></span>
                </p>
              </div>     
                        
                        <form method='post' action='payment.php?x=<?php echo$r['folderid'];?>'>
                        <button type="button" name="download" class="btn btn-md btn-success toastrDefaultSuccessdownload" disabled>
                            Download
                        </button>
                        <button  type="submit"  id="payment" class="btn btn-md btn-warning " >
                        Payment
                        </button>
                        <button  class="btn btn-md btn-primary">
                  Chat
                </button> 
                        </form>
                <?php
                }
                ?>
				 
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script>
  $(function () {
   
	
  $('#payment1').click(function(){
		var nameid = $('#who').val();
		var folderid = $('#folder').val();
	  //alert(a);
	    jQuery.ajax({
		url: "payment.php",
		data:{nameid:nameid,folderid:folderid},
		type: "POST",
		success:function(data){
			//alert(data);
			toastr.success(data);
		},
		error:function (){
			toastr.danger('Payment Went Error');
		}
		})
  }
      
    )
	
	})
</script>
<script>
$(function() {
	
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    $('.toastrDefaultSuccessdownload').click(function() {
      toastr.success('Successfully Dowloaded The Zip file');
    });
  });
</script>

</body>
</html>
