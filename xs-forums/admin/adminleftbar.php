<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidenav {
	 font-family: "Lato", sans-serif;
	margin-top:-10px;
  border-radius: 0px 10px 10px 10px;
  width: 216px;
  height:102.5%;
  position: fixed;
  z-index: 1;
  left: 0;
  overflow-x: hidden;
}

.sidenav a {
  padding: 10px 10px 5px 3px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 100px; /* Same as the width of the sidenav */
}


.lbl
{
	color:red;
	margin-top:18px;
	padding-right:10px;
	padding-bottom:30px;
}

</style>
<script>
$('document').ready(function()
{

	$('#dash').click(function()
	{
		$('.txt').load('diff_reguser.php');
	});

$('#dash2').click(function()
	{
		$('.txt').load('profile.php');
	});
	$('#dash3').click(function()
	{
		$('.txt').load('contactupdate.php');
	});
	
	$('#dash4').click(function()
	{
		$('.txt').load('group.php');
	});
	
	$('#dash5').click(function()
	{
		$('.txt').load('storedfileshow.php');
	});
	
	$('#dash6').click(function()
	{
		$('.txt').load('fileupload.php');
	});
	$('#dash7').click(function()
	{
		$('.txt').load('diff_enqry.php');
	});
	$('#dash8').click(function()
	{
		$('.txt').load('post.php');
	});
	$('#dash9').click(function()
	{
		$('.txt').load('manage-pages_my.php');
	});
	$('#dash10').click(function()
	{
		$('.txt').load('feedback.php');
	});
	$('#dash11').click(function()
	{
		$('.txt').load('diff_contest.php');
	});
	$('#dash12').click(function()
	{
		$('.txt').load('df.php');
	});
	$('#dash13').click(function()
	{
		$('.txt').load('sharefile.php');
	});
	
});

</script>



<style>
#navbarSupportedContentside1 a
{
	text-decoration:none;
	
}


</style>
</head>
	<div class="sidenav ts-sidebar">
		<nav class="navbar sticky-top navbar-dark bg-dark " method='Post'>
			 <div class="collapse1 navbar-collapse ts-sidebar-menu" id="navbarSupportedContentside1">
				<label href="dashboard.php" class='lbl' style="font-size: 22px; ">XS-FORUMS</label>
					<a class="navbar-nav mr-sm-2-auto " href="#"  name='dashboard'><i class="fa fa-dashboard"></i> Dashboard</a>	
					<a class="navbar-nav mr-sm-2-auto" href="#" id='dash'><i class="fa fa-users"></i> Reg Users</a>
					<a class="navbar-nav mr-sm-2-auto" id='dash3' href="#"><i class="fa fa-desktop"></i> Manage Conatct us Query</a>
					<a class="navbar-nav mr-sm-2-auto"  id='dash4' href="#"  ><i class="fa fa-files-o"></i> Group Manage
									<!--<li><a href="create-brand.php">Create Brand</a></li>
									<li><a href="manage-brands.php">Manage Brands</a></li>-->
					<a  class="navbar-nav mr-sm-2-auto" id='dash6' href="#" ><i class="fa fa-sitemap"></i> Insert Files</a>
									<!--<a href="post-avehical.php">Post a Vehicle</a>
									<a href="manage-vehicles.php">Manage Vehicles</a>-->			
					<a class="navbar-nav mr-sm-2-auto"  id='dash5' href="#"><i class="fa fa-users"></i> Manage Files Loaded</a>
					<a class="navbar-nav mr-sm-2-auto"  href="#update-contactinfo.php"><i class="fa fa-files-o"></i> Job Offers/Verify</a>
					<a class="navbar-nav mr-sm-2-auto" id='dash11' href="#manage-conactusquery.php"><i class="fa fa-desktop"></i> Contest Schedules</a>
					<a class="navbar-nav mr-sm-2-auto"  id='dash10' href="#testimonials.php"><i class="fa fa-users"></i> Feedback Views</a></li>
					<a class="navbar-nav mr-sm-2-auto" href="#pages.php" id='dash9'><i class="fa fa-files-o"></i> Update Policies</a>
					<a class="navbar-nav mr-sm-2-auto" id='dash7' href="#"><i class="fa fa-desktop"></i> Enquiry and Complaints</a>
					<a class="navbar-nav mr-sm-2-auto" id='dash8' href="#"><i class="fa fa-desktop"></i> View/Edit Post</a>
					<a class="navbar-nav mr-sm-2-auto"  id='dash13' href="#manage-conactusquery.php"><i class="fa fa-dashboard"></i> Share Files</a>
					<a class="navbar-nav mr-sm-2-auto" id='dash12' href="#reg-users.php"><i class="fa fa-users"></i> About info:</a>
									
			</div>
		</nav>
	</div>