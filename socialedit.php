<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1 class="m-0 text-dark">SOCIAL RECORDS</h1>
      </div>
   <!--    <div class="col-sm-1">
      	<a href="socialadd.php" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Add A Record" style="posistion:fixed;">ADD</a>
      </div> -->
      
      <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php
  if (isset($_GET['edit']))//FETCHING SPECIFIC RECORD USING ID REFERENCE FROM THE "EDIT" LINK
    {
      $query2 = mysqli_query($open_connection, "SELECT lastname, firstname, middlename, age, gender, civilstatus, birthdate, birthplace, religion, datemodified, housenumber, contact, email, occupation, educattain, status WHERE ID=".$_GET['edit']);
      
      $row2 = mysqli_fetch_assoc($query2);

      
?> 
<section style="margin: 10px;">
  <div class="card card-default">
    <div>
      <div class="card-body">
        <form class="border border-light p-5" name="form1" id="form1" action="add.php" method="POST" autocomplete="OFF">
              <div class="form-row mb-4">
                <div class="col">
                  <label>LAST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id= "lastname" name="lastname" placeholder="Last name" maxlength="20" required onkeypress="return alpha(event,letters3)"  autofocus>
                  </div>
                </div>
                <div class="col">
                  <label>FIRST NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First name" maxlength="20" required onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col">
                  <label>MIDDLE NAME</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="middlename" name="middlename" placeholder="Middle name" maxlength="20"  onkeypress="return alpha(event,letters3) " >
                  </div>
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col">
                  <label>AGE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="age" name="age" placeholder="Age" maxlength="3" required onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>
                <div class="col">
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
                <div class="col">
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
                <div class="col">
                  <label>BIRTH DATE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="date" id="birthdate" name="birthdate" placeholder="Birth date" maxlength="30"  required>
                  </div>
                </div>
                <div class="col">
                  <label>BIRTH PLACE</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="birthplace" name="birthplace" placeholder="Birth place" maxlength="50" required onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
                <div class="col">
                  <label>RELIGION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="religion" name="religion" placeholder="Religion" maxlength="30" required onkeypress="return alpha(event,letters3)" >
                  </div>
                </div>
              </div>

              <div class="form-row mb-4">
                <div class="col">
                  <label>HOUSE NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="housenumber" name="housenumber" placeholder="House number" maxlength="4" required onkeypress="return alpha(event,numbers)"  autofocus>
                
                
              </div>
              <div class="form-row mb-4">
                <div class="col">
                  <label>CONTACT NUMBER</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="contact" name="contact" placeholder="Contact number" maxlength="11" required onkeypress="return alpha(event,numbers)" >
                  </div>
                </div>
                <div class="col">
                  <label>EMAIL ADDRESS</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email Address" maxlength="100" onkeypress="return alpha(event,email)"> 
                  </div>
                </div>
              </div>

              <div class="form-row mb-4">
                <div class="col">
                  <label>OCCUPATION</label>
                  <div class="md-form mt-0">
                    <input class="form-control" type="text" id="occupation" name="occupation" placeholder="Occupation" maxlength="30" required onkeypress="return alpha(event,letters3)"  autofocus>
                  </div>
                </div>
               
              <div class="form-row mb-4">
                <div class="col">
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
                <div class="col" >
                  <label>STATUS</label><br>
                <!-- Default inline 1 -->
                    <div style="padding-left: 50px;" class="custom-control custom-checkbox custom-control-inline">
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
                    <div style="margin-left: 25px;" class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInline5"  name="status[]" value="NONE"  >
                      <label class="custom-control-label" for="defaultInline5" >NONE</label>
                    </div>
                </div>
              </div>

              
              <div class="form-row mb-4">
               <div class="col">
                  <label>DATE & TIME ADDED</label>
                  <div class="md-form mt-0">
                    <input readonly class="form-control" type="text" id="spouse" name="datemodified" maxlength="100"  value="<?php
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
                  <button style="margin-right: 20px; margin-top: 20px; padding-left: 40px; padding-right: 40px;" class="btn btn-primary" type="submit" name="submit_data">SAVE</button>
                  <a style="margin-top: 20px;" href="index2.php" class="btn btn-secondary">BACK</a>
                </div>
              </div>

        </form>
      </div>    
    </div>
  </div>   

<?php
  }
  //END (EDIT RECORD SECTION) - CODE FOR EDIT RECORD FORM AND DISPLAYING SPECIFIC RECORD TO EDIT IN THE DB


  //START(VIEW RECORD SECTION) - CODE FOR VIEWING ALL THE DETAILS OF A SPECIFIC RECORD IN THE DB
  elseif(isset($_GET['view']))//FETCHING SPECIFIC RECORD USING ID REFERENCE FROM THE "VIEW DETAILS" LINK
    {
      $query3 = mysqli_query($open_connection, "SELECT lastname, firstname, middlename, age, gender, civilstatus, birthdate, birthplace, religion, datemodified, housenumber, contact, email, occupation, educattain, status WHERE ID=".$_GET['view']);
      $row3 = mysqli_fetch_assoc($query3);
?>

<div style="margin: 10px;">
  <div  class="card" style=" height: 27rem;" >
    <div class="card-header">
      <h5>VIEW DETAILS</h5>
    </div>
      <div class="card-body">
        <table align="center" style="margin-top: 35px;" id="printTable" >
          <tr>
             
            <th>NAME:</th>
            <td class="tablePadding"  ><?php echo $row3['lastname'].", ".$row3['firstname']." ".$row3['middlename'];?></td>
            <th class="tablePadding">HOUSE NUMBER: </th>
            <td class="tablePadding"  ><?php echo $row3['housenumber'];?></td>

            <th class="tablePadding">OCCUPATION: </th>
            <td class="tablePadding"  ><?php echo $row3['occupation'];?></td>
          </tr>
          <tr>
            <th>AGE: </th>
            <td class="tablePadding"><?php echo $row3['age'];?></td>

            <th class="tablePadding">STREET: </th>
            <td class="tablePadding"  ><?php echo $row3['street'];?></td>
          </tr>
          <tr>
            <th>GENDER: </th>
            <td class="tablePadding"><?php echo $row3['gender'];?></td>

            <th class="tablePadding">EDUCATIONAL ATTAINMENT: </th>
            <td class="tablePadding"  ><?php echo $row3['educattain'];?></td>
          </tr>
          <tr>
            <th>BIRTH DATE: </th>
            <td class="tablePadding"><?php echo $row3['birthdate'];?></td>

            <th class="tablePadding">CONTACT NUMBER: </th>
            <td class="tablePadding"  ><?php echo $row3['contact'];?></td>
          </tr>
          <tr>
            <th>BIRTH PLACE: </th>
            <td class="tablePadding"><?php echo $row3['birthplace'];?></td>

            <th class="tablePadding">EMAIL ADDRESS: </th>
            <td class="tablePadding"  ><?php echo $row3['email'];?></td>
          </tr>
          <tr>
            <th>CIVIL STATUS: </th>
            <td class="tablePadding"><?php echo $row3['civilstatus'];?></td>
          </tr>
          <tr>
            <th>RELIGION: </th>
            <td class="tablePadding"  ><?php echo $row3['religion'];?></td>

            <th></th>
            <td></td>
            <th class="tablePadding" style="text-align: right;">DATE MODIFIED: </th>
            <td class="tablePadding1"  > <strong><i><?php echo $row3['datemodified'];?></i></strong></td>
          </tr>

        </table>
        </form>
      </div>
      <?php
    }

  //END (VIEW RECORD SECTION) - CODE FORVIEWING ALL THE DETAILS OF A SPECIFIC RECORD IN THE DB

  //START(TABLE OF ALL RECORDS SECTION) - CODE FOR VIEWING ALL RECORDS IN THE DB
else{
?>

<div style="margin: 10px;">
<section class="content">
 <div class="row">
        <div class="col-12">
  <div class="card">

  <div class="card-header">
    
            <div class="box-header with-border">

              <button  type="button" onclick="window.location.href='socialadd.php';" class="btn bg-gradient-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i>Add user
              </button>   

            </div>
  </div>   

    <!-- /.card-header -->
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">

             <div class="box">
           <form class="form-inline" style="float: right; margin-top: -.5%;">
            <div class="form-group">
               <div class="pull-right">
             <select class="cl_country form-control input-xs" id="ddlCountry">
                <option value="all">Select Civil Status </option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow">Widow</option>
             </select>

             <select class="cl_age form-control input-xs" id="ddlAge">
                <option value="all">Select Gender </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

               </div>
            </div>
           </form>
         </div>

     <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" style="font-size: 13px;">
          
               <thead>
                              <tr role="row">
                                <th>NAME</th>
                                <th>AGE</th>
                                <th>GENDER</th>
                                <th>BIRTH DATE</th>
                                <th>BIRTH PLACE</th>
                                <th>CIVIL STATUS</th>
                                <th>RELIGION</th>
                                <th>ACTION</th>
                              </tr>
                            </thead>
              <tbody>
                 <?php
                  $query = mysqli_query($open_connection, "SELECT * FROM tblsocial");
                  $records=mysqli_num_rows($query);
                  while($row = mysqli_fetch_assoc($query)){
                ?>

                  <tr role="row" class="odd">
                    <td style="text-align: center;"><?php echo $row['lastname'].", ".$row['firstname']." ".$row['middlename'];?></td>
                    <td style="text-align: center;"><?php echo $row['age'];?></td>
                    <td style="text-align: center;"><?php echo $row['gender'];?></td>
                    <td style="text-align: center;"><?php echo $row['birthdate'];?></td>
                    <td style="text-align: center;"><?php echo $row['birthplace'];?></td>
                    <td style="text-align: center;"><?php echo $row['civilstatus'];?></td>
                    <td  style="text-align: center;"><?php echo $row['religion'];?></td>
                     <td>
                  <div style="text-align: center;">
                 <form method="post"><!--FORM FOR PROCESSING UNIQUE RECORDS -->

                                      <!--LINK TO VIEW DETAILS OF A RECORD -->
                        <input type="hidden" name="socialid" value="<?php echo $row['socialid']; ?>" name = "view">
                        <a href="index2.php?view=<?php echo $row['socialid']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-eye" data-toggle="tooltip" title="View Record"></i></a>

                                      <!--LINK TO EDIT A RECORD -->
                        <input type="hidden" name="socialid" value="<?php echo $row['socialid']; ?>">
                        <a href="index2.php?edit=<?php echo $row['socialid']; ?>" name = "viewedit" class="btn btn-sm btn-secondary"><i class="fas fa-edit" data-toggle="tooltip" title="Edit Record"></i></a>
                                    
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
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



      <!-- /.row -->
</section>
</div>

  <!-- END OF TABLE VIEW-->
<?php 
  } 
  //END(TABLE OF ALL RECORDS SECTION) - CODE FOR VIEWING ALL RECORDS IN THE DB
?>





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
