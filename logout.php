
<?php
	include('session.tpl');
	include('connect.php');
$id = $_SESSION["id"];
$sql = mysqli_query($con,"SELECT * FROM tbluser where ID = '$id' order by ID desc");
$user = mysqli_fetch_array($sql);
$username=$user['username'];
$userlevel=$user['userlevel'];
	  //logs
    //logs
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
        $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('admin','$username',' logged out.',NOW())");
        }
        else{
        $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$userlevel','$username',' logged out.',NOW())");
        }
// 
    session_unset();
	session_destroy();
	header("location: login.php");
?>
