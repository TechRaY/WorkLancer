<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>WorkLancer Admin</title>

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


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet"> 

<script src="bulb.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Arvo');

#nums{
    font-family: 'Arvo', serif;
    font-size: 25px;
}
</style>

    <style type="text/css">
        #header_title
        {
                font-family: 'Wendy One', sans-serif;
                color: white;
                font-size: 30px;
        }
        .panel{
            margin-top: 70px;
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
                                <a href="index.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                             <li>
                                <a href="index_meetup.php"><i class="fa fa-hand-o-right fa-fw"></i> Project Meetups</a>
                            </li>
                            <li>
                                <a href="index_bookings.php"><i class="fa fa-cube fa-fw"></i>  Alloted Space Map</a>
                            </li>
                             <li>
                                <a href="bulb.php" class="active"><i class="fa fa-lightbulb-o fa-fw"></i> Energy Efficiency</a>
                            </li>
                            <li>
                                <a href="../../html/login.php" ><i class="fa fa-user fa-fw"></i> Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">AUTOMATIC SWITCH CONTROL USING LIGHT DEPENDENT RESISTOR AND PIR SENSOR</div>
            <div class="panel-body">
                <div class="row lead">
                    <div class="col-md-offset-2 col-md-2 time-header">
                        Time
                    </div>
                    <div class="col-md-2 ldr-header">
                        LDR Sensor
                        <br>
                        Resistance in ohms<span>&#8486;</span> 
                    </div>
                    <div class="col-md-2 pir-header">
                        PIR Sensor
                        <br>
                        Output Voltage in Volts (V)
                        <br>
                    </div>
                    <div class="col-md-4 status-header">
                        Output
                    </div>
                </div>
                <hr>
                <br/>
                <div class="row" id="nums">
                    <div class="col-md-offset-2 col-md-2" id="time_value">
                        17.32
                    </div>
                    <div class="col-md-2" id="ldr_value">
                        1200
                    </div>
                    <div class="col-md-2" id="pir_value">
                        1.3
                    </div>
                    <div class="col-md-4 status_value">
                        <img src="bulboff.png" class="img-rounded" id="img_bulb">
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <table class="table table-striped">

            <tr>
                <th>Parameters</th>
                <th>Without PIRs</th>
                <th>With PIRs</th>
            </tr>
            <tr>
                <td>Power capacity of a bulb in Watt</th>
                <td>40</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Operational hours of corridors bulb</td>
                <td>12</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Total watts consumed</td>
                <td>480</td>
                <td>120</td>
            </tr>
            <tr>
                <td>Total Cost of electricity per kw in Rupees</td>
                <td>4.5</td>
                <td>4.5</td>
            </tr>
            <tr>
                <td>Amount paid per month</td>
                <td>64.8</td>
                <td>16.2</td>
            </tr>
            <tfoot>
                <tr>
                   <td> Savings per month</td>
                   <td></td>
                   <td>48.6 INR </td>
                </tr>
            </tfoot>
        </table>    
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
