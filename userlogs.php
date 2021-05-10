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


 <?php
    $txtsearch="";
    if(isset($_POST['btnsearch'])){
      $txtsearch = $_POST['txtsearch'];
    } else if (isset($_GET['sc'])){
      $txtsearch = $_GET['sc'];
    }
?>
<!-- dashboardcounter -->
<?php
		$medc=mysqli_query($con,"SELECT * FROM tblmedicine  ");
		$medcc=mysqli_num_rows($medc);
		$pats=mysqli_query($con,"SELECT * FROM tblpatient");
		$patss=mysqli_num_rows($pats);
		
?>
<script type="text/javascript">
					function reset_logs()
                        {
                          if(confirm("Are you sure you want to reset user logs?")==1){
                            document.getElementById('resetlogs').submit();
                          }
                        }
                      </script><?php 
                      if(isset($_POST['resetlogs']))

                        {
                           $que="DELETE from tbllogs" or die(mysql_error());
                            mysqli_query($con,$que);
                    	//logs
						      $logs = mysqli_query($con,"INSERT INTO tbllogs (user_log,user_action,dt)
						        VALUES ('$username',' deleted all medical supplies.',NOW())");
                          echo"
							      <script type='text/javascript'>
							        alert('You have successfully deleted all saved logs!');
							        open('userlogs.php','_self');
							      </script>
							    ";
						   
						 }


?>

</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Logs</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="fontawe/css/all.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
<!-- 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 -->
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--===============================================================================================-->	
	<link rel="icon" type="images/png" href="images/userlogs.png"/>
<!--===============================================================================================-->

</head>
<body style="background: url(images/perezBrgyhall.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
	<?php include("header.php");?>
	<div id="sidebar-collapse" style="background-color:#ff69b4;;opacity: 1.3;" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			 <li><a href="dashboard.php" style="color:white;"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li ><a href="socialadd.php" style="color:white;"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li ><a href=""  style="color:white;"><em class="fas fa-project-diagram">&nbsp;</em> Task</a></li>
      <li><a href="usermgmt.php" style="color:white;"><em class="fas fa-user-plus">&nbsp;</em>Add User</a></li>
      <li class="active"><a href="userlogs.php" ><em class="fa fa-tasks">&nbsp;</em> User Logs</a></li>
      <li><a  style="color:white;"data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>

	</div>
			
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
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User Logs</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<!-- <div class="col-lg-12">
				<h1 class="page-header" style="color:#fff;"></h1>
			</div> --><br/>
		</div><!--/.row-->
		
	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						User Logs
						
<!-- 						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
 -->					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
<!-- 							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
 -->					<!--Table-->
 <form method="post" action="userlogs.php">
 		<div class="form-group">

                  <input type="text" class="form-control" name="txtsearch" id="txtsearch" value="<?php echo $txtsearch; ?>"  autofocus style="width: 89%" placeholder="Search . . .">
                  
                  <button type="submit" class="btn btn-default" name="btnsearch" style="margin-top: -46px;float:right; padding:12px;" id="btnsearch" value="Search"  / ><span class="fa fa-search" ></span>&nbsp;Search</button>
                </div>
 <div class="table-responsive">
<table class="table table-hover table-fixed">
	<!--Table head-->
  <thead>
    <tr>
      <th>User Level</th>
      <th>User Name</th>
      <th>Action</th>
      <th>Date/Time</th>
    </tr>
  </thead>
  <!--Table head-->

<?php
      if($txtsearch==""){
        $query = "SELECT * FROM tbllogs ORDER BY ID DESC";
      } else {
        $query = "SELECT * FROM tbllogs WHERE ID LIKE '%$txtsearch%' OR userlevel LIKE '%$txtsearch%'
         OR username LIKE '%$txtsearch%' OR action LIKE '%$txtsearch%' OR dt LIKE '%$txtsearch%' ";
      }
      // include('connection.php');

      $result = mysqli_query( $con,$query);
      if(isset($_GET['pn'])) {
        $pageNumber = $_GET['pn'];
      } else {
        $pageNumber=1;
      }
      $limit = 15;
      $offset = ($pageNumber*$limit)-$limit;

      $query .= " LIMIT $limit OFFSET $offset";
      //echo $query;
      $result = mysqli_query($con,$query);
      // if(!$result){
    //            echo "No Records Found";
    //        }
    //      else{
        if($recordCount = mysqli_num_rows($result)){
  
    while($row = mysqli_fetch_array($result)){
      ?>


			<tbody>
				<tr>
					<!-- <th scope="row"><?php echo $ID=$row['ID'] ?></th> -->
					<td style="text-transform:capitalize"><?php echo $row['userlevel']  ?></td>
					<td ><?php echo $row['username'] ?></td>
					<td ><?php echo $row['action'] ?></td>
					<td ><?php echo $row['dt'] ?></td>
				</tr>
			</tbody>
			<?php 
				}}
				

			?>
  

</table>
</div>
	<?php
	$result=mysqli_query($con,"SELECT * FROM tbllogs");
	$recordCount=mysqli_num_rows($result);
 echo "Total of $recordCount logs | "; 
  
$numberOfPages = ceil($recordCount/$limit);
for($x=1;$x<=$numberOfPages;$x++){
	if($x==1)

		echo "<a href=userlogs.php>ALL</a> | Page";	
	echo " &nbsp; <a href=userlogs.php?pn=$x&sc=$txtsearch>$x</a>";


}

?>
<!--Table-->
<!-- <button type="button" onclick="reset_logs();return false;" id="resetlogs" name="resetlogs" class="btn btn-md btn-danger" style="float:right">
	<em class="fa fa-refresh">&nbsp;</em>RESET USER LOGS</button> -->
	</form>
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



</body>
</html>

