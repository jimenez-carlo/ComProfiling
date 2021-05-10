<!-- session -->

<!-- connection -->
<?php include "connect.php";
?> 
<?php include "socialeditprocess.php";
?>
<?php include "socialdeleteprocess.php"; ?>

<?php
$open_connection = mysqli_connect("localhost","root","","db_record");
  
  if (isset($_GET['edit']))//FETCHING SPECIFIC RECORD USING ID REFERENCE FROM THE "EDIT" LINK
    {
      $query = mysqli_query($open_connection, "SELECT lastname, firstname, middlename, age, gender, civilstatus, birthdate, birthplace, religion, datemodified, housenumber, contact, email, occupation, educattain, status FROM tblsocial WHERE ID=".$_GET['edit']);
      
      $row = mysqli_fetch_assoc($query);

      ?>










<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>People</title>
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
<body style="background-color:#FFB6C1;background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
  <?php include("header.php");?>
  <div id="sidebar-collapse" style="background-color:#ff69b4;opacity: 1.1;" class="col-sm-3 col-lg-2 sidebar">
    
    <ul class="nav menu">
      <li><a href="dashboard.php"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li class="active"><a href="viewsocial.php"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li><a href=""  style="color:white;"><em class="fa fa-users">&nbsp;</em> Task</a></li>
      <li><a href="edit_profile.php"  style="color:white;"><em class="fa fa-users">&nbsp;</em>User Profile</a></li>
      <li><a href="usermgmt.php"  style="color:white;"><em class="fa fa-users">&nbsp;</em>Add User</a></li>
    
      
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
        <li class="active"> Edit People's Information</li>
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
            Edit People's Information
          </div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <!-- content -->
              <div class="table-responsive">
                <form role="form" method="POST" action="editsocial.php">
                <div class="form-group">

                  
                </div>
                <div class="card card-default">
    <div>
      <div class="card-body">
        <form class="border border-light p-5" name="editform" method="post" enctype="multipart/form-data">
              <div class="form-row mb-4">
               <div class="col-md-6">
                  <label>LAST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id= "lastname" name="lastname" value="<?php echo $row['lastname'];?>" maxlength="20" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>FIRST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'];?>" maxlength="20" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>MIDDLE NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="middlename" name="middlename" value="<?php echo $row['middlename'];?>" maxlength="20"  onkeypress="return alpha(event,letters3) " >
                  </div>
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col-md-6">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                     <input class="form-control" type="text" id="age" name="age" value="<?php echo $row['age'];?>" maxlength="3" onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>GENDER</label>
                  <div class="md-form mt-0">
                    <select class="form-control" id="gender" name="gender"  required>
                      <?php
                        if($row['gender']=="Male"){
                          echo'
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>';
                          }
                        elseif($row['gender']=="Female"){
                          echo'
                            <option value="MALE">MALE</option>
                            <option value="Female" selected>Female</option>';
                          }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>CIVIL STATUS</label>
                  <div class="md-form mt-0">
                    <select class="form-control" id="civilstatus" name="civilstatus"  required>
                      <?php
                        if($row['civilstatus']=="Single"){
                          echo'
                            <option value="Single" selected>Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row['civilstatus']=="Married"){
                          echo'
                            <option value="Single">Single</option>
                            <option value="Married" selected>Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row['civilstatus']=="Widow"){
                          echo'
                            <option value="Single">Single</option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="Widow" selected>Widow</option>';
                          }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col-md-6">
                  <label>BIRTH DATE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="date" id="birthdate" name="birthdate" value="<?php echo $row['birthdate'];?>" maxlength="30">
                </div>
               <div class="col-md-6">
                  <label>BIRTH PLACE</label>
                  <div class="md-form mt-0">
                   <input class="form-control" type="text" id="birthplace" name="birthplace" value="<?php echo $row['birthplace'];?>" maxlength="50" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>RELIGION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="religion" name="religion" value="<?php echo $row['religion'];?>" maxlength="30" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
              </div>

             
                <div class="col-md-6">
                  <label>HOUSE NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="housenumber" name="housenumber" value="<?php echo $row['housenumber'];?>" maxlength="4" onkeypress="return alpha(event,numbers)">
                
              </div>
              </div>
              
                <div class="col-md-6">
                  <label>CONTACT NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="contact" name="contact" value="<?php echo $row['contact'];?>" maxlength="11" onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>

               <div class="col-md-6">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $row['email'];?>" maxlength="100" onkeypress="return alpha(event,email)">  
                 </div>
               </div>

              <div class="form-row mb-4">
                <div class="col-md-6">
                  <label>OCCUPATION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="occupation" name="occupation" value="<?php echo $row['occupation'];?>" onkeypress="return alpha(event,letters3)">
                  </div>
                </div>
               
              
                <div class="col-md-6">
                  <label>EDUCATIONAL ATTAINMENT</label>
                  <div class="md-form mt-0">
                    <select name="educattain" class="form-control" required>
                       <?php
                        if($row['educattain']=="ELEMENTARY"){
                          echo'
                            <option selected>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row['educattain']=="HIGH SCHOOL GRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option selected>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row['educattain']=="COLLEGE UNDERGRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option selected>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row['educattain']=="COLLEGE GRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option selected>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                          elseif($row['educattain']=="OUT OF SCHOOL"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option selected>OUT OF SCHOOL</option>';
                          }
                      }?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>STATUS</label><br>
                <!-- Default inline 1 -->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline1"  name="status[]" value="4PS"  >
                      <label class="custom-control-label" for="defaultInline1" >4Ps</label>
                    </div>

                <!-- Default inline 2-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline2"  name="status[]" value="PWD"  >
                      <label class="custom-control-label" for="defaultInline2" >PWD</label>
                    </div>

                <!-- Default inline 3-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline3"  name="status[]" value="SENIOR CITIZEN"  >
                      <label class="custom-control-label" for="defaultInline3" >SENIOR CITIZEN</label>
                    </div>

                <!-- Default inline 3-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline4"  name="status[]" value="SOLO PARENT"  >
                      <label class="custom-control-label" for="defaultInline4" >SOLO PARENT</label>
                    </div>

                <!-- Default inline 3-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline5"  name="status[]" value="NONE"  >
                      <label class="custom-control-label" for="defaultInline5" >NONE</label>
                    </div>
                </div>
              </div>

              
              <div class="form-row mb-4">
               <div class="col-md-6">
                  <label>DATE & TIME ADDED</label>
                  <div class="md-form mt-0">
                    <input readonly class="form-control" type="text" id="spouse" name="datemodified" maxlength="50"  value="<?php
                      date_default_timezone_set("Asia/Manila");
                        $now = new DateTime();
                        echo $now->format('F d, Y g:i:s A');
                      ?>">
                  </div>
                </div>
                <div class="col">
                  
                  <div class="md-form mt-0">
                    <input readonly class="form-control" hidden>
                  </div>
                </div>
              </div>

              <div class="form-row mb-4">
                <div class="col">
                  <button style="margin-right: 20px; margin-top: 20px; padding-left: 40px; padding-right: 40px;" class="btn btn-primary" type="submit" name="batnUpdate">SAVE</button>
                  <a style="margin-top: 20px;" href="dashboard.php" class="btn btn-secondary">BACK</a>
                  

                  
              </div>

            
</div>
        </form>
      </div>
   
                </div>
    </div><!-- /.row -->
  </div><!--/.main-->
                  </div>    
    </div>  
  </div>
</div>
<script type="text/javascript">
      var letters='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz'
      var letters2='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789'
      var letters3='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz '
      var address='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789,. '
      var numbers='1234567890'
      var idnum='1234567890-'
      var email='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890@._'
      var pass='abcdefghijklmnopqrstuvwxyz0123456789'
      function alpha(e,allow) {
      var k;
      k=document.all?parseInt(e.keyCode): parseInt(e.which);
      return (allow.indexOf(String.fromCharCode(k))!=-1);
      }

</script>

<script> //for tooltip
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>