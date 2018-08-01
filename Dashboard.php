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


        <!--PHP segement for tables and charts -->
        <?php
        include 'dbconn.php';

        //php code for violations
        
        $jan = "SELECT * from kp where month(summon_date) = 01 ";
        $janTest = mysqli_query($dbconn,$jan);
        if ($janTest == null) {$janCount = 0;}
        else {$janCount = mysqli_num_rows($janTest);}

        $feb = "SELECT * from kp where month(summon_date) = 02 ";
        $febTest = mysqli_query($dbconn,$feb);
        if ($febTest == null) {$febCount = 0;}
        else {$febCount = mysqli_num_rows($febTest);}

        $mar = "SELECT * from kp where month(summon_date) = 03 ";
        $marTest = mysqli_query($dbconn,$mar);
        if ($marTest == null) {$marCount = 0;}
        else {$marCount = mysqli_num_rows($marTest);}

        $apr = "SELECT * from kp where month(summon_date) = 04 ";
        $aprTest = mysqli_query($dbconn,$apr);
        if ($aprTest == null) {$aprCount = 0;}
        else {$aprCount = mysqli_num_rows($aprTest);}

        $may = "SELECT * from kp where month(summon_date) = 05 ";
        $mayTest = mysqli_query($dbconn,$may);
        if ($mayTest == null) {$mayCount = 0;}
        else {$mayCount = mysqli_num_rows($mayTest);}

        $jun = "SELECT * from kp where month(summon_date) = 06 ";
        $junTest = mysqli_query($dbconn,$jun);
        if ($junTest == null) {$junCount = 0;}
        else {$junCount = mysqli_num_rows($junTest);}

        $jul = "SELECT * from kp where month(summon_date) = 07 ";
        $julTest = mysqli_query($dbconn,$jul);
        if ($julTest == null) {$julCount = 0;}
        else {$julCount = mysqli_num_rows($julTest);}

        $aug = "SELECT * from kp where month(summon_date) = 08 ";
        $augTest = mysqli_query($dbconn,$aug);
        if ($augTest == null) {$augCount = 0;}
        else {$augCount = mysqli_num_rows($augTest);}

        $sep = "SELECT * from kp where month(summon_date) = 09 ";
        $sepTest = mysqli_query($dbconn,$sep);
        if ($sepTest == null) {$sepCount = 0;}
        else {$sepCount = mysqli_num_rows($sepTest);}

        $oct = "SELECT * from kp where month(summon_date) = 10 ";
        $octTest = mysqli_query($dbconn,$oct);
        if ($janTest == null) {$janCount = 0;}
        else {$octCount = mysqli_num_rows($octTest);}

        $nov = "SELECT * from kp where month(summon_date) = 11 ";
        $novTest = mysqli_query($dbconn,$nov);
        if ($novTest == null) {$novCount = 0;}
        else {$novCount = mysqli_num_rows($novTest);}

        $dec = "SELECT * from kp where month(summon_date) = 12 ";
        $decTest = mysqli_query($dbconn,$dec);
        if ($decTest == null) {$decCount = 0;}
        else {$decCount = mysqli_num_rows($decTest);}

        $countArr = array($janCount,$febCount,$marCount,$aprCount,$mayCount,$junCount,$julCount,$augCount,$sepCount,$octCount,$novCount,$decCount);

        function intToMonth ($int)
        {
            $monthArr = array('January','Febuary','March','April','May','June','July','August','September','October','November','December');
            return $monthArr[$int];
        }

        $count = '';
        $iterVio = 0;
        foreach($countArr as $monthCount)
        {
            $month = intToMonth($iterVio);
            $countVio .= "{a : '".$month."' , b : ". $monthCount."},";
            $iterVio++;
        }
        $count = substr($count,0,-1);


        //php code for lost matric cards

        function intToFac ($int)
        {
            $facArr = array('FSKM','FSPPP','Business');
            return $facArr[$int];
        }

        $fskm = "SELECT * from kad where faculty LIKE '%FSKM%' ";
        $fskmTest = mysqli_query($dbconn,$fskm);
        if ($fskmTest == null) {$fskmCount = 0;}
        else {$fskmCount = mysqli_num_rows($fskmTest);}

        $fsppp = "SELECT * from kad where faculty LIKE '%FSPPP%' ";
        $fspppTest = mysqli_query($dbconn,$fsppp);
        if ($fspppTest == null) {$fspppCount = 0;}
        else {$fspppCount = mysqli_num_rows($fspppTest);}

        $facCountArr = array($fskmCount,$fspppCount);

        $iterFac = 0;
        $countFac = '';
        foreach($facCountArr as $facCount)
        {
            $fac = intToFac($iterFac);
            $countFac .= "{a : '".$fac."' , b : ". $facCount."},";
            $iterFac++;
        }
        $count = substr($count,0,-1);
        ?>
        
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
                                <div id='violations' style="height: 250px;">
                                    <script>
                                        Morris.Bar({
                                            element : 'violations',
                                            data:[
                                                    <?php echo $countVio ; ?>
                                                    ],
                                            xkey: 'a',
                                            ykeys:['b'],
                                            labels:['Jumlah Kesalahan'],
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
                        Jumlah Kehilangan Kad Matrik
                        </div>
                        <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id='lostMatric' style="height: 250px;">
                                    <script>
                                        Morris.Bar({
                                            element : 'lostMatric',
                                            data:[
                                                    <?php echo $countFac ; ?>
                                                    ],
                                            xkey: 'a',
                                            ykeys:['b'],
                                            labels:['Fakulti'],
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
                                                    {a : 1,b : 1},
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
