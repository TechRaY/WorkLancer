<!DOCTYPE html>
<html lang="en-US">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" href="font-awesome-4.5.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="font-awesome-4.5.0\css\font-awesome.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
	
<div class="cover">
<div class="jumbotron container-fluid maincontent">


<ul class="nav nav-tabs nav-justified navy">
<li role="presentation" id="signupitem"  class="active"><a href="#">Register</a></li>
<li role="presentation" id="loginitem"><a href="login.php" >Login</a></li>      <!--yahan par php kar dena file ka naam chahiye toh-->
</ul>

<div class="content-white">
<form id="register" method="POST" action="../php/signup.php">

 <div class="form-group">

 <div class="input-group firstname">
   <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
   <input type="text" class="form-control input-lg" name="Firstname" id="Firstname" placeholder="First Name" >
  </div>
  </div>

  <div class="form-group">
 <div class="input-group lastname">
   <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
   <input type="text" class="form-control input-lg" name="Lastname" id="Lastname"  placeholder="Last Name">
 </div><!-- /input-group -->
</div>


<div class="form-group">
  <div class="input-group">
 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
 <input type="email" class="form-control input-lg" name="EmailId" id="Email" placeholder="Email Id">
 </div>
</div>


<div class="form-group">
  <div class="input-group">
 <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
 <input type="text" class="form-control input-lg" name="Skillset" id="Skillset" placeholder="Add comma separated skills">
 </div>
</div>



<div class="form-group">
  <div class="input-group phone">
 <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
 <input type="tel" class="form-control input-lg" name="phne" id="phne"  placeholder="Contact No">
 </div>
</div>



<div class="form-group">
  <div class="input-group password">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
 <input type="password" class="form-control input-lg" id="Pass" name="Password" id="Password" placeholder="Password">
      </div>
</div>




<div class="text-center">
 <button type="submit" class="text-center btn btn-primary btn-lg" name="Submit">Create an Account</button>
</div>
</form>
</div>


</div>
</div>

</body>

</html>
