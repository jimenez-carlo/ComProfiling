<?php include('connect.php');?>
<?php include('socialeditprocess.php');?>
<?php include('socialdeleteprocess.php');?>



<?php
$open_connection = mysqli_connect("localhost","root","","db_record");
  
  if (isset($_GET['edit']))//FETCHING SPECIFIC RECORD USING ID REFERENCE FROM THE "EDIT" LINK
    {
      $query2 = mysqli_query($open_connection, "SELECT lastname, firstname, middlename, age, gender, civilstatus, birthdate, birthplace, religion, datemodified, housenumber, contact, email, occupation, educattain, status WHERE ID=".$_GET['edit']);
      
      $row2 = mysqli_fetch_assoc($query2);

      
?> 


<!-----edit phase ---->

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
<!-- 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
			
 			<li class="active"><a href="socialindex.php" style="color:#ff69b4;;"><em class="fa fa-user">&nbsp;</em>People</a></li>
		
        </ul>
			</li>
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
					<em class="fa fa-home" style="color:#ff69b4;"></em>
				</a></li>
				<li class="active">People</li>
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
						People
						<button type="button" class="btn btn-primary" style="float: right; background-color:#ff69b4;" data-toggle="modal" data-target="#addModal"><em class="fa fa-plus-square"  >&nbsp;&nbsp;</em>Add Record</button></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
					
					<!-- 	<div class="col-md-6"> -->
							<form role="form" method="POST" action="socialadd.php">
								<div class="form-group">

									
								</div>
                <div class="card card-default">
    <div>
      <div class="card-body">
        <form class="border border-light p-5" name="form1" id="form1" action="socialaddprocess.php" method="POST" autocomplete="OFF">
              <div class="form-row mb-4">
               <div class="col-md-6">
                  <label>LAST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id= "lastname" name="lastname" value="<?php echo $row2['lastname'];?>" maxlength="20" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>FIRST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $row2['firstname'];?>" maxlength="20" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>MIDDLE NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="middlename" name="middlename" value="<?php echo $row2['middlename'];?>" maxlength="20"  onkeypress="return alpha(event,letters3) " >
                  </div>
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col-md-6">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                     <input class="form-control" type="text" id="age" name="age" value="<?php echo $row2['age'];?>" maxlength="3" onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>GENDER</label>
                  <div class="md-form mt-0">
                    <select class="form-control" id="gender" name="gender"  required>
                      <?php
                        if($row2['gender']=="Male"){
                          echo'
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>';
                          }
                        elseif($row2['gender']=="Female"){
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
                        if($row2['civilstatus']=="Single"){
                          echo'
                            <option value="Single" selected>Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row2['civilstatus']=="Married"){
                          echo'
                            <option value="Single">Single</option>
                            <option value="Married" selected>Married</option>
                            <option value="Widow">Widow</option>';
                          }

                        elseif($row2['civilstatus']=="Widow"){
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
                    <input class="form-control" type="date" id="birthdate" name="birthdate" value="<?php echo $row2['birthdate'];?>" maxlength="30">
                </div>
               <div class="col-md-6">
                  <label>BIRTH PLACE</label>
                  <div class="md-form mt-0">
                   <input class="form-control" type="text" id="birthplace" name="birthplace" value="<?php echo $row2['birthplace'];?>" maxlength="50" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>RELIGION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="religion" name="religion" value="<?php echo $row2['religion'];?>" maxlength="30" onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
              </div>

             
                <div class="col-md-6">
                  <label>HOUSE NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="housenumber" name="housenumber" value="<?php echo $row2['housenumber'];?>" maxlength="4" onkeypress="return alpha(event,numbers)">
                
              </div>
              </div>
              
                <div class="col-md-6">
                  <label>CONTACT NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="contact" name="contact" value="<?php echo $row2['contact'];?>" maxlength="11" onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>

               <div class="col-md-6">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $row2['email'];?>" maxlength="100" onkeypress="return alpha(event,email)">  
                 </div>
               </div>

              <div class="form-row mb-4">
                <div class="col-md-6">
                  <label>OCCUPATION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="occupation" name="occupation" value="<?php echo $row2['occupation'];?>" onkeypress="return alpha(event,letters3)">
                  </div>
                </div>
               
              
                <div class="col-md-6">
                  <label>EDUCATIONAL ATTAINMENT</label>
                  <div class="md-form mt-0">
                    <select name="educattain" class="form-control" required>
                       <?php
                        if($row2['educattain']=="ELEMENTARY"){
                          echo'
                            <option selected>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row2['educattain']=="HIGH SCHOOL GRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option selected>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row2['educattain']=="COLLEGE UNDERGRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option selected>COLLEGE UNDERGRADUATE</option>
                            <option>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                        elseif($row2['educattain']=="COLLEGE GRADUATE"){
                          echo'
                            <option>ELEMENTARY</option>
                            <option>HIGH SCHOOL GRADUATE</option>
                            <option>COLLEGE UNDERGRADUATE</option>
                            <option selected>COLLEGE GRADUATE</option>
                            <option>OUT OF SCHOOL</option>';
                          }
                          elseif($row2['educattain']=="OUT OF SCHOOL"){
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
                  <button style="margin-right: 20px; margin-top: 20px; padding-left: 40px; padding-right: 40px;" class="btn btn-primary" type="submit" name="update_record">SAVE</button>
                  <a style="margin-top: 20px;" href="dashboard.php" class="btn btn-secondary">BACK</a>
                </div>
              </div>

        </form>
      </div>
    </div>
  </div>
</form>
<?php
}
	//END EDIT RECORD SECTION
  if (isset($_GET['view']))//FETCHING SPECIFIC RECORD USING ID REFERENCE FROM THE "EDIT" LINK
    {
      $query2 = mysqli_query($open_connection, "SELECT lastname, firstname, middlename, age, gender, civilstatus, birthdate, birthplace, religion, datemodified, housenumber, contact, email, occupation, educattain, status WHERE ID=".$_GET['view']);;
      $row3 = mysqli_fetch_assoc($query3);
      ?>

                <!---- PRINTING -->
<div class="table-responsive">
<table class="table table-hover table-fixed">
	<!--Table head-->
  <thead>
    <tr>
      <th>ID</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;" class="tablePadding"  ><?php echo $row3['ID'];?></td>
      <th>Name:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['lastname'].", ".$row3['firstname']." ".$row3['middlename'];?></td>
      <th>Age:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['age'];?></td>
      <th>Gender:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['gender'];?></td>
      <th>Educational Attainment:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['educattain'];?></td>
      <th>Contact:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['contact'];?></td>
      <th>BIRTH DATE:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['birthdate'];?></td>
      <th>BIRTH PLACE:</th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['birthplace'];?></td>
      <th>CIVIL STATUS: </th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['civilstatus'];?></td>
      <th>RELIGION: </th>
      <td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['religion'];?></td>


    </tr>
  </thead>
  <!--Table head-->
  </table>
        </form>
      </div>
      <div class="card-footer">
<div style="margin: 10px;">
  <a href="index2.php"><input type="button" value="Back"  class="btn btn-info"></a>
   <div class="btn-group" role="group" aria-label="Basic example" ;>
 
  <button class="btn btn-success page" onclick="printData()">Print</button>
  

  </div>
</div>
</div>
  </div>
</div>
</div>
<br/><br/>
<!--END of Table viewing-->
<!--START TABLE OF ALL RECORDS-->
<?php
    }

  //END (VIEW RECORD SECTION) - CODE FORVIEWING ALL THE DETAILS OF A SPECIFIC RECORD IN THE DB

  //START(TABLE OF ALL RECORDS SECTION) - CODE FOR VIEWING ALL RECORDS IN THE DB
else{
?>
<div class="table-responsive">
<table class="table table-hover table-fixed">
	 <thead>
                              
                                <th>NAME</th>
                                <th>AGE</th>
                                <th>GENDER</th>
                                <th>BIRTH DATE</th>
                                <th>BIRTH PLACE</th>
                                <th>CIVIL STATUS</th>
                                <th>RELIGION</th>
                                <th>ACTION</th>
                             
                            </thead>
              <tbody>
		
						
	<?php
                  $query4 = mysqli_query($open_connection, "SELECT * FROM tblsocial");
                  $records=mysqli_num_rows($query4);
                  $row4 = mysqli_fetch_assoc($query4);
                  while($row = mysqli_fetch_assoc($query4)){
                ?>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;" class="tablePadding"  ><?php echo $row3['ID'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['lastname'].", ".$row3['firstname']." ".$row3['middlename'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['age'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['gender'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['birthdate'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['birthdate'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"><?php echo $row3['civilstatus'];?></td>
			<td style="text-transform:capitalize;word-wrap: break-word;min-width: 150px;max-width: 150px;"class="tablePadding"  ><?php echo $row3['religion'];?></td>
			<form method="post"><!--FORM FOR PROCESSING UNIQUE RECORDS -->

                                      <!--LINK TO VIEW DETAILS OF A RECORD -->
                        <input type="hidden" name="socialid" value="<?php echo $row['ID']; ?>" name = "view">
                        <a href="socialindex.php?view=<?php echo $row['ID']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-eye" data-toggle="tooltip" title="View Record"></i></a>

                                      <!--LINK TO EDIT A RECORD -->
                        <input type="hidden" name="socialid" value="<?php echo $row['ID']; ?>">
                        <a href="socialindex.php?edit=<?php echo $row['ID']; ?>" name = "viewedit" class="btn btn-sm btn-secondary"><i class="fas fa-edit" data-toggle="tooltip" title="Edit Record"></i></a>
                                    
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
              <?php }?>
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



<script type="text/javascript">
      var letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 '
      var pass='abcdefghijklmnopqrstuvwxyz1234567890'
      var num='0123456789'
      var idnum='0123456789-'
      var user='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-'
      function alpha(e,allow) {
      var k;
      k=document.all?parseInt(e.keyCode): parseInt(e.which);
      return (allow.indexOf(String.fromCharCode(k))!=-1);
      }
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#ddlCountry,#ddlAge").on("change", function () {
            var country = $('#ddlCountry').find("option:selected").val();
            var age = $('#ddlAge').find("option:selected").val();
            SearchData(country, age)
        });
    });
    function SearchData(country, age) {
        if (country.toUpperCase() == 'ALL' && age.toUpperCase() == 'ALL') {
            $('#example1 tbody tr').show();
        } else {
            $('#example1 tbody tr:has(td)').each(function () {
                var rowCountry = $.trim($(this).find('td:eq(5)').text());
                var rowAge = $.trim($(this).find('td:eq(2)').text());
                if (country.toUpperCase() != 'ALL' && age.toUpperCase() != 'ALL') {
                    if (rowCountry.toUpperCase() == country.toUpperCase() && rowAge == age) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                } else if ($(this).find('td:eq(1)').text() != '' || $(this).find('td:eq(1)').text() != '') {
                    if (country != 'all') {
                        if (rowCountry.toUpperCase() == country.toUpperCase()) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                    if (age != 'all') {
                        if (rowAge == age) {
                            $(this).show();
                        }
                        else {
                            $(this).hide();
                        }
                    }
                }
 
            });
        }
    }

</script>


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

