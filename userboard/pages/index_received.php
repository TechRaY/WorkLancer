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

        <title>RECEIVED INVITEES</title>

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
    <script type="text/javascript">

            function update_invitee(pid,val)
            {
               // alert(pid+" "+val);
                var str = "";
                $.ajax({
                type: "POST",
                url: "update_invitee.php",
                data:{
                    "pid" : pid,
                    "val" : val
                },
                success: function(data) {
            
                $("#modal_text").text(data);
                $('#myModal').modal('show'); 
                }
                
                
             });
            }

            $(document).ready(function(){

                var str = "";
                $.ajax({
                type: "POST",
                url: "retrieve_view_invite.php",
                success: function(data) {

                    ar = (data+"").split("|");
                    //alert(ar);
                    for (var i = 0; i < ar.length-1; i++) {

                        arr = (ar[i]+"").split(",");

                        var pidd = arr[arr.length-1];
                        //alert(pidd+" "+arr.length);
                       // but1 = ""+pidd+",\"1\")\">ACCEPT</button>";
                       // but2 = "<button onclick=\"update_invitee("+pidd+",\"2\")\">REJECT</button>";
                        
                    
                        str = str+"<tr>";
                        str = str+"<td>"+arr[0]+"</td><td>"+arr[1]+"</td><td>"+arr[2]+"</td><td>"+arr[3]+"</td><td>"+arr[4]+"</td><td><button onclick=update_invitee(\""+pidd+"\",\"1\")>ACCEPT</button></td><td><button onclick=update_invitee(\""+pidd+"\",\"2\")>REJECT</button></td></tr>";
 
                    }
                    $("#fill_here").html(str);
                }
                
                
             });

            });

            
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
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                             <li>
                                <a href="index_sent.php"><i class="fa fa-hand-o-right fa-fw"></i> Sent Invites</a>
                            </li>
                            <li>
                                <a href="index_received.php" class="active"><i class="fa fa-cube fa-fw"></i> Received Invites</a>
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

            <div class="container">
            <div class="row">
                <div class="row">
                   <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            Company Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Stipend
                        </th>
                        <th>
                            Duration
                        </th>
                        <th>
                            Sender Name
                        </th>
                        <th colspan="2" class="text-center">
                            Reply
                        </th>
                    </tr>
                    </thead>

                   <tbody id="fill_here">
                       
                   </tbody>
                   </table>
            </div>
            </div>
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
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>