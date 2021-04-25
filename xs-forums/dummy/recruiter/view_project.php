<div class="card" style='overflow:auto;'>  
            <!-- /.card -->
              <div class="card-header">
                <h3 class="card-title">All Projects</h3>
				 
                <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href='group_master.php?x=<?php echo $prjctid;?>' class="btn btn-sm btn-secondary float-right">Refresh Table</a>
              
              </div>
			 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-hover">
                  <tbody>
                 <div id="accordion">
                 <?php	
				include('database.php');
					//echo "<script>alert('".$prjctid."')</script>";
					$sql1 ="SELECT *, f.name from tbl_projects f, tbl_account a where f.regid=a.regid ";
					$query1=mysqli_query($con,$sql1);
					$r1=mysqli_num_rows($query1);
				
					
					if($r1>0)
					{
						while($result = mysqli_fetch_array($query1))
						{
							 //echo $result['prjctid'];
							//$_SESSION['d']= $result['acid'];
							
							?>
						<tr>
						
						  <div class="card">
							<div class="card-header" id="<?php echo $result['name'];?>">
							  <h5 class="mb-0">
							  <div class="row">
								<button class="btn btn-link" data-toggle="collapse" data-target="#<?php echo $result['name'];?>" aria-expanded="false" aria-controls="<?php echo $result['name'];?>">
								  <?php echo $result['name'];?>
								</button>
								 <a style="margin-top:10px;"class="users-list-name" href='profile.php?x="<?php echo $result['regid'];?>"'><?php echo $result['username']; ?></a>
								</div>							 
							 </h5>
							</div>

							<div id="<?php echo $result['name'];?>" class="collapse" aria-labelledby="<?php echo $result['name'];?>" data-parent="#accordion">
							  <div class="card-body">
							   <?php echo $result['description'];?>
							  </div>
							</div>
						  </div>
						
						</tr>
						<?php
						}	
					}?>
</div>					
				  </tbody>
                 				  
                </table>
              </div>
			  </div>





