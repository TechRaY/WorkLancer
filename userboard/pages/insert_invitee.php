<?php
  session_start();

   $receiver_id=$_POST['rid'];
   $sender_id=$_SESSION['user'];
   //$pid=$_SESSION['pid'];
   $today=date('y:m:d');
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = "cowrks";
   $pid = 0;
   $ProjectDuration = 0;
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }

  $sql = 'SELECT * FROM project Order by Pid DESC LIMIT 1';
      
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
  
  while($row = mysqli_fetch_array($query))
  {
  	$pid = $row['Pid'];
  }

  $sql = 'SELECT * FROM project where Pid="'.$pid.'"';
      
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }

  while($row = mysqli_fetch_array($query))
  {
  	$ProjectDuration = $row['Duration'];
  }
  
  $NewDate=Date('y:m:d',strtotime("+".$ProjectDuration."days"));
   
   $sql = 'INSERT INTO invites '.
      '(Date,Is_accepted, Pid, Rec_ID,Send_ID) '.
      "VALUES ('$NewDate', 0, '$pid', '$receiver_id', '$sender_id')";
      
   $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   //echo $pid." ".$ProjectDuration;
   echo "Invite sent to ".$_POST['rec_name'];
   
   
?>
