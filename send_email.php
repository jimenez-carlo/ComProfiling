<?php 
include("connect.php");
$email = $_GET['email'];
if($exist = mysqli_query($con,"SELECT COUNT(*) as result FROM tbluser where email='$email' limit 1")){
  while ($res = mysqli_fetch_object($exist)) {
  	if (!empty) {
  		# code...
  	}
    echo $res->result;
  }
  mysqli_free_result($exist);
}
?>
