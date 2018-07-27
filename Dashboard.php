<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <title>SPBUR</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!--PHP segemnt for tables and charts -->
        
        
    </head>
    
    <body>
        <?php
            include("dbconn.php");
            session_start();
            if(isset($_SESSION['staff_ID'])) 
                {

                    $sql0 = "SELECT * FROM staff WHERE staff_ID = ".$_SESSION['staff_ID'].""; 
                    $query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));        
                    $r = mysqli_fetch_assoc($query0);
                }
        ?>

    <div id="wrapper">
    <?php include("DashboardOnly.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>

                <!-- ... Your content goes here ... -->
                <div class="row">

                <!-- row for dash items -->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        Jumlah Saman Bulanan
                        </div>
                        <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id='chart' style="height: 250px;">
                                    <script>
                                        Morris.Bar({
                                            element : 'chart',
                                            data:[
                                                    {a : 1,b : 2},
                                                    {a : 2,b : 4},
                                                    {a : 3,b : 6},
                                                    {a : 4,b : 8},
                                                    {a : 5,b : 10},
                                                    {a : 6,b : 12},
                                                    {a : 7,b : 14},
                                                    ],
                                            xkey: 'a',
                                            ykeys:['b'],
                                            labels:['Y-axis'],
                                            hideHover:'auto',
                                        });
                                        </script>
                                </div>
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        Jumlah Saman Bulanan
                        </div>
                        <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id='chart1' style="height: 250px;">
                                    <script>
                                        Morris.Bar({
                                            element : 'chart1',
                                            data:[
                                                    {a : 1,b : 2},
                                                    {a : 2,b : 4},
                                                    {a : 3,b : 6},
                                                    {a : 4,b : 8},
                                                    {a : 5,b : 10},
                                                    {a : 6,b : 12},
                                                    {a : 7,b : 14},
                                                    ],
                                            xkey: 'a',
                                            ykeys:['b'],
                                            labels:['Y-axis'],
                                            hideHover:'auto',
                                        });
                                        </script>
                                </div>
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        Jumlah Saman Bulanan
                        </div>
                        <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id='chart2' style="height: 250px;">
                                    <script>
                                        Morris.Bar({
                                            element : 'chart2',
                                            data:[
                                                    {a : 1,b : 2},
                                                    {a : 2,b : 4},
                                                    {a : 3,b : 6},
                                                    {a : 4,b : 8},
                                                    {a : 5,b : 10},
                                                    {a : 6,b : 12},
                                                    {a : 7,b : 14},
                                                    ],
                                            xkey: 'a',
                                            ykeys:['b'],
                                            labels:['Y-axis'],
                                            hideHover:'auto',
                                        });
                                        </script>
                                </div>
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>
        
       
        
    </body>
</html>
