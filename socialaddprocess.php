<?php include 'session.tpl';?>
<?php include 'opendb.php';?>

 <?php

	

	
	if(isset($_POST['submit']))
	{
		$id = $_POST['personid'];
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
				
		

		
		$open_connection = mysqli_connect("localhost","root","","db_record");

		  mysqli_query($openconnection,"INSERT into tblsocial(personid,lastname,firstname,middlename,age,civil,gender,birthdate,birthplace,religion,occupation,educattain,housenumber,contact,email,status) values('$personid','$lastname','$middlename','$middlename','$age','$civil','$gender','$birthdate','$religion','$occupation','$educattain','$housenumber','$contact','$email','$status')") or die(mysqli_error($openconnection));

		   $query = mysqli_query($open_connection, "SELECT ID FROM tblsocial order by ID desc limit 1");
                                  $records=mysqli_num_rows($query);
                                  $row = mysqli_fetch_assoc($query);
                                  $id = $row['ID'];

			

			echo "<script type='text/javascript'>
			alert('Record Added.');
			open('viewsocial.php','_self');
		  	</script>";

		  }
   
		
?>
