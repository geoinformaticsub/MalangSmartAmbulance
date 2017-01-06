<?php
include('koneksi.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8" />
        <title>Sistem Manajemen Ambulans Kota Malang</title>
        <meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
        <meta name="author" content="Łukasz Holeczek" />
        <meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="css/style.min.css" rel="stylesheet" />
        <link href="css/style-responsive.min.css" rel="stylesheet" />
        <link href="css/retina.css" rel="stylesheet" />
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="ico/favicon.png" />
        <!-- end: Favicon and Touch Icons -->	

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            (function() {
                window.onload = function() {

                    // membuat map berdasarkan div id untuk map
                    var mapDiv = document.getElementById('map');

                    // penentuan longitude 
                    var latlng = new google.maps.LatLng(-6.589166, 106.792999);

                    // konfigurasi untuk maps api
                    var options = {
                        center: latlng,
                        zoom: 13,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    // membuat imagenya berdasarkan divnya
                    var map = new google.maps.Map(mapDiv, options);
                }
            })();
        </script>
<!--        <style type="text/css">
            body {
                font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
                font-size: small;
                background: #fff;
            }
            #map {
                width: 100%;
                height: 500px;
                border: 1px solid #000;
            }
        </style>-->
    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>		
                    <div class="row-fluid">

                        <a class="brand span2" href="home.php"><span><img src="img/lunarpixel_logo1.png"  /></span></a>
                    </div>		
                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">

                            <!-- start: Notifications Dropdown -->

                            <!-- end: Notifications Dropdown -->
                            <!-- start: Message Dropdown -->

                            <!-- end: Message Dropdown -->

                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
                                    <div class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></div>
                                    <div class="user">
                                        <span class="hello">Selamat Datang!</span>
                                        <span class="name">Admin</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">

                                    </li>

                                    <li><a href="index.php"><i class="icon-off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->


        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">

                    <div class="row-fluid actions">

                        <input type="text" class="search span12" placeholder="..." />

                    </div>	

                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="home.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                            <!--                            <li>
                                                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Input Data Arsip</span> <span class="label">2</span></a>
                                                            <ul>
                                                                <li><a class="submenu" href="input_pengadaan.php"><i class="icon-hdd"></i><span class="hidden-tablet"> Data Pengadaan </span></a></li>
                                                                <li><a class="submenu" href="input_pelanggan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Pelanggan</span></a></li>
                                                            </ul>	
                                                        </li>-->
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Data Arsip</span> <span class="label">7</span></a>
                                <ul>
                                    <!--<li><a class="submenu" href="table_korban.php"><i class="icon-hdd"></i><span class="hidden-tablet"> Data Pengadaan </span></a></li>-->
                                    <li><a class="submenu" href="table_korban.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Korban</span></a></li>
                                    <li><a class="submenu" href="table_ambulans.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Ambulans</span></a></li>
                                    <li><a class="submenu" href="table_jenis.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Jenis Darurat</span></a></li>
                                    <li><a class="submenu" href="table_rumahsakit.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Rumah Sakit</span></a></li>
                                    <li><a class="submenu" href="table_lampu.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Lampu LL</span></a></li>
                                    <li><a class="submenu" href="table_kerapatan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Kerapatan Jalan</span></a></li>
                                    <li><a class="submenu" href="table_kepadatan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Kepadatan Jalan</span></a></li>

                                </ul>	
                            </li>
                            <li><a href="rute.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Routing Map</span></a></li>
                            <li><a href="table_user.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manajemen User</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <!-- start: Content -->
                <div id="content" class="span10">


                    <div class="row-fluid">		
                        
                            <div id="map"></div>
                      
                    </div><!--/span-->

                </div><!--/row-->





            </div>
            <!-- end: Content -->

        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer>
            <p>
                <span style="text-align:left;float:left">&copy; 2015 <a href="" alt="Bootstrap Themes">Ika Qutsiati U. & Nur M. Sakinah</a></span>
                <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co" alt="Bootstrap Admin Templates">SimpliQ</a></span>
            </p>

        </footer>

    </div><!--/.fluid-container-->

    <!-- start: JavaScript-->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>	
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>	
    <script src="js/jquery.ui.touch-punch.js"></script>	
    <script src="js/modernizr.js"></script>	
    <script src="js/bootstrap.min.js"></script>	
    <script src="js/jquery.cookie.js"></script>	
    <script src='js/fullcalendar.min.js'></script>	
    <script src='js/jquery.dataTables.min.js'></script>
    <script src="js/excanvas.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    <script src="js/jquery.flot.time.js"></script>

    <script src="js/jquery.chosen.min.js"></script>	
    <script src="js/jquery.uniform.min.js"></script>		
    <script src="js/jquery.cleditor.min.js"></script>	
    <script src="js/jquery.noty.js"></script>	
    <script src="js/jquery.elfinder.min.js"></script>	
    <script src="js/jquery.raty.min.js"></script>	
    <script src="js/jquery.iphone.toggle.js"></script>	
    <script src="js/jquery.uploadify-3.1.min.js"></script>	
    <script src="js/jquery.gritter.min.js"></script>	
    <script src="js/jquery.imagesloaded.js"></script>	
    <script src="js/jquery.masonry.min.js"></script>	
    <script src="js/jquery.knob.modified.js"></script>	
    <script src="js/jquery.sparkline.min.js"></script>	
    <script src="js/counter.min.js"></script>	
    <script src="js/raphael.2.1.0.min.js"></script>
    <script src="js/justgage.1.0.1.min.js"></script>	
    <script src="js/jquery.autosize.min.js"></script>	
    <script src="js/retina.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/wizard.min.js"></script>
    <script src="js/core.min.js"></script>	
    <script src="js/charts.min.js"></script>	
    <script src="js/custom.min.js"></script>
    <!-- end: JavaScript-->

</body>
<html>