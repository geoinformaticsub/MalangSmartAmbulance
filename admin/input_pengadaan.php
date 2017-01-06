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
                                <h2><i class="icon-edit"></i>Input Data Pengadaan dan Pemasangan</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn-close"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form class="form-horizontal" method="post" action="proses.php" />
                                <fieldset>
                                    <br>
                                    <div class="control-group error">
                                        <label class="control-label" for="inputError">ID Rekapitulasi</label>
                                        <div class="controls">
                                            <input type="text" name="id" value="Generated By System" id="inputError" disabled/>
                                            <span class="help-inline">ID akan otomatis dibuat oleh sistem</span>
                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> No </label>
                                        <div class="controls">
                                            <input type="text" name="no" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> No NDE </label>
                                        <div class="controls">
                                            <input type="text" name="no_nde" class="span6 inputWarning" id="typeahead" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Perihal</label>
                                        <div class="controls">
                                            <input type="text" name="perihal" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Tanggal </label>
                                        <div class="controls">
                                            <input type="date" name="tanggal" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Umur</label>
                                        <div class="controls">
                                            <input type="text" name="umur" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Due Date </label>
                                        <div class="controls">
                                            <input type="date" name="due" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Pengirim</label>
                                        <div class="controls">
                                            <input type="text" name="pengirim" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Pekerjaan </label>
                                        <div class="controls">
                                            <input type="text" name="pekerjaan" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Penerima</label>
                                        <div class="controls">
                                            <input type="text" name="penerima" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Area Witel </label>
                                        <div class="controls">
                                            <input type="text" name="area" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Paket</label>
                                        <div class="controls">
                                            <input type="text" name="paket" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Kegiatan </label>
                                        <div class="controls">
                                            <input type="text" name="kegiatan" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Nilai</label>
                                        <div class="controls">
                                            <input type="text" name="nilai" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> No. PR </label>
                                        <div class="controls">
                                            <input type="text" name="no_pr" class="span6 typeahead" id="typeahead" data-provide="inputWarning" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Tanggal PR</label>
                                        <div class="controls">
                                            <input type="date" name="tgl_pr" class="span6 typeahead" id="typeahead" data-provide="inputSuccess" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Survei </label>
                                        <div class="controls">
                                            <input type="text" name="survei" class="span6 typeahead" id="typeahead" data-provide="inputSuccess" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> L1 </label>
                                        <div class="controls">
                                            <input type="text" name="l1" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> L3 </label>
                                        <div class="controls">
                                            <input type="text" name="l3" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> BOQ </label>
                                        <div class="controls">
                                            <input type="text" name="boq" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> KMZ </label>
                                        <div class="controls">
                                            <input type="text" name="kmz" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> ASB DRAW</label>
                                        <div class="controls">
                                            <input type="text" name="asb_draw" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Status </label>
                                        <div class="controls">
                                            <input type="text" name="status" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> No. SP</label>
                                        <div class="controls">
                                            <input type="text" name="no_sp" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Tanggal Penetapan </label>
                                        <div class="controls">
                                            <input type="date" name="tgl_penetapan" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Surat Kesanggupan</label>
                                        <div class="controls">
                                            <input type="text" name="srt_kesanggupan" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Mitra </label>
                                        <div class="controls">
                                            <input type="text" name="mitra" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead"> No. PO</label>
                                        <div class="controls">
                                            <input type="text" name="no_po" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Tanggal PO </label>
                                        <div class="controls">
                                            <input type="date" name="tgl_po" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />
 
                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Baut</label>
                                        <div class="controls">
                                            <input type="date" name="baut"  class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> FT </label>
                                        <div class="controls">
                                            <input type="text" name="ft" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Bast 1</label>
                                        <div class="controls">
                                            <input type="date" name="bast1" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group warning">
                                        <label class="control-label" for="inputWarning"> ID Sistem </label>
                                        <div class="controls">
                                            <input type="text" name="id_sis" class="span6 typeahead" id="inputWarning" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Kendala</label>
                                        <div class="controls">
                                            <input type="text" name="kendala" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Keterangan</label>
                                        <div class="controls">
                                            <input type="text" name="keterangan" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Proaktif</label>
                                        <div class="controls">
                                            <input type="text" name="proaktif" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>
                                    <div class="control-group success">
                                        <label class="control-label" for="inputSuccess"> Keteranga Proaktif</label>
                                        <div class="controls">
                                            <input type="text" name="ket_proaktif" class="span6 typeahead" id="inputSuccess" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' />

                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" name="tambah_pengadaan" class="btn btn-primary">Simpan</button>
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