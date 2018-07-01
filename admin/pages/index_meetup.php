<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="../js/jquery.min.js"></script>
        <title>WorkLancer Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
        <script type="text/javascript">



            function return_cdt(pid)
            {
                $.ajax({
                type: "POST",
                url: "delete_credits.php",
                data : {
                    "Pid" : pid
                },
                success: function(data) {
                        do_it();
                    }
                
            });
            }


            $(document).ready(function(){

               do_it();
                
                
             });

        

            function do_it()
            {
                var str = "";
                
                $.ajax({
                type: "POST",
                url: "return_credits.php",
                success: function(data) {

                    ar = (data+"").split("|");

                    for (var i = 0; i < ar.length-1; i++) {

                        arr = (ar[i]+"").split(",");

                        var sender = arr[0];
                        var end = arr[1];
                        stat = "";
                        if(arr[2] == 0)
                            stat = "Not responded";
                        else
                            stat = "Rejected";
                    
                        str = str+"<tr>";
                        str = str+"<td>"+arr[0]+"</td><td>"+arr[1]+"</td><td>"+stat+"</td><td><button onclick=return_cdt(\""+arr[3]+"\")>RETURN CREDITS </button></td></tr>";
 
                    }
                    $("#fill_here").html(str);
                }
            });
            }
        </script>
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
                                <a href="index_meetup.php" class="active"><i class="fa fa-hand-o-right fa-fw"></i> Project Meetups</a>
                            </li>
                            <li>
                                <a href="index_bookings.php"><i class="fa fa-cube fa-fw"></i>Alloted Space Map</a>
                            </li>
                             <li>
                                <a href="bulb.php" class=""><i class="fa fa-lightbulb-o fa-fw"></i> Energy Efficiency</a>
                            </li>
                            <li>
                                <a href="../../html/login.php" class=""><i class="fa fa-user fa-fw"></i> Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper" class="container-fluid">
                    <div class="row">
                        Refunds to be made
                    </div>
                   
                   <div class="row">
                   <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            Sender
                        </th>
                        <th>
                            Refund Date
                        </th>
                        <th>
                            Is Accepted
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>

                   <tbody id="fill_here">
                       
                   </tbody>
                   </table>
            </div>
                    <div>

                    </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        

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
