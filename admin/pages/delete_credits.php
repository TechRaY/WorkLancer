<?php
  $Pid=$_POST["Pid"];
  $db_host = 'localhost'; // Server Name
  $db_user = 'root'; // Username
  $db_pass = ''; // Password
  $db_name = 'cowrks'; // Database Name

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }

  $sql = 'DELETE FROM invites where Pid="'.$Pid.'"';
      
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }

  echo "Delete Successfully"
?>