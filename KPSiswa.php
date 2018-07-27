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
                    <h1 class="page-header">Kesalahan Pelajar(Siswa)</h1> 
                </div>
            </div>
                                        <form role="form" method="post" action="KPSiswa1.php">
                                            <div class="panel-body">
                                                <p class="text-danger" disabled>NO: C011401 *Example</p>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Nama: </span>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">No.Kad Pelajar: </span>
                                                <input type="text" name="matric_no" class="form-control" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">No.Kad Pengenalan: </span>
                                                <input type="text" name="mykad_no" class="form-control" placeholder='without " - " ' required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Kod Program: </span>
                                                <input type="text" name="prog_code" class="form-control" placeholder="example: CS110" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Tarikh: </span>
                                                <input type="date" name="summon_date" class="col-lg-2" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Masa: </span>
                                                <input type="text" name="summon_time" class="form-control" placeholder="example: 10.00am" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Tempat: </span>
                                                <input type="text" name="summon_place" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Dengan ini adalah diberitahu bahawa anda telah melakukan kesalahan seperti berikut: </label>
                                            </div>
                                            <div class="form-group">
                                                <label>Siswa</label>
                                                <p class="form-control-static">1. Baju</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Jarang">1.1 Jarang
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Tidak berkolar pada waktu pejabat">1.2 Tidak berkolar pada waktu pejabat
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam)">1.3 Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam)
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Tidak berlengan">1.4 Tidak berlengan
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Mempunyai tulisan, perkataan atau gambar liar/lucah">1.5 Mempunyai tulisan, perkataan atau gambar liar/lucah
                                                    </label>
                                                </div>
                                                <p class="form-control-static">2. Seluar</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Memakai seluar pendek">2.1 Memakai seluar pendek
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Ketat/Koyak/Lusuh/Jarang">2.2 Ketat/Koyak/Lusuh/Jarang
                                                    </label>
                                                </div>
                                                <p class="form-control-static">3. Kasut</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Memakai selipar">3.1 Memakai selipar
                                                    </label>
                                                </div>
                                                <p class="form-control-static">4. Rambut</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Panjang/Tidak kemas">4.1 Panjang/Tidak kemas
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Mewarnakan rambut">4.2 Mewarnakan rambut
                                                    </label>
                                                </div>
                                                <p class="form-control-static">5. Pengunaan Perpustakaan</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Membuat Bising">5.1 Membuat Bising
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Ingkar arahan Pegawai Perpusatkaan">5.2 Ingkar arahan Pegawai Perpusatkaan
                                                    </label>
                                                </div>
                                                <p class="form-control-static">6. Kolej Kediaman</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Membuat Bising">6.1 Membuat Bising
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Bilik Kotor/Tidak kemas">6.2 Bilik Kotor/Tidak kemas
                                                    </label>
                                                </div>
                                                <p class="form-control-static">7. Kad Pelajar</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Tidak membawa/gantung/pamer">7.1 Tidak membawa/gantung/pamer
                                                    </label>
                                                </div>
                                                <p class="form-control-static">8. Perhiasan Diri</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Memakai anting-anting/rantai/gelang/pamer">8.1 Memakai anting-anting/rantai/gelang/pamer
                                                    </label>
                                                </div>
                                                <p class="form-control-static">9. Tempat Tinggal/Tidur Dalam Kampus</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="summons[]" value="Tidur di tempat yang tidak dibenarkan">9.1 Tidur di tempat yang tidak dibenarkan
                                                    </label>
                                                </div>
                                                <p class="form-control-static">10. Lain Lain</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" ><input type="text" name="summons[]">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <pre>Kompaun ini hendaklah dijelaskan dalam tempoh 5 hari. Sekiranya tidak dijelaskan dalam tempoh yang ditetapkan, kadar maksimum boleh dikenakan. <br><br>Anda boleh manghadirkan diri atau mengaku kesalahan ini dengan surat kepada Pegawai Hal Ehwal Pelajar supaya kesalahan ini boleh di kompaunkan.</pre>
                                                <br><br><br><br>
                                                <label>.................................................</label>
                                                <br><label>Tandatangan Pelapor</label>
                                                <br><label>Nama:</label>
                                                <br><label>Pihak Berkuasa Tatatertib</label>
                                                <br><label>b.p Pegawai Hal Ehwal Pelajar</label>
                                                <br><br><br><br>
                                                <label>.................................................</label>
                                                <br><label>Tandatangan Pelajar</label>
                                                <br><br><label>Dibawah Kaedah 26A(1) Bahagian II, Jadual Kedua Akta 174, kesalahan ini boleh dikenakan kompaun tidak melebihi RM50.00 bagi setiap kesalahan. Anda dikehendaki membayar kompaun sebanyak</label>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">RM </span>
                                                    <input type="text" name="rm" class="col-lg-1" placeholder="eg: 10.00" required>
                                                </div>
                                               
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">sebelum </span>
                                                    <input type="date" name="paybefore" required>
                                                </div>
                                                <label>jika kompaun ini tidak dijelaskan pada tarikh tersebut <br>mengikut Kaedah 64, Bahagian V, Jadual Kedua Akta 174(1976), tindakan menggantung dari menjadi pelajar UiTM akan diambil.</label>
                                                <br><br><br><br>
                                                <label>.................................................</label>
                                                <br><label>Pegawai Hal Ehwal Pelajar</label>
                                                <br><label>Tarikh: </label>
                                                <br><br><label>NOTA: SILA MAJUKAN SALNAN RESIT KEPADA PEJABAT POLIS BANTUAN UiTM UNTUK RUJUKAN</label>

                                            </div>
                                            
                                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset Form</button>
                                            <br><br><br><br>
                                        </form>
                                    </div>

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
