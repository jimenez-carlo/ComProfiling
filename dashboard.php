<!-- session -->
<?php include("session.tpl");?>
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
<!-- dashboardcounter -->
<?php
		$uuser=mysqli_query($con,"SELECT * FROM tbluser ");
		$uuuser=mysqli_num_rows($uuser);
		$soc=mysqli_query($con,"SELECT * FROM tblsocial");
		$socs=mysqli_num_rows($soc);

		
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="fontawe/css/all.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
	<!--===============================================================================================-->	
	<link rel="icon" type="images/png" href="images/dashboard.png"/>
<!--===============================================================================================-->

</head>
<body style="background: url(images/perezBrgyhall.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
	<?php include("header.php");?>
	<div id="sidebar-collapse" style="background-color:#ff69b4;opacity: 1.1;" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
		<li class="active"><a href="dashboard.php"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li><a href="socialadd.php" style="color:white;"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li><a href=""  style="color:white;"><em class="fas fa-project-diagram">&nbsp;</em> Task</a></li>
      <li><a href="usermgmt.php"  style="color:white;"><em class="fas fa-user-plus">&nbsp;</em>Add User</a></li>
      <li><a href="userlogs.php" style="color:white;"><em class="fa fa-tasks">&nbsp;</em> User Logs</a></li>
      <li><a  style="color:white;"data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</div><!--/.row-->
	</div>	<!--/.main-->
			<!-- Modal -->
<div id="logoutModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:25%;">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
<!--         <button type="button" class="close" data-dismiss="modal">&times;</button>
 -->        <h4 class="modal-title">Logout Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure  you want to logout your current session?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-danger" type="submit" style="text-decoration:none;">Logout</a>
      </div>
    </div>

  </div>
</div> <!-- endmodal -->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home" ></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<!-- <div class="col-lg-12">
				<h1 class="page-header" style="color:#fff;"></h1>
			</div> --><br/>
		</div><!--/.row-->
		
		
		
		 

<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding" style="margin-left:120px;">
					<div class="panel panel-teal panel-widget border-right">

						<div class="row no-padding">
							<a href=""><em class="fa fa-xl fa-users"style="color:#000000;"></em></a>
							<div class="large">
								<?php echo $socs;?></div>
							<div class="text-muted" style="font-size: 20px;color:#000000; ">PEOPLE</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding">
							<div class="row no-padding">
							<a href=""><em class="fas fa-xl fa-tasks"style="color:#000000;"></em></a>
							<div class="large">
								<h1>40</h1></div>
							<div class="text-muted" style="font-size: 20px;color:#000000;">TASKS</div>
						</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding" >
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding">
							<a href=""><em class="fas fa-xl fa-user"style="color:#000000;"></em></a>
							<div class="large">
								<?php echo $uuuser;?></div>
							<div class="text-muted" style="font-size: 20px;color:#000000;">USERS</div>
						
						</div>
					</div>
				</div>

			</div> <!-- row -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" style=" ">
						Recently Added Residents
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
<!-- 							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
 -->					<!--Table-->
 <div class="table-responsive">
<table class="table table-hover table-fixed">
	<!--Table head-->
  <thead>
    <tr>
      <th>ID Number</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Birth Date Status</th>
      <th>Birth Place</th>
      <th>Civil Status </th>
      <th>Religion</th>
      <th>Occupation</th>
      <th>Education Attainment</th>
      <th>House Number</th>
      <th>Contact Number</th>
      <th>Email Address</th>
       <th>Date/Time</th>
    </tr>
  </thead>
  <!--Table head-->
			<?php
			$query = "SELECT * FROM tblsocial ORDER BY ID DESC LIMIT 5 OFFSET 0";
		
		// include('connection.php');
		$result = mysqli_query( $con,$query);
		// if(!$result){
  //         		echo "No Records Found";
  //       	}
  //      else{
		if($recordCount = mysqli_num_rows($result)){
	
		while($row = mysqli_fetch_array($result)){
			?>
			<tbody>
				<tr>
					 <th scope="row"><?php echo $studID=$row['idnumber'] ?></th>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $lastnm=$row['lastname'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['firstname'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['middlename'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['age'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['gender'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 250px;"><?php echo $row['birthdate'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['birthplace'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['civil'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['religion'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['occupation'] ?></td>
          <td style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['educattain'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['housenumber'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['contact'] ?></td>
           <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['email'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['timedate'] ?></td>
          <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"> 
				</tr>
			</tbody>
			<?php 
				}}
				

			?>
  

</table>
</div>
<!--Table-->


 					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" >
						Recently Tasks
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
<div class="table-responsive">
<table class="table table-hover table-fixed">
	<!--Table head-->
 

</table>
</div>
<!--Table-->


 					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" >
						Recently added Users
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
<!-- 							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
 -->					<!--Table-->
  <div class="table-responsive">
<table class="table table-hover table-fixed">
	<!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Last Name</th>
      <th>First Name</th>
    </tr>
  </thead>
  <!--Table head-->
			<?php
			$query = "SELECT * FROM tbluser ORDER BY ID DESC LIMIT 5 OFFSET 0";
		
		// include('connection.php');
		$result = mysqli_query( $con,$query);
		// if(!$result){
  //         		echo "No Records Found";
  //       	}
  //      else{
		if($recordCount = mysqli_num_rows($result)){
	
		while($row = mysqli_fetch_array($result)){
			?>
			<tbody>
				<tr>
					<th scope="row"><?php echo $ID=$row['ID'] ?></th>
					<td><?php echo $row['username'] ?></td>
          			<td><?php echo $row['lastname'] ?></td>
					<td><?php echo $row['firstname'] ?></td>
				</tr>
			</tbody>
			<?php 
				}}
				

			?>
  

</table>
</div>
<!--Table-->


 					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->


		
			<div class="col-sm-12">
				<p style="color:#fff;" class="back-link">&copy;  2021 Community Profiling System. All rights reserved.</p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
<!-- modal -->
<!-- getuser -->
<?php
$id = $_SESSION["id"];
$sql = mysqli_query($con,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
?>

<?php
		  
    	$check = "SELECT * FROM tbluser WHERE ID = $id ";
        $user_check = mysqli_query($con, $check);

         while ($row = mysqli_fetch_array($user_check)) {
         		$ID = $row['ID'];
                $username = $row['username'];
                $password = $row['password'];
                $userlevel = $row['userlevel'];
                $lname = $row['lastname'];
                $fname = $row['firstname'];
                $contactno = $row['contact'];
               
              }
        if ( empty($lname) && empty($fname) && empty($userlevel) && empty($contactno) ){
		        echo"   <script type='text/javascript'>
					 $(window).load(function(){        
					   $('#promptModal').modal('show');
					    }); 
					</script>";
				}
?>


<div id="promptModal" data-controls-modal="promptModal" data-backdrop="static" data-keyboard="false" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:20%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
         <h4 class="modal-title">NOTICE:</h4>
      </div>
      <div class="modal-body">
        <p>PLEASE UPDATE YOUR PROFILE!</p>
      </div>
      <div class="modal-footer">
        
         <a href="profile.php?id=<?php echo $id; ?>" style="width:100%" class="btn btn-info" >OKAY</a>
      </div>
    </div>

  </div>
</div>


</body>
</html>

