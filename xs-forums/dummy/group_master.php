
<?php

//........... group Enabling/Disabling .........			
if(isset($_REQUEST['x']))
{
	
	$prjctid=$_GET['x'];
	include('database.php');
				$sql ="SELECT * from tbl_projects where prjctid=$prjctid";
				$query=mysqli_query($con,$sql);
				$r=mysqli_fetch_array($query);
				$_SESSION['hi'] = $r['description'];
				$a=$_SESSION['hi'];
				
				$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
				$query1=mysqli_query($con,$sql1);
				$q=mysqli_num_rows($query1);
				
				$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid";
				$query1=mysqli_query($con,$sql1);
				$q=mysqli_num_rows($query1);
		
}
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
  <title>XS_FORUM | Own Projects</title>

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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		  <div class="row mb-2">
		  <div >
            <h1 class="m-0 "><?php echo $r['name'];?>&nbsp;&nbsp;&nbsp;</h1>
			</div>
			<div >
			<form method='post' action='project-edit.php?e=<?php echo $prjctid;?>' >
			<button id="chng" class="btn btn-primary float-right">Edit Details</button>
			</form>
			</div>
			<div>
			<form method='post' action='report-gen-group-master.php?x=<?php echo $prjctid;?>' >
			&nbsp;&nbsp;&nbsp;<button id="chng" class="btn btn-success float-right"><i class="fas fa-download"></i>Report gen</button>
			</form>
			</div>
			</div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
			  <li class="breadcrumb-item active"><a href="group.php">Group</a></li>
              <li class="breadcrumb-item active"><?php echo $r['name'];?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  <div class="row info-box info-box-icon elevation-1" style="background:#343a40;" >
	  <div class='col-12'>
	  <h4 class="m-0" style="color:#1286a6;"><b>Description:</b></h1>
	  </div>
	  <div style="margin-top:4px;margin-bottom:8px; padding-left:10px;">
		<span id="msg"><?php echo $a;?></span>
		</div>
		</div>
        <!-- Info boxes -->
        <div class="row">
          
		  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"> <i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Activity</span>
				<div >
		<div style="float:right;" style="margin-right:100px; margin-top:-10px; ">
		<button style="font-size:15px;"   class="btn btn-outline-success" id='addnew' data-toggle="modal" data-target="#modal-default" >+Add Files</button>
			</div>
		</div>
              </div>
             
            </div>

          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Online</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Files Added</span>
                <span class="info-box-number"><?php echo $q;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
		
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
           
		   <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Files Added</h3>

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
                  <table class="table m-0 table-hover">
                    <thead>
                    <tr>
                      <th>File ID</th>
                      <th>File</th>
                      <th>About</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid LIMIT 9";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
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
						</tr>
						<?php
						}	
					}?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href='group_master.php?x=<?php echo $prjctid;?>' class="btn btn-sm btn-secondary float-right">Refresh Table</a>
              </div>
              <!-- /.card-footer -->
            </div>
		   
            <!-- /.card -->
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>
                    <div class="card-tools">
                      <span title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div id='gchat1' class="card-body">
                    <!-- Conversations are loaded here -->
                    <div id='gchat'class="direct-chat-messages" >
					
					<?php
				
					$l = $prjctid;
					include('./group_chat_content.php');
					?>
					
                      <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <form action="#" method="post">
                      <div class="input-group">
                        <input type="text" name="message" id='messages' placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                          <button type="button" onclick='update_chat(<?php echo $prjctid;?>,<?php echo $s;?>);' class="btn btn-warning">Send</button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->
              
			<script>
			
		function update_chat(prid,id)
		{
			/*alert(val);
			var prid = id;
			var dev ='developer';
			var val1 = val;*/
			var prid = prid;
			var id = id;
			var messages = $('#messages').val();
			$.ajax
			({
				type:"POST",
				url:"group_chat.php",
				data : {prid:prid,id:id,messages:messages},	
				success:function(data){
					$('#messages').val('');
					//$('#gchat').scrollTop = $('#gchat').scrollHeight;
					 $('#gchat').animate({scrollTop:$(document).height()},"fast");
					 //return false;
				$('#gchat').load('group_chat_content.php',{'path':prid});
				}
			})
		}
			
			
			</script>
			 
			 
			 
			 
			 <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All Members</h3>
					
					
					
					 <?php
					include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT * from tbl_group g , tbl_account a where g.prjctid=$prjctid and g.regid=a.regid";
					$query1=mysqli_query($con,$sql1);
					$r11=mysqli_num_rows($query1);
					
					?>

					
                    <div class="card-tools">
                      <span class="badge badge-danger"><?php echo $r11; ?> Members</span>
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
				  
                    <ul class="users-list clearfix">
					<?php
				  if ($r11 > 0)
				  {
					  while($r1 = mysqli_fetch_array($query1))
						{
				  ?>
                      <li>
                        <img src="dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href='profile.php?x="<?php echo $r1['regid'];?>"'><?php echo $r1['username']; ?></a>
                      </li>
                     <?php
						}
				  }
					 ?>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->       
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->     
            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added By You</h3>

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
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                   
				   <?php
					include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT * from tbl_prjct_file where prjctid=$prjctid and regid ='$s' Order by prjctid DESC ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
					if($r1>0)
					{
						while($result = mysqli_fetch_array($query1))
						{
							//$_SESSION['d']= $result['acid'];
							
							?>
							 <li class="item">
                    
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"><?php echo $result['file'];?>
                        <span class="badge badge-warning float-right"><?php echo $result['date'];?></span></a>
                      <span class="product-description">
                        <?php echo $result['about'];?>
                      </span>
                    </div>
                  </li>
						
						<?php
						}	
					}?>
				
				   
				   
				   
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
			<!-- TO DO List -->
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>            
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="font-size:15px;overflow-y:scroll; height:374px;">
                <ul class="todo-list" data-widget="todo-list">
                  <li>                    
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>     
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>    
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>     
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li> 
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" >
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-default1"><i class="fas fa-plus" ></i> Add item</button>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
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
  <!-- Add files -->
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
			 include('fileupload.php');
			 
			?> 
			 
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


   <!-- modal for todolist -->
 <div class="modal fade" id="modal-default1">
        <div class="modal-dialog" Style="margin-right:560px;">
          <div class="modal-content" Style="width:800px;">
		  <form method='post'>
            <div class="modal-header">
              <h4 class="modal-title">To Do Programs</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card card-primary">
            <!-- Project-add -->
            <div class="card-body">
			
			<div class="form-group">
                <label for="inputName">Titles/Topic</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Gap</label>
                <input type="number" id="inputDescription" class="form-control" placeholder='Number of dates' ></textarea>
              </div> 
			</form>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
              <button type="button" id='savechanges' data-dismiss="modal" class="btn btn-primary">Save changes</button>
            </div>
			</form>
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
<script>  $('#gchat').animate({scrollTop:$(document).height()},"fast");
</script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

<script>
$('document').ready(function()
{
	
	$('#savechanges').click(function()
	{
		
		var about = $('#inputName').val();
		var gap = $('#inputDescription').val();
		jQuery.ajax({
		url: "todolist_add.php",
		data:{about:about,gap:gap},
		type: "POST",
		success:function(data){
			$('.form-control').val('');
			alert('hi');
		},
		error:function (){}
		})
	});
	
});

</script>

</body>
</html>
