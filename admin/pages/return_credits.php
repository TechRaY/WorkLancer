<?php
  $db_host = 'localhost'; // Server Name
  $db_user = 'root'; // Username
  $db_pass = ''; // Password
  $db_name = 'cowrks'; // Database Name

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }

  $sql = 'SELECT * FROM invites where Is_Accepted!=1 Order by invites.Date ASC';
      
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
  $str = "";
  while($row = mysqli_fetch_array($query))
  {
    $str = $str."".$row['Send_ID'].",".$row['Date'].",".$row['Is_Accepted'].",".$row['Pid']."|";
  }
  echo $str;
?>