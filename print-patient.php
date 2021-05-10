<?php include("session.tpl");?>
<!-- connection -->
<?php include('opendb.php');?>
<!-- getuser -->
<?php
$id = $_SESSION["id"];
$sql = mysqli_query($openconnection,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
$userlevel=$user['userlevel'];
?>
<!---- GET ID ---->
<?php
    $ID=$_GET['ID'];
    $sql=mysqli_query($openconnection,"SELECT * FROM tblsocial where ID='$ID'") or die(mysql_error());
    $row=mysqli_fetch_array($sql);
?>

<!----- PRINT --->    	
<?php
  if (isset($_GET['view'])) {

    $query3 = mysqli_query($openconnection,"SELECT lastname, firstname, middlename, age, civil, gender, birthdate, birthplace, religion, occupation, educattain, housenumber, contact, email ,status FROM tblsocial where id=".$_GET['view']);
    $row3 = mysqli_fetch_assoc($query3);
  }

?>

<!DOCTYPE html>
<html>
<head>
	<link href="print.css" media="print">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resident Information</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="fontawe/css/all.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 -->
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!--===============================================================================================-->  
  <link rel="icon" type="images/png" href="images/patientuser.png"/>
<!--===============================================================================================-->


</head>
  <body onload="check();" style="background-image:url(images/perezBrgyhall.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
    <?php include("header.php");?>

  <div id="sidebar-collapse" style="background-color:#ff69b4;opacity: 1.1;" class="col-sm-3 col-lg-2 sidebar">
    
    <ul class="nav menu">
      <li><a href="dashboard.php"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li  class="active"><a href="patient.php"><em class="fa fa-users">&nbsp;</em>Resident's Info</a></li>
    
     
      
    </div><!--/.row-->
  </div>  <!--/.main-->
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
        <a href="web/login.php" class="btn btn-danger" type="submit" style="text-decoration:none;">Logout</a>
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
        <li class="active">Resident Information</li> <li class="active"> Edit Resident's Information</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <!-- <div class="col-lg-12">
        <h1 class="page-header">UI Elements</h1>
      </div> --> <br/>
    </div><!--/.row-->

    <form method="POST" >
  <!-- Modal -->
  <input type="hidden" name="ID" value="<?php echo $ID; ?>">

      <!-- Modal content-->
      <div class="modal-content" style=" width: 80%; margin-left:10%;" >
        <div class="modal-header">
<!--           <button type="button" class="close" data-dismiss="modal">&times;</button>
 -->          <h3 class="modal-title"><em class="fa fa-users">&nbsp;</em>RESIDENT'S INFORMATION</h3>
        </div>
        <div >
        <div class="row">
        <div class="modal-body">
           
          

<style type="text/css">
  .tablePadding {
        padding-left: 15px;
      }
  .tablePadding1 {
        padding-left: 15px;
      }
  td.tablePadding {

    border-bottom: 1px solid black;
  }
  .card {

    background-image: url("");
    background-repeat: no-repeat;
    background-position: center;

  }

  .page
    {
     -moz-transform:rotate(-90deg);
     filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
    }

</style>
<div style="margin: 10px;">
  <div  class="card" style=" height: 40rem;" >
    <div class="card-header">
      <h5>VIEW DETAILS</h5>
    </div>
      <div class="card-body" style="background: url(images/perezlogo.png);background-position: top;  background-repeat: no-repeat; background-size: 150px 150px;" >
        <table align="center" style="margin-top: 150px;" id="printTable"  >
          <tr>
             
            <th>NAME:</th>
            <td class="tablePadding"  ><?php echo $row['lastname'].", ".$row['firstname']." ".$row['middlename'];?></td>
            <th class="tablePadding">HOUSE NUMBER: </th>
            <td class="tablePadding"  ><?php echo $row['housenumber'];?></td>

            
          </tr>
          <tr>
            <th>AGE: </th>
            <td class="tablePadding"><?php echo $row['age'];?></td>


          </tr>
          <tr>
            <th>GENDER: </th>
            <td class="tablePadding"><?php echo $row['gender'];?></td>


            <th class="tablePadding">EDUCATIONAL ATTAINMENT: </th>
            <td class="tablePadding"  ><?php echo $row['educattain'];?></td>
          </tr>
          <tr>
            <th>BIRTH DATE: </th>
            <td class="tablePadding"><?php echo $row['birthdate'];?></td>

            <th class="tablePadding">CONTACT NUMBER: </th>
            <td class="tablePadding"  ><?php echo $row['contact'];?></td>
          </tr>
          <tr>
            <th>BIRTH PLACE: </th>
            <td class="tablePadding"><?php echo $row['birthplace'];?></td>

            <th class="tablePadding">EMAIL ADDRESS: </th>
            <td class="tablePadding"  ><?php echo $row['email'];?></td>
          </tr>
          <tr>
            <th>CIVIL STATUS: </th>
            <td class="tablePadding"><?php echo $row['status'];?></td>
            <th class="tablePadding">OCCUPATION: </th>
            <td class="tablePadding"  ><?php echo $row['occupation'];?></td>
          </tr>
          <tr>
            <th>RELIGION: </th>
            <td class="tablePadding"  ><?php echo $row['religion'];?></td>

           
          </tr>

        </table>
        <div style="margin: 10px;">
  <a href="socialadd.php"><input type="button" value="Back"  class="btn btn-info"></a>
   <div class="btn-group" role="group" aria-label="Basic example" ;>
 
  <button class="btn btn-success page" onclick="window.print()" id="print-btn">Print</button>
        </form>
      </div>
      <div class="card-footer">

  

  </div>
</div>
</div>
  </div>
</div>
    </div>

<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript">

  function printData() {
    var divToPrint = document.getElementById('printTable');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:none;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
}
  
       function printData1()
{
   
    var divToPrint = document.getElementById('printTable1');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:none;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
}
</script>

<script> //for tooltip
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


</script>
</body>
</html>
