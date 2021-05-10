<!-- session -->
<?php include("session.tpl");?>

<!-- getuser -->
<?php
$con = mysqli_connect("localhost","root","","db_record");
$id = $_SESSION["id"];
$sql = mysqli_query($con,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
?>
<!-- update_profile -->
<?php
  $con=mysqli_connect("localhost","root","","db_record");
 
    
if(isset($_POST['btnUpdate']))
  {
    $userlevel     = ($_POST['userlevel']);
    $lastname         = ($_POST['lastname']);
    $firstname         = ($_POST['firstname']);
    $email         = ($_POST['email']);
    $new_pass      = ($_POST['new_pass']);
    $username      = ($_POST['username']);
    $contact     = ($_POST['contact']);
       
    // date_default_timezone_set('Asia/Manila');
    // $date = date('Y/m/d h:i:sa');
    $con =mysqli_connect("localhost","root","","db_record");
     //INSERT INTO tbl_facade(image) VALUES('$storedFile')
     if (($_POST['old_pass'])== $new_pass) {
         echo "
    <script type='text/javascript'>
        alert('Unable to use default password! Please set your new Password.');
         
            </script>
     ";
     } 
     elseif ($new_pass != ($_POST['conf_pass'])) {
         echo "
    <script type='text/javascript'>
        alert('Password do not match!');
        
            </script>
     ";
     } 
 
  else{
    $update="UPDATE tbluser SET username='$username', password='$new_pass', userlevel = '$userlevel',
    lastname = '$lastname', firstname = '$firstname', contact='$contact', email='$email' WHERE ID='$id'";
      //logs
        $check = "SELECT * FROM tbluser WHERE ID = $id ";
        $user_check = mysqli_query($con, $check);

         while ($row = mysqli_fetch_array($user_check)) {
                $ID = $row['ID'];
                $username = $row['username'];
                $password = $row['password'];
                $userlevel = $row['userlevel'];
                $lastname = $row['lastname'];
                $firstname = $row['firstname'];
                $contactno = $row['contact'];
               
              }
        if ( empty($lname) && empty($fname) && empty($userlevel) && empty($contactno) ){
        $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('admin','$username',' updated user profile.',NOW())");
        }
        else{
        $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' updated user profile.',NOW())");
        }
     mysqli_query($con,$update);
       echo "
    <script type='text/javascript'>
        alert('You have successfully updated your profile!');
                
            </script>
     ";


   }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit User Profile</title>
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
  <link rel="icon" type="images/png" href="images/user.png"/>
<!--===============================================================================================-->

</head>
<body style="background: url(images/perezBrgyhall.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
  <?php include("header.php");?>
  <div id="sidebar-collapse" style="background-color:#ff69b4;opacity: .1;" class="col-sm-3 col-lg-2 sidebar">
    
    <ul class="nav menu">
      <li><a href="dashboard.php" style="color:white;"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li><a href="socialadd.php" style="color:white;"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li><a href=""  style="color:white;"><em class="fa fa-users">&nbsp;</em> Task</a></li>
      <li><a href="usermgmt.php"  style="color:white;"><em class="fa fa-users">&nbsp;</em>Add User</a></li>
      <li><a href="userlogs.php" style="color:white;"><em class="fa fa-tasks">&nbsp;</em> User Logs</a></li></a></li>
      <li><a  style="color:white;"data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
          
        </ul>
      </li>
      <li><a style="color:white;" data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
        <li class="active">User Management</li><li class="active">Edit User Profile</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <!-- <div class="col-lg-12">
        <h1 class="page-header" style="color:#fff;"></h1>
      </div> --><br/>
    </div><!--/.row-->
    
    
<div class="row">
      <div class="col-md-8" style="margin-left:15%;">
        <div class="panel panel-default">
          <div class="panel-heading">
            Edit User Profile
          </div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <!-- content -->

  <form class="form-group" autocomplete="off" action="profile.php?id=<?php echo $user['ID'] ?>" method="POST">
    
    <?php
    
    $con=mysqli_connect("localhost","root","","db_record");
  
      $check = "SELECT * FROM tbluser WHERE ID = $id ";
        $user_check = mysqli_query($con, $check);

         while ($row = mysqli_fetch_array($user_check)) {
            $ID = $row['ID'];
                $username = $row['username'];
                $password = $row['password'];
                $userlevel = $row['userlevel'];
                
              }
        if ( !empty($userlevel)){ ?>
            
            <div class="col-md-6">
        <label for="userlevel">USER LEVEL</label><br/>
        <input type="text" class="form-control" name="select_userlevel" id="select_userlevel"  readonly style="text-transform:uppercase"   
          value="<?php echo $user['userlevel'] ?>">

      </div>
      <?php } else{?>

           
       <div class="col-md-6">
      <label for="userlevel">USER LEVEL</label><br/>
      <select name="userlevel" id="userlevel" style="width:100%;padding:12px;border-color:#ddd;border-radius:5px;">
        <option disabled></option>
        <option value="admin">ADMIN</option>
        <option value="BHW Worker">BHW Worker</option>
         <option value="BHW Worker">Secretary</option>
      </select>
      </div>
            
<?php }?>
    
     
    <div class="col-md-6">
      <input type="hidden" name="id" id="id" value="<?php echo $user['ID']?>">
      <label for="lname">LAST NAME</label><br/>
      <input type="text" class="form-control" id="lastname" autofocus style="text-transform:capitalize" required  name="lastname" value="<?php echo $user['lastname'] ?>">
    </div>
    <div class="col-md-6">
      <input type="hidden" name="id" id="id" value="<?php echo $user['ID']?>">
      <label for="firstname">FIRST NAME</label><br/>
      <input type="text" class="form-control" id="firstname" autofocus style="text-transform:capitalize" required  name="firstname" value="<?php echo $user['firstname'] ?>">
    </div>
    
    <div class="col-md-6">
            <label >CONTACT&nbsp;NUMBER</label>
            <input class="form-control" type="number" required  id="contact" name="contact" required  data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" value="<?php echo $user["contact"] ?>">
          </div>
     <div class="col-md-6">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="age" name="age"  maxlength="3"  required onkeypress="return alpha(event,numbers)">
                  </div>
                </div>     
    <?php
    
    $con=mysqli_connect("localhost","root","","db_record");
  
      $check = "SELECT * FROM tbluser WHERE ID = $id ";
        $user_check = mysqli_query($con, $check);

         while ($row = mysqli_fetch_array($user_check)) {
            $ID = $row['ID'];
                $username = $row['username'];
                
              }
    if($username!='admin')
    {?>
     <div class="col-md-6">
      <label for="username">USERNAME</label><br/>
      <input type="text" class="form-control" id="username" readonly   value="<?php echo $user['username']?>"  name="username">
      </div>
    <?php }else{?>
     <div class="col-md-6">
      <label for="username">USERNAME</label><br/>
      <input type="text" class="form-control" id="username" required  value="<?php echo $user['username']?>"  name="username">
      </div>
    <?php }?>
    
    <div class="col-md-6">
      <label for="set_pass"> OLD PASSWORD</label><br/>
      <input type="password" class="form-control" readonly style="disabled:true" value="<?php echo $user['password']?>" onChange ="checkPasswordMatch()" id="old_pass" name="old_pass">
       
    </div>

    <div class="col-md-6">
      <label for="set_pass"> NEW PASSWORD</label><br/>
      <input type="password" class="form-control"   onChange ="checkPasswordMatch()" id="new_pass" name="new_pass">
<!--         <input type="checkbox"> 
 -->        <input type="checkbox"  onclick="showPassword()" class="custom-control-input" id="customCheck1">
         <label class="custom-control-label custom-control-description" for="customCheck1">Show Password</label>
       
    </div>
    <div class="col-md-6">
      <label for="set_pass"> CONFIRM PASSWORD</label><br/>
      <input type="password" class="form-control"   onChange ="checkPasswordMatch()" id="conf_pass" name="conf_pass">
       <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>

    </div>
   
     <div class="col-md-6">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" required value="<?php echo $user['password']?>"> 
                 </div>
               </div>

    <script type="text/javascript">
  function showPassword() {
  var x = document.getElementById("old_pass");
  var y = document.getElementById("new_pass");
  var z = document.getElementById("conf_pass");
  if (x.type === "password" && y.type === "password" && z.type === "password") {
    x.type = "text";
    y.type = "text";
    z.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
    z.type = "password";
  }
}

  //Checking Password and Username
  function checkPasswordMatch() {
    var oldpass = $("#old_pass").val();
    var newpass = $("#new_pass").val();
    var confpass = $("#conf_pass").val();
  if (oldpass == newpass) 
        $("#divCheckPasswordMatch").html("Please set a new password!");
      
    else if (newpass != confpass)
        $("#divCheckPasswordMatch").html("Password do not match!");
    else
        $("#divCheckPasswordMatch").html("Password match.");

}

$(document).ready(function () {
   $("#old_pass, #new_pass,#conf_pass").keyup(checkPasswordMatch);
});

    </script>
    <div style="float:right;margin-top:5%;">

    <a href="edit_profile.php?ID=<?php echo $user['ID'] ?>"> <button type="submit" id="btnUpdate"  name="btnUpdate"  class="btn btn-primary">
      <span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
    </a>
    <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
              <!-- content -->
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
      <div class="col-sm-12">
        <p style="color:#fff;" class="back-link">&copy;  2021 Community Profiling System. All rights reserved.</p>
      </div>
    </div><!--/.row-->
  </div>  <!--/.main-->
  
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>

</body>
</html>

