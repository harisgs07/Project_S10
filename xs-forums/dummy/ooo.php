<!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" title="Mark as read">
                    <i class="far fa-circle"></i>
                  </button>
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
                <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo">

                <p>I took this photo this morning. What do you guys think?</p>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <span class="float-right text-muted">127 likes - 3 comments</span>
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Luna Stark
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div>
              <!-- /.card-footer -->
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="container">


<?php
					include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT p.*,a.regid, a.username from tbl_post p, tbl_account a where p.regid = a.regid order by p.viwed , p.date desc ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
					if($r1>0)
					{
						while($result = mysqli_fetch_array($query1))
						{
							$temp_postid= $result['postid'];
							
							?>
  <div class="media no-border">
    <img src="dist/img/avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:40px;">
    <div class="media-body">
      <h6><?php echo $result['username'];?> <small style="float:right;"><i><?php echo $result['date'];?></i></small></h6>
      <p><?php echo $result['about'];?></p>
	  
	  
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
	  
	  
      <div class="media p-1">
        <img src="dist/img/avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:25px;">
        <div class="media-body">
           <h6><?php echo $result1['username'];?> <small><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result1['date'];?></i></small></h6>
			<span><?php echo $result1['about'];?></span></br>
			<span>....................More Solutions.....<a href='full_post_view.php?x="<?php echo $result1['postid']; ?>"'>Read More..</a></span>
        </div>
      </div>
	  <?php
							}
							else
							{
							?>
							<div class="media p-1">
        <img src="dist/img/avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:25px;">
        <div class="media-body">
           <h6><?php echo $result1['username'];?> <small><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result1['date'];?></i></small></h6>
			<p><?php echo $result1['about'];?></p>
			
        </div>
      </div>
	  <?php
							}
							
						}
					}
					
					
					
	  ?>
    </div>
  </div>
  <hr style="margin-left:5px;margin-right:5px;background-color:white;"></hr>
  <?php
						}
					}
	  ?>
</div>
</div>