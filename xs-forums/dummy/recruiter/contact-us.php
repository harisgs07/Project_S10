
<?php
if(isset($_POST['send']))
{
	$s = $_SESSION['id'];
		include ("database.php");
		$msg = $_POST['inputMessage'];
		$insertquery = "INSERT INTO tbl_enq_cmp(regid, about) VALUES ('$s','$msg')";
		mysqli_query($con,$insertquery);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contact us</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
            <h1> Enquiry-complaints</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Enquiry-complaints</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2><strong>XS-FORUM</strong></h2>
              <p class="lead mb-5">Enquiry or Complaint Section<br>
                Phone: +1 234 56789012
              </p>
            </div>
          </div>
          <div class="col-7">
		  <form  action="#" method='post'>
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
			  <?php
			  include('database.php');
			  $sql ="SELECT email FROM tbl_reg_users WHERE regid='$s'";
			$query= mysqli_query($con,$sql);
			$res = mysqli_fetch_array($query);
			  
			  ?>
              <input type="email" id="inputEmail" class="form-control" disabled value="<?php echo $res['email'];?>" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea name="inputMessage" id='im' class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <input type="button" class="btn btn-primary" onclick='send(<?php echo $s;?>)' value="Send message">
            </div>
			</form>
          </div>
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


<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>

function send(vid) {
	var msg = $('#im').val();
	//alert(msg);
	$.ajax({
		type: "POST",
		url: "contact-us-update-ajax.php",
		data:{vid:vid,msg:msg},
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$(".form-control").html('');
			//$("#inputCity").removeClass("loader");
		}
	})
}

</script>
</body>
</html>
