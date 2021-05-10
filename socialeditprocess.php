<?php include 'session.tpl';
?>
<?php include 'connect.php';?>

 <?php

	
	if(isset($_POST['update']))
	{
		$id = $_GET['edit'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$birthdate = $_POST['birthdate'];
		$birthplace = $_POST['birthplace'];
		$civilstatus = $_POST['civilstatus'];
		$religion = $_POST['religion'];
		$occupation = $_POST['occupation'];
		$educattain = $_POST['educattain'];
		$housenumber = $_POST['housenumber'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$datemodified = $_POST['datemodified'];
		

		
	    mysqli_query($con, "UPDATE tblsocial set lastname='$lastname', firstname='$firstname', middlename='$middlename', age='$age', gender='$gender', birthdate='$birthdate', birthplace='$birthplace', civilstatus='$civilstatus', religion='$religion', occupation='$occupation', educattain='$educattain', housenumber='$housenumber', contact='$contact', email='$email', datemodified='$datemodified' WHERE ID=".$_GET['edit']);

			 echo "<script type='text/javascript'>
            alert('Record Updated.');
            open('viewsocial.php','_self');
            </script>";

        }
        ?>