<?php
include('koneksi.php');
 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8" />
        <title>Sistem Informasi Pengarsipan PT. Telkom Akses</title>
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
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Input Data Arsip</span> <span class="label">2</span></a>
                                <ul>
                                    <li><a class="submenu" href="input_pengadaan.php"><i class="icon-hdd"></i><span class="hidden-tablet"> Data Pengadaan </span></a></li>
                                    <li><a class="submenu" href="input_pelanggan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Pelanggan</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Data Arsip</span> <span class="label">2</span></a>
                                <ul>
                                    <!--<li><a class="submenu" href="table_pengadaan.php"><i class="icon-hdd"></i><span class="hidden-tablet"> Data Pengadaan </span></a></li>-->
                                    <li><a class="submenu" href="table_pengadaan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Pengadaan</span></a></li>
                                    <li><a class="submenu" href="table_pelanggan.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Data Pelanggan</span></a></li>
                                    
                                </ul>	
                            </li>
                            <li><a href="table_user.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manajemen User</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <!-- start: Content -->
                <div id="content" class="span10">

                    <div class="row-fluid">
                        <div class="box span12">
                            <div class="box-header">
                                <h2><i class="icon-edit"></i>Input Data Projek Control</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn-close"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="jalan.php" />
                                <fieldset>
<!--                                    <div class="control-group">
                                        <label class="control-label" for="typeahead"> Bulan Pengadaan </label>
                                        <div class="controls">
                                            <input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead"> Tahun Pengadaan</label>
                                        <div class="controls">
                                            <input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>-->
<!--                                    <div class="control-group">
                                        <label class="control-label" for="date01">Tanggal Input</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" id="date01" value="Bulan/Tanggal/Tahun" />
                                            <p class="help-block">Format : Bulan/Tanggal/Tahun</p>
                                        </div>
                                    </div>-->
                                    <div class="control-group">
                                        <label class="control-label" for="fileInput">File input</label>
                                        <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" name="fileexcel" type="file" />
                                            <p class="help-block">* File yang bisa di import adalah .xls (Excel 2003-2007)</p>
                                        </div>
                                        
                                    </div> 
                                    <div class="control-group hidden-phone">
                                        <label class="control-label" for="textarea2">Keterangan</label>
                                        <div class="controls">
                                            <textarea class="cleditor" id="textarea2" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Import</button>
                                        <button type="reset" class="btn">Batal</button>
                                    </div>
                                </fieldset>
                                </form>   

                            </div>
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
</html>