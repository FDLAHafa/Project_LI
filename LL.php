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
        <!-- Page Content -->
        <div id="page-wrapper">
        <div class="container-fluid">

        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">SAMAN KESALAHAN LALULINTAS</h1>
        </div>
        </div>
        <form role="form" method="post" action="LL1.php">
        <div class="panel-body">
        <p class="text-danger" disabled>NO: C011401 *Example</p>
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">TARIKH: </span>
        <input type="text" name="summon_date" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">MASA: </span>
        <input type="text" name="summon_time" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">NO.KENDERAAN: </span>
        <input type="text" name="vehicle_no" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">JENIS:KERETA/MOTOSIKAL </span>
        <input type="text" name="vehicle_type" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">TEMPAT: </span>
        <input type="text" name="summon_place" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">NO.SIRI PELEKAT: </span>
        <input type="text" name="sticker_no" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">SESI: </span>
        <input type="text" name="sesi" class="form-control">
        </div>

        <div class="form-group">
        <label>KESALAHAN : </label>

        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="MELETAK DI TEMPAT LARANGAN/DIKHASKAN">1. MELETAK DI TEMPAT LARANGAN/DIKHASKAN KEPADA........
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="MELETAK DI LUAR PETAK/PETAK KUNING">2. MELETAK DI LUAR PETAK/PETAK KUNING
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="MENGHALANG LALUAN">3. MENGHALANG LALUAN
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="TIADA LESEN MEMANDU/TAMAT TEMPOH">4. TIADA LESEN MEMANDU/TAMAT TEMPOH
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="LESEN(L) MEMBAWA PEMBONCENG">5. LESEN(L) MEMBAWA PEMBONCENG
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="TIADA CUKAI JALAN YANG SAH/TAMAT TEMPOH">6. TIADA CUKAI JALAN YANG SAH/TAMAT TEMPOH
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="MELANGGAR JALAN SEHALA/DILARANG MASUK">7. MELANGGAR JALAN SEHALA/DILARANG MASUK
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="TIDAK MEMAKAI TOPI KELEDAR(PENUNGGANG/PEMBONCENG)">8. TIDAK MEMAKAI TOPI KELEDAR(PENUNGGANG/PEMBONCENG)
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="TIADA PELEKAT UiTM SESI YANG DITETAPKAN">9. TIADA PELEKAT UiTM SESI..................
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="MELETAK DI KORIDOR/LALUAN PEJALAN KAKI">10. MELETAK DI KORIDOR/LALUAN PEJALAN KAKI
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="summons[]" value="KENDERAAN DIKUNCI">11. KENDERAAN DIKUNCI
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" >12. <input type="text" name="summons[]">
        </label>
        </div>
        </div>

        <div class="form-group input-group">
        <span class="input-group-addon">NAMA PELAJAR: </span>
        <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">NO.KAD PELAJAR: </span>
        <input type="text" name="matric_no" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">FAKULTI: </span>
        <input type="text" name="faculty" class="form-control">
        </div>
        <div class="form-group input-group">
        <span class="input-group-addon">KOLEJ: </span>
        <input type="text" name="college" class="form-control">
        </div>
        <div class="form-group">
        <label>Dengan ini anda telah melakukan kesalahan seperti tersebut di atas.</label>
        <label>Kenderaan anda telah:-</label>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="action[]" value="Di Kunci">Di Kunci
        </label>
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox" name="action[]" value="Di Saman">Di Saman
        </label>
        </div>
        </div>

        <br><br><br><br>
        <div class="form-group">
        <label>Kes ini boleh dikompaun. Oleh itu anda boleh, sebelum (tarikh) ............................... menghadirkan diri kepada Ketua Pegawai Keselamatan supaya kesalahan ini boleh dikompaunkan.</label>
        <br><label>Sekian, Terima Kasih. </label>
        <br><br><br><br>
        <label>.................................................</label>
        <br><label>NAMA STAF:</label>
        <br><label>NO.ANGGOTA:</label>
        <br><br><br><label>Tandatangan Penerima</label>
        <br><br><br><br>
        <label>.................................................</label>
        <br><label>(No. Kad Pelajar .....................................)</label>
        <br><br><br><br>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        <pre>Dibawah Kaedah 47, Bahagian IV, Jadual Kedua Akta 174, kesalahan ini boleh dikenakan kompaun tidak melebihi RM100.00 bagi setiap kesalahan. <br>Anda dikehendaki membayar kompaun sebanyak RM.......... sebelum.................. <br>Jika kompaun ini tidak dijelaskan pada tarikh yang ditetapkan, mengikut Kaedah 64, Bahagian V, Jadual Kedua Akta 174, Tindakan penggantungan sebagai pelajar UiTM akan diambil.</pre>
        <br><br><br><br>
        <label>.................................................</label>
        <br><label>Ketua Pegawai Keselamatan</label>
        <br><br><br><br>
        <label>.................................................</label>
        <br><label>Tarikh: </label>
        <br><br><label>NOTA: KEMUKAKAN RESIT BAYARAN KE PEJABAT KESELAMATAN UNTUK DIREKOD</label>
        <br><label>SALINAN KEDUA - KEKAL PADA BUKU</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-default">Reset Form</button>
        <br><br><br><br>
        </form>
        <!-- ... Your content goes here ... -->
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
