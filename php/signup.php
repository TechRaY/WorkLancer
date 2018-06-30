<?php

session_start();


//header("Location:blankpage.php");
$firstname="";
$lastname="";
$username = "";
$password = "";
$contact="";
$address="";
$hashed_password="";

if(isset($_POST['Submit']))
{

   $con = mysqli_connect("localhost", "root", "", "cowrks");;

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


 	$firstname = $_POST['Firstname'];
  $lastname = $_POST['Lastname'];
  $name=$firstname." ".$lastname;
  $username = $_POST['EmailId'];
  $password = $_POST['Password'];
  $contact=$_POST['phne'];
  $skillset=$_POST['Skillset'];

  
      
    $query = "insert into users(Username, Password, SkillSets,EmailID, Mobile) values ('$name', '$password','$skillset','$username','$contact')";

    echo $query;

    $inserted = mysqli_query($con, $query);


       if($inserted)
       {

            $_SESSION["user"]=$username;
           header("Location:../html/dashboard.php");         //to be updated
       }
       else
       {
           header("Location:../html/register.php");
       }




}
else {
  header("Location:../html/register.php");
}

?>
