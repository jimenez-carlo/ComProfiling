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

 <!-- search -->
 <?php
    $txtsearch="";
    if(isset($_POST['btnsearch'])){
      $txtsearch = $_POST['txtsearch'];
    } else if (isset($_GET['sc'])){
      $txtsearch = $_GET['sc'];
    }
?>
<!-- addpatient function -->
<?php
if (isset($_POST["btnSave"])) {
      $idnumber = $_POST['idnumber'];
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
     mysqli_query($openconnection,"INSERT into tblsocial(idnumber,lastname,firstname,middlename,age,civil,gender,birthdate,birthplace,religion,occupation,educattain,housenumber,contact,email,status) values('$idnumber','$lastname','$firstname','$middlename','$age','$civil','$gender','$birthdate','$birthplace','$religion','$occupation','$educattain','$housenumber','$contact','$email','$status')") or die(mysqli_error($openconnection));
    $patientid = mysqli_query($openconnection,"SELECT * FROM tblsocial WHERE idnumber = '$idnumber'");
    $logs = mysqli_query($openconnection,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' added a patient.',NOW())");
   
}
?>



<!-- delete -->
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
                          $stud = $_POST['studnoss'];
                           $que="DELETE from tblsocial WHERE ID='$ID'" or die(mysql_error());
                          
                             //logs
    $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' deleted a resident's information record.',NOW())");
                            mysqli_query($con,$que);
                          
                    
                          echo"
      <script type='text/javascript'>
        alert('Resident Information successfully deleted!');
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
  <title>Resident's Information</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="fontawe/css/all.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!--===============================================================================================-->  
  <link rel="icon" type="images/png" href="images/patientuser.png"/>
<!--===============================================================================================-->
<script type="text/javascript">

</script>
</head>
  <body onload="check();" style="background: url(images/perezBrgyhall.jpg);background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; ">
  <?php include("header.php");?>
  <div id="sidebar-collapse" style="background-color:#ff69b4;opacity: 1.2;" class="col-sm-3 col-lg-2 sidebar">
    
    <ul class="nav menu">
      <li><a href="dashboard.php" style="color:white;"><em class="fa fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
      <li class="active"><a href="socialadd.php" ><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li><a href=""  style="color:white;"><em class="fas fa-project-diagram">&nbsp;</em> Task</a></li>
      <li><a href="usermgmt.php"  style="color:white;"><em class="fas fa-user-plus">&nbsp;</em>Add User</a></li>
      <li><a href="userlogs.php" style="color:white;"><em class="fa fa-tasks">&nbsp;</em> User Logs</a></li>
      <li><a  style="color:white;"data-toggle="modal" data-controls-modal="logoutModal" data-backdrop="static" data-keyboard="false" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Resident's Information</li>
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
          <div class="panel-heading">
            Resident's Information
            
            <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#addModal" style="float:right;"><em class="fa fa-user-plus">&nbsp;&nbsp;</em>New Resident</button></div>
          <div class="panel-body">
            <div class="canvas-wrapper">
        
          <!--  <div class="col-md-6"> -->
              <form role="form" method="POST" action="socialadd.php">
                <div class="form-group">

                  <input type="text" class="form-control" name="txtsearch" id="txtsearch" value="<?php echo $txtsearch; ?>"  autofocus style="width: 91%" placeholder="Search . . .">
                  
                  <button type="submit" class="btn btn-default" name="btnsearch" style="margin-top: -46px;float:right; padding:12px;" id="btnsearch" value="Search"  / ><span class="fa fa-search" ></span>&nbsp;Search</button>
                </div>
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
      <th>Status</th>
       <th>Date/Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <!--Table head-->
  <?php
      if($txtsearch==""){
        $query = "SELECT * FROM tblsocial ORDER BY ID DESC";
      } else {
        $query = "SELECT * FROM tblsocial WHERE ID LIKE '%$txtsearch%' OR lastname LIKE '%$txtsearch%'
         OR firstname LIKE '%$txtsearch%' OR middlename LIKE '%$txtsearch%' OR age LIKE '%$txtsearch%' 
         OR gender LIKE '%$txtsearch%' OR birthdate LIKE '%$txtsearch%' 
         OR birthplace LIKE '%$txtsearch%' OR civil LIKE '%$txtsearch%' OR religion LIKE '%$txtsearch%' OR educattain LIKE '%$txtsearch%'  OR occupation LIKE '%$txtsearch%' OR contact LIKE '%$txtsearch%' OR email LIKE '%$txtsearch%' OR status LIKE '%$txtsearch%' OR status LIKE '%$txtsearch%'OR timedate LIKE '%$txtsearch%'";
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
          <!-- <th ><?php echo $ID=$row['ID'] ?></th> -->
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
           <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['status'] ?></td>
          <td  style="word-wrap: break-word;min-width: 150px;max-width: 150px;"><?php echo $row['timedate'] ?></td>
          <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"> 
            <form method="POST">
            <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID']; ?>"/>
  <input type="hidden" name="studnoss" id="studnoss" value="<?php echo $row['idnumber']; ?>"/>

          <a href="edit-social.php?ID=<?php echo $row['ID'] ?>" style="margin-top: -2px;padding:5px 9px 7px 9px;" class="pull right btn btn-info btn-sm " >
                         <span class="glyphicon glyphicon-pencil"></span>
                           </a>
          <a href="print-patient.php?ID=<?php echo $row['ID'] ?>" style=" background-color:#006446; lightyellow;margin-top: -2px;padding:5px 9px 7px 9px;" class="pull right btn btn-info btn-sm " >
                         <span class="glyphicon glyphicon-book"></span>
                           </a>            
                        
           <button  onclick="confirm_del();return false;" name="delete_button" type="submit" style= "background-color:red;margin-top: -2px;padding:5px 9px 7px 9px;" class="pull right btn btn-info btn-sm " >
                         <span class="glyphicon glyphicon-trash"></span>
                           </button>            
      <?php            
             if(isset($_POST['delete_button']))
    {
       $id = $_POST['ID'];
      $delete=  mysqli_query($openconnection, "delete from tblsocial where id='$id'");
        $logs = mysqli_query($openconnection,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' deleted a patient information.',NOW())");
     mysqli_query($openconnection,$delete);
       echo "
    <script type='text/javascript'>
        alert('Resident's Information successfully deleted!');
                open('socialadd.php','_self');
            </script>
     ";
    }           

                       
     ?>               
                    
                        </form>

                    </td>
        </tr>
      
      <?php 
          }}
          else{
            echo "<p>No records found.</p>";
            
          }

        ?>
  
  
</tbody>
</table>
</div>
<br/><br/>
<!--Table-->
    <?php
  $result=mysqli_query($con,"SELECT * FROM tblsocial");
  $recordCount=mysqli_num_rows($result);
 echo "Total of $recordCount records | "; 
  
$numberOfPages = ceil($recordCount/$limit);
for($x=1;$x<=$numberOfPages;$x++){
  if($x==1)

    echo "<a href=socialadd.php>ALL</a> | Page";  
  echo " &nbsp; <a href=socialadd.php?pn=$x&sc=$txtsearch>$x</a>";


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
  
<!--  modaaaaaaaaaaaaaaaaaals
 -->

<form method="POST">
  <!-- Modal -->
  <div class="modal fade" id="addModal" data-controls-modal="addModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog" style="margin-left: 20%;width:90%;margin-top:5%;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:70%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h3><em class="fa fa-users">&nbsp;</em>New People</h3>
        </div>
        <div class="container" style="margin-bottom: 10px;">
        <div class="row">
        <div class="modal-body">
         <div class="col-md-4">
          <label>ID NUMBER</label>
                    <input class="form-control" type="text" id= "idnumber" name="idnumber" placeholder="ID Number" maxlength="20" required  autofocus>
                  </div>
           <br/><br/><br/><br/>
           <div class="col-md-4">
            <label>LAST NAME</label>
            <input type="text"   name="lastname"  id="lastname" style="text-transform:uppercase" maxlength="100" class="form-control"  required>
          </div>


              <div class="col-md-4">
            <label>FIRST NAME</label>
            <input type="text"   name="firstname"  id="firstname" style="text-transform:uppercase" maxlength="100" class="form-control"  required>
          </div> 
            </br></br></br></br>
            <div class="col-md-4">
            <label>MIDDLE NAME</label>
            <input type="text"   name="middlename"  id="middlename" style="text-transform:uppercase" maxlength="100" class="form-control"  required>
          </div> 
          
          <div class="col-md-4">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="age" name="age"  maxlength="3"  required onkeypress="return alpha(event,numbers)">
                  </div>
                </div>
         </br></br></br></br>
           <div class="col-md-4">
                  
                 <label>GENDER</label>
                 <select name="gender" id="gender" required="required" style="width:350px;padding:3.5%;border-color:#ddd;border-radius:5px;">
                  <option hidden disabled selected>SELECT GENDER</option>
                  <option value="MALE">MALE</option>
                  <option value="FEMALE">FEMALE</option>
                   </select>
          </div>
           <div class="col-md-4">
                  <label>CIVIL STATUS</label>
                  <select name="civil" id="civil" required="required" style="width:350px;padding:3.5%;border-color:#ddd;border-radius:5px;">
                      <option hidden disabled selected>SELECT STATUS</option>
                      <option>Single</option>
                      <option>Married</option>
                      <option>Widow</option>
                    </select>
                  </div>

                   </br></br></br></br>
                <div class="col-md-4">
                  <label>BIRTH DATE</label>
                    <input type="text"   name="birthdate"  id="birthdate" style="text-transform:uppercase" maxlength="100" class="form-control"  required>  
                </div>   
                <div class="col-md-4">
                  <label>BIRTH PLACE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="birthplace" name="birthplace" style="text-transform:uppercase"  required >
                  </div>
                </div>

                   </br></br></br></br>
                   <div class="col-md-4">
                  <label>RELIGION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="religion" name="religion" style="text-transform:uppercase" maxlength="30" required >
                  </div>
                </div>
                <div class="col-md-4">
                  <label>HOUSE NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="housenumber" name="housenumber" maxlength="4" required>
                
              </div>
              </div>

               </br></br></br></br>
               <div class="col-md-4">
                  <label>CONTACT NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="contact" name="contact"  maxlength="11" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;"  >
                  </div>
                </div>

                <div class="col-md-4">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" required > 
                 </div>
               </div>

                </br></br></br></br>
               <div class="col-md-4">
                  <label>OCCUPATION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="occupation" name="occupation" maxlength="20" required>
                
              </div>
              </div>
              <div class="col-md-4">
                  <label>EDUCATIONAL ATTAINMENT</label>
                  <div class="md-form mt-0">
                   <select name="educattain" id="educattain" required="required" style="width:350px;padding:3.5%;border-color:#ddd;border-radius:5px;">
                      <option>ELEMENTARY</option>
                      <option>HIGH SCHOOL GRADUATE</option>
                      <option>COLLEGE UNDERGRADUATE</option>
                      <option>COLLEGE GRADUATE</option>
                      <option>OUT OF SCHOOL</option>
                    </select>
                  </div>
                </div>
  </br></br></br></br>
                <div class="col-md-4">
                  <label>STATUS</label><br>
 <div class="md-form mt-0">
                   <select name="status" id="status" required="required" style="width:350px;padding:3.5%;border-color:#ddd;border-radius:5px;">
                      <option>4PS</option>
                      <option>PWD</option>
                      <option>SENIOR CITIZEN</option>
                      <option>SOLO PARENT</option>
                      <option>NONE</option>
                    </select>
             </div>
           </div>
          <div class="col-md-4" style="float:right;margin-right:33%;" >


           
                 
          </div>
          </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="btnSave"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    
      </div>
      
    </div>
  </div>
   </form>
  <!-- CHECK UPModal -->
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
