<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "cowrks");;

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$username = "";
$password = "";
if(isset($_POST['submit']))
{

if(isset($_POST['EmailId'])){
	$username = $_POST['EmailId'];
}
if(isset($_POST['Password'])){
    $password = $_POST['Password'];
}

	

if(!empty($username) && !empty($password)){


	if($username=="admin@gmail.com" && $password=="1234")
    {
			    
				$_SESSION["user"]="Admin";
				header("Location:../admin/pages/index.php"); 
	}
	else
	{	   
      
			    $query = "Select * from users where EmailID='$username' and Password='$password' ";

			    echo $query;

			    $inserted = mysqli_query($con, $query);


			       if(mysqli_num_rows($inserted)>0)
			       {
						   
							$_SESSION["user"]=$username;
							header("Location:../userboard/pages/index.php"); 			   		 
			       }
			       else
			       {
			           header("Location:../html/login.php");
			       }
     }
  }
}
else
{
    header("Location:../html/login.php");
}
?>