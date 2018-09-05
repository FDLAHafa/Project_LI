<?php include("dbconn.php");?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="Dashboard.php">SPBUR</a>
        </div>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="https://pahang.uitm.edu.my/v3/"><i class="fa fa-home fa-fw"></i>UiTM Pahang</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $r['staff_ID']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="signup.php"><i class="fa fa-gear fa-fw"></i> Add New User</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="Dashboard.php" class=""><i class="fa fa-pie-chart fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-group fa-fww"></i> Pelajar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="rpelajar.php" class=""><i class="fa fa-list fa-fww"></i> Senarai Pelajar</a>
                            </li>
                            <li>
                                <a href="srs.php" class=""><i class="fa fa-plus-square-o fa-fww"></i> Sistem Pendaftaran Pelajar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Saman<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                        <a href="KPCheck.php">SRD</a>
                            </li>
                              
                        </ul>
                        
                                  
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-clipboard fa-fw"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            	<li>
                                    <a href="fir.php">Aduan Awal (FIR)</a>
                                </li>
                                <li>
                                    <a href="kadpelajar.php">Kad Pelajar Hilang</a>
                                </li>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wpforms fa-fw"></i> Rekod <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="rfir.php">Aduan Awal(FIR)</a>
                            </li>
                            <li>
                                <a href="rkadpelajar.php">Kad Pelajar Hilang</a>
                            </li>
                            <li>
                                <a href="rsaman.php">Saman SRD</a>
                            </li>
                        </ul>
                    </li>
                    </li>
                </ul>

            </div>
        </div>
    </nav>