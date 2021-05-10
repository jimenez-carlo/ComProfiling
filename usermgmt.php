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
 <!-- textsearch -->
 <?php

    $txtsearch="";
    if(isset($_POST['btnsearch'])){
      $txtsearch = $_POST['txtsearch'];
    } else if (isset($_GET['sc'])){
      $txtsearch = $_GET['sc'];
    }
?>
<!-- addfunction -->
<?php
if (isset($_POST["btnSave"])) {
     $userlevel     = ($_POST['select_userlevel']);
    $lname         = ($_POST['lname']);
    $fname         = ($_POST['fname']);
    $age         = ($_POST['age']);
    $gender         = ($_POST['gender']);
    $new_pass      = ($_POST['new_pass']);
    $username      = ($_POST['username']);
    $contactno     = ($_POST['contactno']);
    $email     = ($_POST['email']);
    $comparemed = mysqli_query($con,"SELECT * FROM tbluser WHERE username = '$username'");
    if (mysqli_num_rows($comparemed) > 0) {
      echo "
        <script type='text/javascript'>
          alert('Sorry! That username is already existing!Please try another.');
          open('usermgmt.php','_self');
        </script>
     ";  
   }
    elseif ($new_pass != ($_POST['conf_pass'])) {
         echo "
    <script type='text/javascript'>
        alert('Password do not match!');
          open('usermgmt.php?id=$id','_self');
            </script>
     ";
     } 
   else{
     $insert="INSERT INTO tbluser(username,password,userlevel,lastname,firstname,contact,age,gender,email) 
    VALUES('$username','$new_pass','$userlevel','$lname','$fname','$contactno','$age','$gender','$gender') ";
    //logs
    $id = $_SESSION["id"];
$sql = mysqli_query($con,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
$userlevel=$user['userlevel'];
      $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' added a user.',NOW())");
      mysqli_query($con,$insert);

     echo "
        <script type='text/javascript'>
          alert('You have successfully added a user!');
          open('usermgmt.php','_self');
        </script>
     ";
  }
}
?>
<!-- deletefunction -->
<script>
                        function confirm_del()
                        {
                          if(confirm("Are you sure you want to delete this record?")==1){
                            document.getElementById('deleteBtn').submit();
                          }
                        }
                      </script><?php 
                      if(isset($_POST['deleteBtn']))

                        {
                          $ID = $_POST['ID'];
                           $que="DELETE from tbluser WHERE ID='$ID'" or die(mysql_error());
                            mysqli_query($con,$que);
                          //logs
                    $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
                      VALUES ('$userlevel','$username',' deleted a user.',NOW())");
                          echo"
      <script type='text/javascript'>
        alert('You have successfully deleted a user!');
        open('usermgmt.php','_self');
      </script>
    ";
                        }


?>
<style type="text/css">

</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Management</title>
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
  <link rel="icon" type="images/png" href="images/usermgmt.png"/>
<!--===============================================================================================-->

</style>
</head>
  <body style="background-color:#FFB6C1;background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
    <?php include("header.php");?>

  <div id="sidebar-collapse" style="background-color:#ff69b4;;opacity: 1.1;" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li><a href="dashboard.php" style="color:white;"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li ><a href="socialadd.php" style="color:white;"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li ><a href=""  style="color:white;"><em class="fas fa-project-diagram">&nbsp;</em> Task</a></li>
      <li class="active"><a href="usermgmt.php"  ><em class="fas fa-user-plus">&nbsp;</em>Add User</a></li>
      <li><a href="userlogs.php" style="color:white;"><em class="fa fa-tasks">&nbsp;</em> User Logs</a></li>
      <li><a  style="color:white;"data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div>
      
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
        <a href="logout.php" class="btn btn-danger" type="submit" style="text-decoration:none;">Logout</a>
      </div>
    </div>

  </div>
</div> <!-- endmodal -->

    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home" style="color:#ff69b4;"></em>
        </a></li>
        <li class="active">User Management</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <!-- <div class="col-lg-12">
        <h1 class="page-header">UI Elements</h1>
      </div> --> <br/>
    </div><!--/.row-->
      
        <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading" style="color:#ff69b4;">
            User Management
            <button type="button" class="btn btn-primary" style="float: right; background-color:#ff69b4;" data-toggle="modal" data-target="#addModal"><em class="fa fa-plus-square"  >&nbsp;&nbsp;</em>Add User</button></div>
          <div class="panel-body">
            <div class="canvas-wrapper">
          
          <!--  <div class="col-md-6"> -->
              <form role="form" method="POST" action="usermgmt.php">
                <div class="form-group">

                  
                </div>
<div class="table-responsive">
<table class="table table-hover table-fixed">
  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>User Level</th>
      <th>Username</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Email Address</th>
      <th>Contact Number</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Action</th>
    </tr>
  </thead>
  <!--Table head-->
  <?php
      if($txtsearch==""){
        $query = "SELECT * FROM tbluser ORDER BY ID DESC ";
      } else {
        $query = "SELECT * FROM tbluser WHERE ID LIKE '%$txtsearch%' OR username LIKE '%$txtsearch%' 
        OR lastname LIKE '%$txtsearch%' OR firstname LIKE '%$txtsearch%' OR contact LIKE '%$txtsearch%'";
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
      $result = mysqli_query( $con,$query);
      // if(!$result){
    //            echo "No Records Found";
    //        }
    //      else{
        if($recordCount = mysqli_num_rows($result)){
  
    while($row = mysqli_fetch_array($result)){
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $ID=$row['ID'] ?></th>
          <td ><?php echo $row['userlevel'] ?></td>
          <td ><?php echo $user_name=$row['username'] ?></td>
          <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['lastname'] ?></td>
          <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['firstname'] ?></td>
           <td ><?php echo $row['email'] ?></td>
          <td ><?php echo $row['contact'] ?></td>
            <td ><?php echo $row['age'] ?></td>
          <td ><?php echo $row['gender'] ?></td>
          <td> 
            <form method="POST" >
              <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID']; ?>"/>
       <?php    
          
    if($user['username']==$user_name)
    {?>
                      <!-- deleteMedicineButton -->
                        <button type="submit" value="Delete" disabled onclick="confirm_del();return false;" style="margin-top: -2px;padding:5px 9px 7px 9px;" name="deleteBtn" id="deleteBtn"  class="btn btn-danger btn-sm" />
                       <span class='glyphicon glyphicon-trash'> </span></button>
                       <!-- deleteMedicine -->
              <?php }else{ ?>   
              <!-- deleteMedicineButton -->
                        <button type="submit" value="Delete"  onclick="confirm_del();return false;" style="margin-top: -2px;padding:5px 9px 7px 9px;" name="deleteBtn" id="deleteBtn"  class="btn btn-danger btn-sm" />
                       <span class='glyphicon glyphicon-trash'> </span></button>
                       <!-- deleteMedicine -->
                <?php }?>        
                    </form>
                    </td>
        </tr>
      
      <?php 
          }}
          else{
            echo "<p >No records found.</p>";
            
          }

        ?>
  
  
</tbody>
</table>
</div>
<br/><br/>
<!--Table-->
    <?php
  $result=mysqli_query($con,"SELECT * FROM tbluser");
  $recordCount=mysqli_num_rows($result);
   echo "Total of $recordCount records | "; 
  
  $numberOfPages = ceil($recordCount/$limit);
  for($x=1;$x<=$numberOfPages;$x++){
    if($x==1)

    echo "<a href=usermgmt.php>ALL</a> | Page"; 
  echo " &nbsp; <a href=usermgmt.php?pn=$x&sc=$txtsearch>$x</a>";


}

?>
            
  
      
                </div>
              </form>
            <!-- </div> -->
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      <div class="col-sm-12">
        <p style="color:#fff;" class="back-link">&copy;  2021 Community Profiling System. All rights reserved.</p>
      </div>
    </div><!-- /.row -->
  </div><!--/.main-->
  
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <!-- modaaaaaaaaaaals -->
  <form method="POST">
  <!-- Modal -->
  <div class="modal fade" data-controls-modal="addModal" data-backdrop="static" data-keyboard="false" id="addModal" role="dialog">
    <div class="modal-dialog" style="margin-left: 28%; margin-top: 5%;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h3 style="color:#006446"><em style="padding-left:13px;"class="fa fa-user">&nbsp;&nbsp;&nbsp;</em>ADD USER</h3>
        </div>
        <div class="container" style="margin-bottom: 10px;">
        <div class="row">
        <div class="modal-body">
    
    <div class="col-md-3">
     
      <label for="lname">LAST NAME</label><br/>
      <input type="text" class="form-control" id="lname" autofocus style="text-transform:capitalize" required  name="lname" value="">
    </div>
    <div class="col-md-3">
     
      <label for="fname">FIRST NAME</label><br/>
      <input type="text" class="form-control" id="fname" autofocus style="text-transform:capitalize" required  name="fname" value="">
    </div>
    <br/><br/><br/><br/>
    <div class="col-md-3">
            <label >CONTACT&nbsp;NUMBER</label>
            <input class="form-control" type="number" required  id="contactno" name="contactno" required  data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" value="">
          </div>

    <div class="col-md-3">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" required  > 
                 </div>
               </div>
    <br/><br/><br/><br/>
 <div class="col-md-3">
     
      <label for="fname">AGE</label><br/>
      <input type="text" class="form-control" id="age" autofocus style="text-transform:capitalize" required  name="age" value="">
    </div>

 <div class="col-md-3">
                  
                 <label>GENDER</label>
                 <select name="gender" id="gender" required="required" style="width:260px;padding:3.9%;border-color:#ddd;border-radius:5px;">
                  <option hidden disabled selected>SELECT GENDER</option>
                  <option value="MALE">MALE</option>
                  <option value="FEMALE">FEMALE</option>
                   </select>
          </div>
   <br/><br/><br/><br/>
    <div class="col-md-3">
      <label for="userlevel">USER LEVEL</label><br/>
      <select name="select_userlevel" id="select_level" style="width:100%;padding:12px;border-color:#ddd;border-radius:5px;">
        <option disabled></option>
        <option value="Admin ">Admin</option>
        <option value="BHW Worker">BHW Worker</option>
        <option value="Brgy. Secretary">Brgy. Secretary</option>
      </select>
      </div>  
      <div class="col-md-3">
      <label for="username">USERNAME</label><br/>
      <input type="text" class="form-control" id="username" required  value=""  name="username">
    </div>
    <br/><br/><br/><br/>
    <div class="col-md-3">
      <label for="set_pass">SET PASSWORD</label><br/>
      <input type="password" class="form-control"   onChange ="checkPasswordMatch()" id="new_pass" name="new_pass">
         <input type="checkbox"  onclick="showPassword()" class="custom-control-input" id="customCheck1">
         <label class="custom-control-label custom-control-description" for="customCheck1">Show Password</label>
       </div>
    <div class="col-md-3">
      <label for="conf_pass">CONFIRM PASS</label><br/>
      <input type="password" class="form-control"   onChange ="checkPasswordMatch()" id="conf_pass" name="conf_pass">
       <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
  
    </div>
      <script type="text/javascript">
  function showPassword() {
  var y = document.getElementById("new_pass");
  var z = document.getElementById("conf_pass");
  if (y.type === "password" && z.type === "password") {
    y.type = "text";
    z.type = "text";
  } else {
    y.type = "password";
    z.type = "password";
  }
}

  //Checking Password and Username
  function checkPasswordMatch() {
    var newpass = $("#new_pass").val();
    var confpass = $("#conf_pass").val(); 
    if (newpass != confpass)
        $("#divCheckPasswordMatch").html("Password do not match!");
    else
        $("#divCheckPasswordMatch").html("Password match.");

}

$(document).ready(function () {
   $(" #new_pass,#conf_pass").keyup(checkPasswordMatch);
});

    </script> 
         
          </div>
      
        
    </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="btnSave"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
          <button type="reset" class="btn btn-danger" >Reset</button>
        </div>
    
      </div>
      
    </div>
  </div>
  </form>
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
        
         <a href="edit_profile.php?id=<?php echo $id; ?>" style="width:100%" class="btn btn-info" >OKAY</a>
      </div>
    </div>

  </div>
</div>

</body>
</html>
