<?php include("dbconn.php");?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="Dashboard.php">SPBUR</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                    <div>
                        <i class="fa fa-comment fa-fw"></i> New Comment
                        <span class="pull-right text-muted small">1 minutes ago</span>
                    </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                <?php echo $r['staff_ID']; ?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
                <li>
                    <a href="Dashboard.php" class=""><i class="fa fa-television fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="srs.php" class=""><i class="fa fa-group fa-fww"></i> Sistem Pendaftaran Pelajar</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Saman<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">SRD <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="KPSiswa.php">Kesalahan Pelajar (Siswa)</a>
                                </li>
                                <li>
                                    <a href="KPsiswi.php">Kesalahan Pelajar (Siswi)</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="fir.php" class=""><i class="fa fa-hand-pointer-o fa-fw"></i> Aduan Awal (FIR)</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clipboard fa-fw"></i> Aduan <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                            <li>
                                <a href="kadpelajar.php">Kad Pelajar Hilang</a>
                            </li>
                            <li>
                                <a href="barang.php">Barang Hilang</a>
                            </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wpforms fa-fw"></i> Laporan <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                        <a href="rkadpelajar.php">Kad Pelajar Hilang</a>
                    </li>
                    <li>
                        <a href="rsaman.php">Saman SRD</a>
                    </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
