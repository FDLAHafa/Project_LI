<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
</body>
</html>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <h1>Laporan Saman Sahsiah Rupa Diri (SRD)</h1>
                    <br>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="dataTable_wrapper">
                        <div class="dataTables_length" id="dataTables-example_length">
                            <div class="row show-grid">
                            <div class="col-md-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No Siri</th>
                                                <th>Jantina</th>
                                                <th>Nama</th>
                                                <th>Kad Matrik</th>
                                                <th>Kad Pengenalan</th>
                                                <th>Kod Program</th>
                                                <th>Tarikh Saman</th>
                                                <th>Masa Saman</th>
                                                <th>Tempat Saman</th>
                                                <th>Kesalahan</th>
                                                <th>Kompaun</th>
                                                <th>Tarikh Akhir Pembayaran</th>
                                            </tr>
                                        </thead>

                    <?php 

                    $sql = "SELECT * FROM kp";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty                   
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){
                        
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>".$ro['series_no']."</td>";
                                        echo "<td>".$ro['gender']."</td>";
                                        echo "<td>".$ro['name']."</td>";
                                        echo "<td>".$ro['matric_no']."</td>";
                                        echo "<td>".$ro['mykad_no']."</td>";
                                        echo "<td>".$ro['prog_code']."</td>";
                                        echo "<td>".$ro['summon_date']."</td>";
                                        echo "<td>".$ro['summon_time']."</td>";
                                        echo "<td>".$ro['summon_place']."</td>";
                                        echo "<td>".$ro['summons']."</td>";
                                        echo "<td>RM".$ro['rm'].".00</td>";
                                        echo "<td>".$ro['paybefore']."</td>";
                                        //echo "<td>".$ro['refer']."</td>";
                                        echo "</tr>";
                                            }
                                            } ?>
                                        
                                    </table>
                                </div>
                                    </div>
                                </div>
                            </div>
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
