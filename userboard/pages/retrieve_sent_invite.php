
<?php
  session_start();
  $dbhost = 'localhost'; // Server Name
  $dbuser = 'root'; // Username
  $dbpass = ''; // Password
  $dbname = 'cowrks'; // Database Name

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }

  $sql = 'SELECT * FROM invites where Send_ID="'.$_SESSION['user'].'"';
      
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
  $str = "";

  while($row = mysqli_fetch_array($query))
  {
  	//Extract the values required from invites table
  	$pidval= $row['Pid'];
  	$sql1='SELECT Company,Description,Stipend,Duration FROM project where Pid="'.$pidval.'"';
	  $query1 = mysqli_query($conn, $sql1);

	if (!$query1) {
	    die ('SQL Error: ' . mysqli_error($conn));
	  }
	while($row1=mysqli_fetch_array($query1))
  	{
  		$str = $str."".$row1['Company'].",".$row1['Description'].",".$row1['Stipend'].",".$row1['Duration'];
  	}	
	$EmailIDval=$row['Rec_ID'];
	$sql2='SELECT * FROM users where EmailID="'.$EmailIDval.'"';
	$query2 = mysqli_query($conn, $sql2);
	if (!$query2) {
    	die ('SQL Error: ' . mysqli_error($conn));	    	
  	}
  	while($row2=mysqli_fetch_array($query2))
  	{
  		$str = $str.",".$row2['Username'].",".$pidval.",".$row['Is_Accepted'].",".$row2["Mobile"].",".$row2["EmailID"];
  	}
    $str = $str."|";
  }
  echo $str;
?>
