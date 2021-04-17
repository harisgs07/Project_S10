





<head>

<style>
.navbar
{
	font-size: 16px;
}
.log:hover
{
color:red;
}
.badge
{
	
	position:relative;
	margin-left:5px;
}
</style>
<script>
$('document').ready(function()
	{
		$('#updatepassword').click(function()
		{
			$('.txt').load('updatepassword.php');
	});
	$('#profile').click(function()
		{
			$('.txt').load('profile.php');
	});
	$('#feedback_notfy').click(function()
		{
			$('.txt').load('feedback.php');
			$('#dis').html('');
			
	});
	$('#enq').click(function()
		{
			$('.txt').load('Enquirycomplaint.php');
			$('#dis1').html('');
			
	});
});
</script>

</head>

<nav class="navbar  navbar-expand-sm navbar-dark bg-dark " >
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggle" aria-controls="navbartoggle" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbartoggle">
		<ul class="navbar-nav mr-sm-2-auto">
		  



		  <li class="nav-item dropdown" >
			<a class="nav-link fa fa-user-bell dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" data-target="#dnotify" aria-haspopup="true" aria-expanded="false">  
Notifications
			</a>
			<div class="dropdown-menu " id='dnotify' aria-labelledby="navbarDropdown" style="font-size: 15px; margin-left:20px;">
			<?php
			$sql ="SELECT * from tbl_feedback where date = CURRENT_TIMESTAMP or displayed = 0";
			$query=mysqli_query($con,$sql);
			$r=mysqli_num_rows($query);
			if($r>0)
			{
			?>
			  <a class="dropdown-item" id='feedback_notfy' href="#">
			  <span>
			  feedback
			  </span>
			  <span class="badge" id='dis'> <?php echo $r; ?>
			  </span>
			  </a>
			<?php
			}
			else
			{
			?>
			 <a class="dropdown-item" id='feedback_notfy' href="#">
			  <span>
			  feedback
			  </span>
			  </a>
			<?php
			}
			$sql1 ="SELECT * from tbl_enq_cmp where date = CURRENT_TIMESTAMP or status = 1";
			$query1=mysqli_query($con,$sql1);
			$r1=mysqli_num_rows($query1);
			if($r1>0)
			{
			?>
			  <a class="dropdown-item" id='enq' href="#">
			   <span>
			  Enquiry or complaint
			  </span>
			  <span class="badge" id='dis1'> <?php echo $r1; ?>
			  </span>
			 </a>
			 <?php
			}
			else
			{
			?>
			 <a class="dropdown-item" id='enq' href="#">
			   <span>
			  Enquiry or complaint
			  </span>
			 </a>
			 <?php
			}
			?>
				<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
		  </li>
		  <li class="nav-item justify-content-end dropdown " >
			<a class="nav-link fa fa-user-circle dropdown-toggle text-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" data-target="#dprofile" aria-haspopup="true" aria-expanded="false">
			   <?php echo htmlentities($_SESSION['admin']); ?>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown" id='dprofile' style="font-size: 15px; margin-left:45px;">
			  <a class="dropdown-item" id='updatepassword' href="#">Change Password</a>
			  <a class="dropdown-item" id='profile'  href="#">View Profile</a>
				<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
			</div>
		  </li>
		</ul> 
		<ul class=" navbar-nav navbar-right "  style='margin-top:15px; margin-right:5px;' >
		<li class='log' ><a href="logout.php"  style='text-decoration:none; ' ><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		</ul>
	 </div>
</nav>