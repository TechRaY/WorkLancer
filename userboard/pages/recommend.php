<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>WorkLancer Admin</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
        <link rel="stylesheet" href="../css/main.css" />
  
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet"> 
     <style>

.footer {
    position: absolute;
    bottom: -1;
    width: 100%;
    background-color: #325C6A;
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #0cb8b6;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

#header_title
        {
                font-family: 'Wendy One', sans-serif;
                color: white;
                font-size: 30px;
        }
    </style>
    </head>
    <body>
<script>
var myVar;

$(document).ready(function(){
    myVar = setTimeout(showPage, 3000);
});

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("display").style.visibility = "visible";
}
</script>
<div id="loader"></div>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" id="header_title">Worklancer</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                             <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                             <li>
                                <a href="index_sent.php"><i class="fa fa-hand-o-right fa-fw"></i> Sent Invites</a>
                            </li>
                            <li>
                                <a href="index_received.php"><i class="fa fa-cube fa-fw"></i> Received Invites</a>
                            </li>
                            <li>
                                <a href="../../logout.php" class=""><i class="fa fa-user fa-fw"></i> Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
  die('Could not connect: ' . mysql_error());
}
$RefundPeriod=$_POST['RefundPeriod'];
$ProjectDuration=$_POST['ProjectDuration'];
$Stipend=$_POST['Stipend'];
$ProjectDescription=$_POST['ProjectDescription'];
$SkillSet=$_POST['SkillSet'];
$CompanyName=$_POST['CompanyName'];
$sql = 'INSERT INTO project '.
      '(Company,Description, Duration, Refund_Period, Skillsets, Stipend) '.
      "VALUES ( '$CompanyName', '$ProjectDescription', '$ProjectDuration', '$RefundPeriod','$SkillSet','$Stipend')";
 mysql_select_db('cowrks');
 $retval = mysql_query( $sql, $conn );
 // echo "Data  Entry Success!!"
 mysql_close($conn);
 if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
 }
?>
<div id="display" style="visibility: hidden;">
<?php
  $db_host = 'localhost'; // Server Name
  $db_user = 'root'; // Username
  $db_pass = ''; // Password
  $db_name = 'cowrks'; // Database Name

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }
  $SkillSet=explode(",", $_POST['SkillSet']);
  $sql = 'SELECT * FROM users where EmailID!="'.$_SESSION['user'].'"' ;
      
  $query = mysqli_query($conn, $sql);
  $countarr = Array();
  $skillarr = Array();
  $users = Array();
  $emailid = Array();
  while ($row = mysqli_fetch_array($query))
  {
        $sk_set = explode(",", $row["SkillSets"]);
        $count = 0;
        for ($i=0; $i < count($sk_set) ; $i++) { 
            if(in_array($sk_set[$i], $SkillSet))
                $count++;
        }
        if($count > 0)
        array_push($users,$row["Username"]);

        $countarr[$row['Username']] = $count;
        $emailid[$row['Username']] = $row['EmailID'];
        $skillarr[$row['Username']] = $row["SkillSets"];
  }

  if(count($users) > 0)
  {
        echo $_SESSION['user'];
        $q1 = 'update users set Credits = Credits - 10 where EmailID="'.$_SESSION['user'].'"';
         mysqli_query($conn, $q1);
  }
  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
?>
  <!-- <h1>Table 1</h1> -->
  <table class="table" style="margin-top: 70px">
    <!-- <caption class="title">User Details</caption> -->
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>Username</th> 
        <!-- <th>Password</th> -->
        <th>SkillSets</th>
        <!-- <th>EmailID</th> -->
        <th> Similarity Score</th>
        <th>Send Interest</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $total  = 0;
    $index=1;
    for ($i=0; $i < count($users) ; $i++) { 
      
      $receiver_name=$users[$i];
      $skills = $skillarr[$receiver_name];
      $count = $countarr[$receiver_name];
      echo '<tr>   
          <td>'.$index.'</td>  
          <td>'.$receiver_name.'</td>
          <td>'.$skills.'</td>
          <td>'.$count.'</td><td><button type="button" class="btn btn-default btn-small" onclick="insertTransaction(\''.$emailid[$receiver_name].'\',\''.$receiver_name.'\')">Send Invitee</button></td>
        </tr>';
        $index++;
    }
  ?>
    </tbody>
  </table>

</div>


            </div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Response</h4>
        </div>
        <div class="modal-body">
          <p id="modal_text"></p>
        </div>
        <div class="modal-footer">
          <a href="index_sent.php">Close</a>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
<script type="text/javascript">
    function insertTransaction(rid,name)
    {
            alert(rid+" "+name);
            $.ajax({
            type: "POST",
            url: "insert_invitee.php",
            data: {
                    "rid" : rid,
                    "rec_name" : name
                  },
            success: function(data) {
                //alert(data);
                $("#modal_text").text(data);
                $('#myModal').modal('show');

                setTimeout(function(){
                    window.location = "index_sent.php";
                },2000);        
            }
            
         });
    }
</script>
</html>