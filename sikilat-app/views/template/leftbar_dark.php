
    <body>        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">
                    <!-- LOGO -->                    
                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['nama_pengirim']?></a> </h5>                        
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->                            
                            <li>
                                <a href="Profil.php">
                                    <i class="mdi mdi-account"></i> <span> Profil Saya </span>
                                </a>
                            </li>   

                            <li>
                                <a href="Pengiriman.php">
                                    <i class="mdi mdi-package"></i> <span> Pengiriman </span>
                                </a>
                            </li>   
                            <li>
                                <a href="StatusPengiriman.php">
                                    <i class="mdi mdi-cube-send"></i> <span> Status Pengiriman </span>
                                </a>
                            </li>                                                       

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">