<!-- connection -->
<?php include('connect.php');?>
<!-- getuser -->
<?php
$id = $_SESSION["id"];
$sql = mysqli_query($con,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
$userlevel=$user['userlevel'];
?>

<!-- counterforsidenavigation -->
<?php
				
		$count=mysqli_query($con,"SELECT * FROM tblmedicine WHERE quantity<=5  ");
		$count2=mysqli_query($con,"SELECT * FROM tblsupply WHERE quantity<=5  ");
		$counter2=mysqli_num_rows($count2);
		$counter=mysqli_num_rows($count);
		$forpurchase = $counter2 + $counter;
		
?>
 
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="padding: 0;">
			<div class="navbar-header" style="background-color:#ff69b4; height:60px">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse" ><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>

				<a class="navbar-brand" ><span style="color: #ffffff; padding-left: 2%;  font-size: 30px;font-family: Rockwell; font-color:#ffffff;">
					<div class="navbar-brand">
						<H1 alt="" width="50px;" height="58px" style="margin-top: -40px;margin-left: 25px; font-size: 33px;font-family: Rockwell; color: white;">Barangay Herrero - Perez</H1></div> 
					</a> 

				
				<ul class="nav navbar-top-links navbar-right" style="padding-right:1%;">
					<li class="dropdown" style="min-width:10%;color:#fff;padding:10px; height:40px; text-transform:capitalize">
					Welcome,&nbsp;<?php echo $user['username'];?></li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="edit_profile.php">
						<em class="fa fa-chevron-circle-down"></em>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							
							<li class="divider"></li>
							<li><a href="edit_profile.php" >
								<div><em class="fas fa-sm fa-user">&nbsp;</em> Profile
									</div>
							</a></li>

							 <li class="divider"></li>
							<li><a href="edit_password.php?ID=<?php echo $user['ID']; ?>">
								<div><em class="fa fa-unlock-alt"></em> Change Password
									</div>
							</a></li> 
							
							<li class="divider"></li>
							<li><a href="logout.php" >
								<div><em class="fa fa-power-off">&nbsp;</em> Logout
									</div>
							</a></li>
						</ul>
					</li>
				</ul>
					
	</nav>

    