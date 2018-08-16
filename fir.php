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
      </div>

  <!-- Page Content -->
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Aduan Awal</h1>
              </div>
          </div>
      <div class="col-lg-6">
          <form role="form" method="post" action="firProcess.php">
              <div class="panel-body">
                  <p class="text-danger" disabled>NO: C011401 *Example</p>
              </div>
              <br><label>Kepada sesiapa yang berkenaan :</label><br>
              <div>
                <div class="form-group input-group">
                  <span class="input-group-addon">Nama Pelajar</span>
                  <input type="text" name="name" class="form-control" >
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">No Kad Pengenalan</span>
                    <input type="number" name="mykad" class="form-control" placeholder="Eg : 990823104331">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">No Pelajar UiTM</span>
                    <input type="number" name="matric_no" class="form-control" placeholder="Eg : 2015847765">
                </div>
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Kursus</span>
                  <input type="text" name="prog_code" class="form-control" placeholder="Eg : CS 111">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Fakulti</span>
                  <input type="text" name="faculty" class="form-control" placeholder="Eg : FSKM">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Alamat Kolej Kediaman</span>
                  <input type="text" name="address" class="form-control" placeholder="Eg : Kolej Mat Kilau, Tingkat 9, Rumah 21">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Tarikh Kejadian</span>
                  <input type="date" name="missDate" class="form-control">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Masa Kejadian</span>
                  <input type="time" name="missTime" class="form-control">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Tempat Kejadian</span>
                  <input type="text" name="missPlace" class="form-control" placeholder="Eg : Bangunan Sarjana">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Barang Hilang</span>
                  <input type="text" name="missItem" class="form-control" placeholder="Eg : RMxx.xx , Dompet">
              </div>
              <div class="form-group input-group">
                  <label>Laporan ringkas bagaimana kehilangan berlaku</label>
                  <textarea class="form-control" rows="10" name="report"></textarea>
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button><p>
              </div>
          </form>
      </div>
      </div>
  </div>
  </body>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/startmin.js"></script>

</html>
