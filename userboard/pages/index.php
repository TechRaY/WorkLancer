<?php

session_start();
?>



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
    <style type="text/css">
        #header_title
        {
                font-family: 'Wendy One', sans-serif;
                color: white;
                font-size: 30px;
        }
    </style>
    </head>
    <body>

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
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                             <li>
                                <a href="index_meetup.php"><i class="fa fa-hand-o-right fa-fw"></i> Recieved Invites</a>
                            </li>
                            <li>
                                <a href="index_bookings.php"><i class="fa fa-cube fa-fw"></i> Received Invites</a>
                            </li>
                            <li>
                                <a href="../../logout.php" class=""><i class="fa fa-user fa-fw"></i> Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
            


  
    
    
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hi,<?php echo " ".$_SESSION["user"]?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
            </div>

            <div class="row">
                    <div class="col-lg-12">
                        
                        <div style="margin-left:80px; id="main">
                            <div class="inner">

                                <section class="tiles">
                                    <article class="style2">
                                        <span class="image">
                                            <img src="../images/pic02.jpg" alt="" />
                                        </span>
                                        <a href="spaceallot.php">
                                            <h2>Book Your Seat/s</h2>
                                            <div class="content">
                                                <p>Book your Seat Of your Choice Using SeatMap</p>
                                            </div>
                                        </a>
                                    </article>
                                    <article class="style1">
                                        <span class="image">
                                            <img src="../images/pic01.jpg" alt="" />
                                        </span>
                                        <a href="">
                                            <h2>Looking For Intern for your Company</h2>
                                            <div class="content">
                                                <p>Get an Intern with Required Skills in Few Days</p>
                                            </div>
                                        </a>
                                    </article>
                                    <article class="style2">
                                        <span class="image">
                                            <img src="../images/pic10.jpg" alt="" />
                                        </span>
                                        <a href="">
                                            <h2>Buy Credits</h2>
                                            <div class="content">
                                                <p>Buy the Credits from us in a secure way</p>
                                            </div>
                                        </a>
                                    </article>
                                </section>
                            </div>
                        </div>      
                    </div>
                    <!-- /.col-lg-12 -->
            </div>






            </div>
            <!-- /#page-wrapper -->

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

    </body>
</html>