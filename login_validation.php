<?php
if (isset($_POST['btnLogin'])) {
  $con=mysqli_connect("localhost","root","","db_record");

  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

 
   $selectAccount = mysqli_query($con,"SELECT * FROM tbluser WHERE username = '$username' AND password = '$password'");
  $row =mysqli_fetch_assoc($selectAccount);
  $user_id = $row["ID"];
  $user_uname = $row["username"];
  $user_level = $row["userlevel"];


  $user_pword = $row["password"];
  if ($username == $user_uname && $password == $user_pword) {
      session_start();
      $_SESSION["id"] = $user_id;
      header("Location: dashboard.php?ID=$user_id");
      //logs
        $check = "SELECT * FROM tbluser WHERE ID = $user_id ";
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
        VALUES ('admin','$user_uname',' has logged in.',NOW())");
        }
        else{
        $logs = mysqli_query($con,"INSERT INTO tbllogs (userlevel,username,action,dt)
        VALUES ('$user_level','$user_uname',' has logged in.',NOW())");
        }
    }
  else{

      echo "<script>
              alert('Invalid credentials! Please try again.');
              open('login.php','_self');
      </script>";
  }
}
?>

