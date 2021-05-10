<!-- session -->

<!-- connection -->
<?php include "connect.php";
?>
<?php include("socialdeleteprocess.php"); ?>
<?php include("socialeditprocess.php"); ?>







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
      <li class="active"><a href="socialadd.php"><em class="fa fa-users">&nbsp;</em> People</a></li>
      <li><a href=""  style="color:white;"><em class="fa fa-users">&nbsp;</em> Task</a></li>
      <li><a href="edit_profile.php"  style="color:white;"><em class="fa fa-users">&nbsp;</em>User Profile</a></li>
      <li><a href="usermgmt.php"  style="color:white;"><em class="fa fa-users">&nbsp;</em>Add User</a></li>
    </ul>
      
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
        <li class="active">People</li>
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
            People
          </div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <!-- content -->
              <div class="table-responsive">
<table class="table table-hover table-fixed">
   <thead>
                              <tr role = "row">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>AGE</th>
                                <th>GENDER</th>
                                <th>BIRTH DATE</th>
                                <th>BIRTH PLACE</th>
                                <th>CIVIL STATUS</th>
                                <th>RELIGION</th>
                             </tr>
                            </thead>
              <tbody>
    
            
                <?php
                  $open_connection = mysqli_connect("localhost","root","","db_record");
                  $query = mysqli_query($open_connection, "SELECT * FROM tblsocial");
                  $records=mysqli_num_rows($query);
                  $row = mysqli_fetch_assoc($query);
                  while($row = mysqli_fetch_assoc($query)){
                ?>
                 <tr role="row" class="odd">
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;" class="tablePadding"  ><?php echo $row['ID'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row['lastname'].", ".$row['firstname']." ".$row['middlename'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row['age'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row['gender'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row['birthdate'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row['birthplace'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row['civilstatus'];?></td>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row['religion'];?></td>
                <td>
                  <form method="post">
                                      <!--LINK TO VIEW DETAILS OF A RECORD -->
                        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>" name = "view">
                        <a href="viewsocial.php?view=<?php echo $row['ID']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-eye" data-toggle="tooltip" title="View Record"></i></a>

                                      <!--LINK TO EDIT A RECORD -->
                        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                        <a href="editsocial.php?edit=<?php echo $row['ID']; ?>" name = "viewedit" class="btn btn-sm btn-secondary"><i class="fas fa-edit" data-toggle="tooltip" title="Edit Record"></i></a>
                                    
                                      <!--ALERT BOX WHEN DELETING A RECORD-->
                        <script type="text/javascript">
                          function confirmation()
                            {
                              if(confirm("Are you sure?")==1)
                                {
                                document.getElementById('delete_button').submit();
                                }
                      
                            }
                        </script>
                                    <!--ALERT BOX WHEN DELETING A RECORD-->

                                    <!--LINK TO DELETE A RECORD-->
                        <button type='submit' name='delete_button' class="btn btn-sm btn-danger" id='delete_button' value='Delete' onclick='confirmation();return false;'><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete Record"></i></button>
                                        <!-- <input type='submit' name='delete_button' class="btn btn-sm btn-danger" id='delete_button' value='Delete' onclick='confirmation();return false;'> -->
                  </form>
                  </div>
                  
                </td>
                  </tr>
                  <?php
                  }

                  //LABEL TO DISPLAY IF TABLE HAS NO EXISTING RECORD
                    if($records==0)
                      {
                        echo"<tr>
                                          <th colspan='10'>No record available in this table.</th>
                                        </tr>";
                      }
                                //LABEL TO DISPLAY IF TABLE HAS NO EXISTING RECORD
                  ?>
                 </tbody>
               </table>
                  </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="col-sm-12">
        <p style="color:#fff;" class="back-link">&copy;  2021 Community Profiling System. All rights reserved.</p>
      </div>
    </div><!-- /.row -->
  
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