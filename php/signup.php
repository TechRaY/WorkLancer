<?php

include_once 'db.php';

$firstname="";
$lastname="";
$username = "";
$password = "";
$contact="";
$address="";
$hashed_password="";

if(isset($_POST['Submit']))
{

 	$firstname = $_POST['Firstname'];
  $lastname = $_POST['Lastname'];

  $name=$firstname+""+$lastname;
  $username = $_POST['EmailId'];
  $password = $_POST['Password'];
  $contact=$_POST['phne'];
  $linkedinid=$_POST['LinkedInId'];
  $skillset=$_POST['Skillset'];

 
      
    $query = "insert into users(Username, Password, SkillSets,LinkedInID,EmailID, Mobile) values ('$name', '$password','$skillsets','$linkedin',$email,'$contact')";

    

    $inserted = mysqli_query($con, $query);


       if($inserted)
       {
           header("Location:blankpage.php");         //to be updated
       }
       else
       {
           header("Location:../html/register.php");
       }




}
else {
  header("Location:../php/register.php");
}

?>
