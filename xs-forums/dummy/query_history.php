<?php
// project deadline things Need to Be updated;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XS_FORUM | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
    <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<bod	y class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
              <li class="breadcrumb-item active">query history</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
	<div class="row" style="width:1100px;">
          <!-- Left col -->
          <div class="col-md-9" >
		  <?php
			include('database.php');
			//echo "<script>alert('".$prjctid."')</script>";
			$sql1 ="SELECT p.*,a.regid, a.username from tbl_post p, tbl_account a where p.regid='$s' and p.regid = a.regid order by p.viwed , p.date desc ";
			$query1=mysqli_query($con,$sql1);
			$r1=mysqli_num_rows($query1);
			if($r1>0)
			{
				while($result = mysqli_fetch_array($query1))
				{
					$temp_postid= $result['postid'];					
		?>
<div class="card card-widget" style="margin-left:5px;" >


		
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#"><?php echo $result['username'];?>.</a></span>
                  <span class="description">Shared publicly - <?php echo $result['date'];?></span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                <p><?php echo $result['about'];?></p>

                <!-- Attachment -->
                <!-- /.attachment-block -->

                <!-- Social sharing buttons -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <span class="float-right text-muted">45 likes - 2 comments</span>
              </div>
			  <!-- /.card-body -->
			  <?php
              
			 include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$se ="SELECT * from tbl_post_ans where postid='$temp_postid'";
					$qu=mysqli_query($con,$se);
					$r3=mysqli_num_rows($qu);
					if($r3>0)
					{
	  ?>
              <div class="card-footer card-comments">
			  
			  
	<?php
					include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql2 ="SELECT p.*,a.regid, a.username from tbl_post_ans p, tbl_account a where p.regid = a.regid and p.postid='$temp_postid'";
					$query2=mysqli_query($con,$sql2);
					$r2=mysqli_num_rows($query2);
					if($r2>0)
					{
						$c = 0;
						while($c == 0)
						{
							$result1 = mysqli_fetch_array($query2);
							$c = $c + 1;
							//$temp_postid= $result['postid'];
							if($r2>1)
							{
							?>
			  
			  
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      <?php echo $result1['username'];?>.
                      <span class="text-muted float-right"><?php echo $result1['date'];?></span>
                    </span><!-- /.username -->
                    <?php echo $result1['about'];?>
                  </div>
                  <!-- /.comment-text -->
                </div>
				 <div class="comment-text">
                    <span>More Solutions...<a href='full_post_view.php?x="<?php echo $result1['postid']; ?>"'>Read More..</a></span>
                  </div>
                <!-- /.card-comment -->
                <?php
							}
							else
							{
							?>
							
				 <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      <?php echo $result1['username'];?>.
                      <span class="text-muted float-right"><?php echo $result1['date'];?></span>
                    </span><!-- /.username -->
                    <?php echo $result1['about'];?>
                  </div>
				 
                  <!-- /.comment-text -->
                </div>
			
                <!-- /.card-comment -->
              
			  
			  
              <!-- /.card-footer -->
			  
			  	<?php
							}?>
							</div>
							<?php
							
						}
					}
					}
					
					
	  ?>
			  
			  
             
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm center" src="dist/img/user4-128x128.jpg" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                 <div class="img-push row">
				  <div class="col-md-10">
                    <textarea class="form-control form-control-sm" id="<?php echo $temp_postid;?>" placeholder="type here to post comment"></textarea>
					</div>
					<div class="col-md-2"  >
					<button class="btn btn-success" onclick='post_answer(this.value);' value="<?php echo $temp_postid; ?>" placeholder="post" style="height:35px;width:100px;margin-top:8px;"><p style="padd-left:20px;"><?php echo $temp_postid; ?></p>
					</button>
					</div>
				
                  </div>
                </form>
              
              <!-- /.card-footer -->
            </div>
			<?php
						}
					}
	  ?>
	  </div>
<div class="col-md-3"  >
<div class="card">
              <div class="card-header">
                <h3 class="card-title">ACTIONS</h3>
              </div>
              <div class="card-body">
                
                
                  <button type="button" class="btn btn-outline-success btn-block btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-bell"></i> Post Queries</button>
                  <button type="button" class="btn btn-outline-info btn-block btn-default"><i class="fa fa-book"></i> Filter Post</button>
                  <button type="button" id='history' class="btn btn-outline-danger btn-block btn-default"><i class="fa fa-book"></i> Query History</button>
				  <button type="button" class="btn btn-outline-warning btn-block btn-default"><i class="fa fa-book"></i> Answers</button>
                
              </div>
            </div>
</div>


</div>





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
			include('post_description.php');
			?>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id='publish' data-dismiss="modal" class="btn btn-primary">Publish Your Query</button>
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
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script>
$('document').ready(function()
{
	
	$('#publish').click(function()
	{
		var title = $('#inputName').val();
		var category = $('#inputDescription').val();
		var question = $('#q').val();
		
		jQuery.ajax({
		url: "add_post.php",
		data:{title:title,category:category,question:question},
		type: "POST",
		success:function(data){
			$('.form-control').val('');
		},
		error:function (){}
		})
	});
	
	$('#history').click(function()
	{
		window.location.href="query_history.php";
	});
	
});
function post_answer(v)
{
var title = $('#' + v).val();
alert(title);
		jQuery.ajax({
		url: "add_post_ans.php",
		data:{title:title,v:v},
		type: "POST",
		success:function(data){
			$('#post_answer_area').val('');
		},
		error:function (){}
		})
	
}
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
