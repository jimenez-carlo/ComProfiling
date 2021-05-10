<?php
include 'connect.php';

if(isset($_POST['delete_button']))//NAME OF YOUR DELETE BUTTON
    {
//START OF DELETE QUERY
    $id = $_POST['ID'];

	$query2 = mysqli_query($con, "SELECT * from tblsocial where ID = '$id'");
    $row2 = mysqli_fetch_assoc($query2);
    mysqli_query($con, "DELETE from tblsocial where ID = '$id'");
  //END OF DELETE QUERY

    echo "<script type='text/javascript'>
      alert('Record Deleted.');
      open('viewsocial.php','_self');
        </script>";
}
?>