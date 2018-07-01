<?php
   session_start();
   $DecisionVal = $_POST["val"];
   $Pid = $_POST["pid"];
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "cowrks");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'UPDATE invites SET  Is_Accepted="'.$DecisionVal.'" WHERE Pid="'.$Pid.'"';
      
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not Update data: ' . mysql_error());
   }
   
   echo "Updated data successfully\n";
   
  
?>