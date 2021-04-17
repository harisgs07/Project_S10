<?php
include('database.php');
if (!empty ($_REQUEST['path']))
{
	session_start();
	$i=$_SESSION['id'];
	
			$path = $_REQUEST['path'];
			$sq ="SELECT * from tbl_chat where grpid = '$path'";
					$qry=mysqli_query($con,$sq);
					$rslt=mysqli_fetch_array($qry);
					if($rslt>0)
					{
						while($rslt = mysqli_fetch_array($qry))
						{
							$srch = $rslt['regid'];
							$sq1 ="SELECT * from tbl_account where regid = '$srch'";
							$qry1 =mysqli_query($con,$sq1);
							$rslt1 =mysqli_fetch_array($qry1);
							//$_SESSION['d']= $result['acid'];	
							if($rslt1['regid'] == $i)
							{
								?>
								
								 <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right"><?php echo $rslt1['name']; ?></span>
                          <span class="direct-chat-timestamp float-left"><?php echo $rslt['date']; ?><?php echo $rslt['time']; ?></span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          <?php echo $rslt['chat']; ?>
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
								
						<?php
							}
							else
							{

						?>
                     
								 <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left"><?php echo $rslt1['name']; ?></span>
                          <span class="direct-chat-timestamp float-right"><?php echo $rslt['date']; ?><?php echo $rslt['time'] ;?></span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          <?php echo $rslt['chat']; ?>
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
					  <?php
							}
						}
					}
	
}
else{
					$sq ="SELECT * from tbl_chat where grpid = $l";
					$qry=mysqli_query($con,$sq);
					$rslt=mysqli_fetch_array($qry);
					if($rslt>0)
					{
						while($rslt = mysqli_fetch_array($qry))
						{
							$srch = $rslt['regid'];
							$sq1 ="SELECT * from tbl_account where regid = '$srch'";
							$qry1 =mysqli_query($con,$sq1);
							$rslt1 =mysqli_fetch_array($qry1);
							//$_SESSION['d']= $result['acid'];	
							if($rslt1['regid'] == $s)
							{
								?>
								
								 <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right"><?php echo $rslt1['name']; ?></span>
                          <span class="direct-chat-timestamp float-left"><?php echo $rslt['date']; ?><?php echo $rslt['time']; ?></span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          <?php echo $rslt['chat']; ?>
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
								
						<?php
							}
							else
							{

						?>
                     
								 <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left"><?php echo $rslt1['name']; ?></span>
                          <span class="direct-chat-timestamp float-right"><?php echo $rslt['date']; ?><?php echo $rslt['time'] ;?></span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          <?php echo $rslt['chat']; ?>
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
					  <?php
							}
						}
					}
	}
						?>
