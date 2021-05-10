<!-- session -->
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
<!-- getid -->
<?php
    $ID=$_GET['ID'];
    $sql=mysqli_query($openconnection,"SELECT * FROM tblsocial where ID='$ID'") or die(mysql_error());
    $row=mysqli_fetch_array($sql);
?>
<!-- updatefunction -->
 <?php

  if(isset($_POST['btnUpdate']))
  {
    $ID = $_GET['ID'];
     $idnumber = strtoupper($_POST['idnumber']);
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $civil = $_POST['civil'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $religion = $_POST['religion'];
    $occupation = $_POST['occupation'];
    $educattain = $_POST['educattain'];
    $housenumber = $_POST['housenumber'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $timedate = date('Y/m/d h:i:sa');
    date_default_timezone_set('Asia/Manila');

    $update= mysqli_query($openconnection,"UPDATE tblsocial set idnumber='$idnumber', lastname='$lastname', firstname='$firstname', middlename='$middlename', age='$age',civil='$civil',gender='$gender',birthdate='$birthdate',birthplace='$birthplace',religion='$religion',occupation='$occupation',educattain='$educattain',housenumber='$housenumber',contact='$contact',email='$email',status='$status' where id=".$_GET['ID']);

     $logs = mysqli_query($openconnection,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' updated a patient information.',NOW())");
     mysqli_query($openconnection,$update);
       echo "
    <script type='text/javascript'>
        alert('Patient successfully updated!');
                open('socialadd.php','_self');
            </script>
     ";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patient Information</title>
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
  <body onload="check();" style="background-image:url(images/PHDLogo.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
    <?php include("header.php");?>

  <div id="sidebar-collapse" style="background-color:#006446;opacity: 0.9;" class="col-sm-3 col-lg-2 sidebar">
    
    <ul class="nav menu">
      <li><a href="dashboard.php"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li  class="active"><a href="patient.php"><em class="fa fa-users">&nbsp;</em> Resident's Information</a></li>
      <li><a href="medicine.php"><em class="fa fa-pills">&nbsp;</em> Medicine Records</a></li>
     
      
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
        <li class="active">Resident's Information</li> <li class="active"> Edit Resident's Information</li>
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
 -->          <h3 class="modal-title"><em class="fa fa-users">&nbsp;</em>EDIT RESIDENT'S INFORMATION</h3>
        </div>
        <div >
        <div class="row">
        <div class="modal-body">
           
          <div class="col-md-6">
          <label>ID NUMBER</label>

           <input class="form-control" type="text"  autofocus id="idnumber" value="<?php echo $row['idnumber']; ?>" name="idnumber"  required readonly >
          </div>
           <br/><br/><br/><br/>
           <div class="col-md-6">
            <label>LAST NAME</label>
            <input type="text"   name="lastname" value="<?php echo $row['lastname']; ?>" id="lastname" style="text-transform:uppercase" maxlength="20" class="form-control"  required onkeypress="return alpha(event,letters3)">
          </div>
          <div class="col-md-6">
            <label>FIRST NAME</label>
            <input type="text"   name="firstname" value="<?php echo $row['firstname']; ?>" id="firstname" style="text-transform:uppercase" maxlength="100" class="form-control"  required onkeypress="return alpha(event,letters3)">
          </div>
             <br/><br/><br/><br/>
          <div class="col-md-6">
            <label>MIDDLE NAME</label>
            <input type="text"   name="middlename" value="<?php echo $row['middlename']; ?>" id="middlename" style="text-transform:uppercase" maxlength="100" class="form-control"  required onkeypress="return alpha(event,letters3)">
          </div>
          
          <div class="col-md-6">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="age" name="age"  maxlength="3" required value="<?php echo $row['age']; ?>" onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>
         </br></br></br></br>

          <div class="col-md-6">
                  
                 <label>GENDER</label>
                 <select name="gender" id="gender" required="required" style="width:385px;padding:3%;border-color:#ddd;border-radius:5px;" value="<?php echo $row['gender']; ?>">
                 
                  <option value="MALE">MALE</option>
                  <option value="FEMALE">FEMALE</option>
                   </select>
          </div>
           <div class="col-md-6">
                  <label>CIVIL STATUS</label>
                  <select name="civil" id="civil" required="required" style="width:385px;padding:3%;border-color:#ddd;border-radius:5px;" >
                    <?php
                        if($row['civil']=="Single"){
                          echo'
                            <option value="Single" selected>Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row['civil']=="Married"){
                          echo'
                            <option value="Single">Single</option>
                            <option value="Married" selected>Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row['civil']=="Widow"){
                          echo'
                            <option value="Single">Single</option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="Widow" selected>Widow</option>';
                          }
                      ?>
                    </select>
                  </div>

                   </br></br></br></br>
                   <div class="col-md-6">
                  <label>BIRTH DATE</label>
                    <input type="text"   name="birthdate"  id="birthdate" style="text-transform:uppercase" maxlength="30" class="form-control"  required value="<?php echo $row['birthdate']; ?>">  
                </div>   
                <div class="col-md-6">
                  <label>BIRTH PLACE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="birthplace" name="birthplace" style="text-transform:uppercase" maxlength="50" required onkeypress="return alpha(event,letters3)" value="<?php echo $row['birthplace']; ?>">
                  </div>
                </div>

                   </br></br></br></br>
                   <div class="col-md-6">
                  <label>RELIGION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="religion" name="religion" style="text-transform:uppercase" maxlength="30" required onkeypress="return alpha(event,letters3)" value="<?php echo $row['birthplace']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>HOUSE NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="housenumber" name="housenumber" maxlength="4" required onkeypress="return alpha(event,numbers)" value="<?php echo $row['housenumber']; ?>">
                
              </div>
              </div>

               </br></br></br></br>
               <div class="col-md-6">
                  <label>CONTACT NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="contact" name="contact"  maxlength="11" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" onkeypress="return alpha(event,numbers)" value="<?php echo $row['contact']; ?>" >
                  </div>
                </div>

                <div class="col-md-6">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" required onkeypress="return alpha(event,email)" maxlength="100" value="<?php echo $row['email']; ?>" > 
                 </div>
               </div>

                </br></br></br></br>
               <div class="col-md-6">
                  <label>OCCUPATION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="occupation" name="occupation" maxlength="10" required onkeypress="return alpha(event,letters3)" value="<?php echo $row['occupation']; ?>">
                
              </div>
              </div>
              <div class="col-md-6">
                  <label>EDUCATIONAL ATTAINMENT</label>
                  <div class="md-form mt-0">
                   <select name="educattain" id="educattain" required="required" style="width:385px;padding:3%;border-color:#ddd;border-radius:5px;">
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
                      ?>
                    </select>
                  </div>
                </div>
  </br></br></br></br>
              <div class="col-md-6">
                  <label>STATUS</label><br>
 <div class="md-form mt-0">
                   <select name="status" id="status" required="required" style="width:385px;padding:3%;border-color:#ddd;border-radius:5px;" value="<?php echo $row['status']; ?>">
                      <option>4PS</option>
                      <option>PWD</option>
                      <option>SENIOR CITIZEN</option>
                      <option>SOLO PARENT</option>
                      <option>NONE</option>
                    </select>
             </div>
           </div>
    </div>
        </div><br/>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="btnUpdate"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
         <a href="patient.php"> <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back</button></a>
        </div>
    
      </div>
      
    </div>
  </div>
  
  </form>
          </div>
        </div>
      </div><!--/.col-->
      <!-- <div class="col-sm-12">
        <p style="color:#fff;" class="back-link">&copy;  2019 Medical Records Management System. All rights reserved.</p>
      </div> -->
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
  
</body>
</html>
