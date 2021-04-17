<script>
function val()
{
	window.location.href = 'logout.php';
}

</script>

<header>
		<div class='main-header'>
			<div class = 'adj-main-header'>
				<div class="logo" id='kl'> <a href="index.php" ><img src="assets/images/brand-logo-2edit.png" alt="image"/></a> 
				</div>
				<div class="header_widgets_text">
					<p class = "uppercase_text">This provides a vast 
					verity of services from
					having external storage as well as a platform for sharing thoughts and ideals fo brightr future </p>
				</div>
				<div class="social-follow">
					<ul>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<?php 
				if (strlen($_SESSION['login'])!=0)
				{
					?>
					<div class='header_widgets_btn_s'>
					<button name='btn' class='sbtn' onclick = 'val();'> signout
					  </button>
					  </div>
					  <?php
				}
					  else
					  {
						  ?>
						  <div class='header_widgets_btn'>
						  <button class='sbtn' id='l' data-target="#myModallog" data-toggle="modal" data-dismiss="modal">Login
							</button>
							<button class='sbtn' id='s' data-target="#myModalreg" data-toggle="modal" data-dismiss="modal">Register
								</button>
								</div>
						<?php	
					  }
						?>	
			</div>
		</div>
		<!-- nav bar -->
		
			  <div class="topnav" id="myTopnav">
				<nav class='nav'>
				  <a href="index.php" >Home</a>
				  <a href="#news">News</a>
				  <a href="#contact">Compiler</a>
				   <?php
				 if(empty($_SESSION['uname']))
				 {
					?>
				 <a href='#myModallog' data-toggle='modal'>Store/Share File</a>
				 <?php
				 }
				 else
				 {
					 ?>
				<a href='file.php'>Store/Share File</a>
				 <?php
				 }
					?>
				 <!-- <a href="#about">About</a>-->
				 <div class='m'>
				  <div class="dropdown">
					<button class="dropbtn">Team Info:
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <?php
						 include('database.php');
						  $id = $_SESSION['login'];
						  $sql ="SELECT * FROM tbl_grp_prj WHERE regid = '$id' and valid = 1 ";
						  $query=mysqli_query($con,$sql);
						  $r=mysqli_num_rows($query);
					  if ($r > 0 )
					{
							?>
							<a href="joinedteam.php">Joined Team Info:</a>
						<?php
						}
						else
						{ 
							if (!empty($_SESSION['login']))
							{
							?>
							<a href="teamoffer.php">Looking For Team</a>
							<?php
							}
							else
							{
								?>
								<a href='#myModallog' data-toggle='modal'>Looking for Team<a/>
							<?php
							}
						}
						$sql1 ="SELECT * FROM tbl_grp_prj WHERE regid != '$id'and gnotify = 1 ";
						$query1= mysqli_query($con,$sql1);
						$r1=mysqli_num_rows($query1);
						if (!empty($_SESSION['login']))
							{ 
							?>
						<a href='notifiedjob.php'>Joining Offer <?php echo htmlentities($r1);?> </a>
							<?php
							}
						else
						{
							?>
							<a href='#myModallog' data-toggle='modal'>Joining Offer <?php echo htmlentities($r1);?> </a>
						<?php
						}
						?>
					</div>
				  </div> 
				  <?php
				  
				  if (!empty($_SESSION['login']))
				  {
					  ?>
				  <div class="dropdown">
					<button class="dropbtn"><i class="fa fa-user-circle" aria-hidden="true"></i> 
					<?php echo htmlentities($_SESSION['uname']);?>  
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="profilesetting.php">Profile Settings</a>
					  <a href="#">Update password</a>
					  <a href="#">Account Stastics</a>
					   <a href="#">Manage Queries</a>
					</div>
				  </div> 
				  <?php
				  }
				  ?>
				  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction();">&#9776;</a>
				  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</div>
</nav>
			</div>
	</header>