<?php

//........... group Enabling/Disabling .........			
if(isset($_REQUEST['x']))
{
	
	$uid=$_GET['x'];
	include('database.php');
	
				$sql ="SELECT * from tbl_cmpny_account where regid=$uid";
				$query=mysqli_query($con,$sql);
				$r=mysqli_fetch_array($query);
				 //$a= $r['description'];
				 $sql1 ="SELECT * from tbl_reg_users where regid=$uid";
				$query1=mysqli_query($con,$sql1);
				$r1=mysqli_fetch_array($query1);
				echo "<script>alert('".$r['username']."')</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS_FORUM | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $r['username'];?></h3>

                <p class="text-muted text-center"><?php echo $r['email'];?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">          
                <strong><i class="fas fa-book mr-1"></i> Designation</strong>

                <p class="text-muted">
                  <?php echo $r['about'];?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Company Mail</strong>

                <p class="text-muted">------</p>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <!--<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>-->
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- <div class="active tab-pane" id="activity">
                    <!-- Post --
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block --
                      <p>
                       *********************************************--------------------**************************************
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post --

                    <!-- Post --
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block --
                      <p>
                        *********************************************--------------------**************************************
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post --

                    <!-- Post -
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col 
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col 
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col 
                          </div>
                          <!-- /.row 
                        </div>
                        <!-- /.col
                      </div>
                      <!-- /.row 

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post 
                  </div>
                  <!-- /.tab-pane --> 
                  <div class="tab-pane" id="timeline">
                  
                  
                      <form  method="post" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">User name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value='<?php echo $r['username'];?>'>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="inputEmail" placeholder="Email" value='<?php echo $r1['email'];?>'>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button  onclick='update_profile(<?php echo $uid;?>);' class="btn btn-danger">Submit</button>
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
                    <form  method="post" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">User name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value='<?php echo $r['repname'];?>'>
                        </div>
                      </div>
                      
					  <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="inputEmail" placeholder="Company name" >
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="inputEmail" placeholder="Position">
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputEmail" placeholder="Phone number" >
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">About</label>
                        <div class="col-sm-10">
                          <input type="textarea" class="form-control-sm" name="inputEmail" placeholder="About">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button  onclick='update_profile(<?php echo $uid;?>);' class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

<script>
			
		function update_profile(uid)
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
				url:"personal_profile_update.php",
				data : {id:id,name:name,username:username,phone:phone},	
				success:function(data){
					
				}
			})
		}
			
			
			</script>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
