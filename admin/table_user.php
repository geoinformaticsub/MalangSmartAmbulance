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

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
                            <div class="box-header" data-original-title="">
                                <h2><i class="icon-user"></i><span class="break"></span>Members</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn-close"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                        <tr>
                                            <th>ID USER</th>
                                            <th>USERNAME</th>
                                            <!--<th>PASSWORD</th>-->
                                            <th>HAK AKSES</th>
                                            <th>FOTO</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <!--NAMPILIN-->
                                        <?php
                                        //Masukkan koneksi database disini
                                        $no = 1;
                                        $namafolder = "img/"; //tempat menyimpan file
                                        $con = mysql_connect("localhost", "root", "") or die("Gagal");
                                        mysql_select_db("telkomakses") or die("Gagal");
                                        $result = mysql_query("SELECT K_ID_USER, K_USERNAME, K_PASSWORD, K_HAK_AKSES, K_FOTO FROM user order by K_ID_USER asc;") or die("Gagal :" . mysql_error());
                                        while ($test = mysql_fetch_array($result)) {
                                            echo '<tr>';
                                            echo '<td>' . $test['K_ID_USER'] . '</td>';
                                            echo '<td>' . $test['K_USERNAME'] . '</td>';
//                                            echo '<td>' . $test['K_PASSWORD'] . '</td>';
                                            echo '<td>' . $test['K_HAK_AKSES'] . '</td>';
                                            echo '<td>';
                                            //ini bagian memanggil file gambar
                                            echo '<img src="' . $test['K_FOTO'] . '" width="100" />';
                                            echo '</td>';
                                            echo "<td class = 'center'>";

                                            //mysql_close(); //tutup koneksi database  
                                            ?>



                                            <!--BUTTON KE MODAL-->
<!--                                        <button data-toggle="modal" class = 'btn btn-info' href = "#myModalEdit<?php echo $test['K_ID_USER']; ?>">
                                            <i class = 'icon-edit '></i>
                                        </button>-->

                                        <button data-toggle="modal" class ='btn btn-danger' href = "#myModalHapus<?php echo $test['K_ID_USER']; ?>">
                                            <i class = 'icon-trash '></i>
                                        </button>

                                        <!--MODAL HAPUS-->
                                        <div class="modal hide fade" id="myModalHapus<?php echo $test['K_ID_USER']; ?>">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                <h3 class="modal-title">Form Hapus User</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form name="hapususer" method="post" action="proses.php?id_user=<?php echo $test['K_ID_USER']; ?>">
                                                    <p>Anda yakin ingin menghapus user <b>"<?php echo $test['K_USERNAME']; ?>"</b> ini ?</p>
                                                    <br>
                                                    <button type="submit" name="hapus_user" class="btn btn-primary">OK</button>
                                                </form>

                                            </div>
<!--                                            <div class="modal-footer">
                                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                                                <a href="#" class="btn btn-primary">Simpan</a>
                                            </div>-->
                                        </div>

                                        <!--MODAL EDIT-->
                                        <div class="modal hide fade" id="myModalEdit<?php echo $test['K_ID_USER']; ?>">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                <h3 class="modal-title">Form Edit User</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="proses.php?id_user=<?php echo $test['K_ID_USER'];?>&username=<?php echo $test['K_USERNAME']; ?>&password=<?php echo $test['K_PASSWORD']; ?>&hak_akses=<?php echo $test['K_HAK_AKSES']; ?>&foto=<?php echo $test['K_FOTO']; ?>" method="post" enctype="multipart/form-data" />
                                                <fieldset>
                                                    <div class="control-group">
                                                        <label class="control-label" for="typeahead"> ID User </label>
                                                        <div class="controls">
                                                            <input type="text" name="iduser" value="<?php echo $test['K_ID_USER']; ?>" class="span6 typeahead"  data-provide="typeahead" data-items="4" disabled >
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="typeahead"> Username</label>
                                                        <div class="controls">
                                                            <input type="text" name="username" value="<?php echo $test['K_USERNAME']; ?>" class="span6 typeahead"  data-provide="typeahead" data-items="4" >

                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="typeahead"> Password </label>
                                                        <div class="controls">
                                                            <input type="password" name="password" value="<?php echo $test['K_PASSWORD']; ?>" class="span6 typeahead"  data-provide="typeahead" data-items="4" >

                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="selectError30">Hak Akses</label>
                                                        <div class="controls" name="hakakses">
                                                            <select id="selectError30">
                                                                <option />Pilih Hak Akses
                                                                <option />Manajer
                                                                <option />Helpdesk
                                                                <option />Admin
                                                                <option />Operasional
                                                                <option />Logistik
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="typeahead"> Foto </label>
                                                        <div class="controls">
                                                            <input name="nama_file" type="file" id="nama_file" size="30" />
                                                        </div>
                                                    </div>

                                                </fieldset>
                                                <div class="modal-footer">
                                                    <a href="" class="btn" data-dismiss="modal">Close</a>
                                                    <button type="submit" name="edit_user" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>

                                        </div>

                                        <?php
                                        echo "</td>";
                                        echo "</tr>";
                                        $no++;
                                    }
                                    ?>




                                    </tbody>

                                </table>   
                                <button data-toggle="modal" href ="#myModalTambahUser" class="btn btn-small btn-danger">Tambah User</button>
                                <div class="modal hide fade" id="myModalTambahUser">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h3 class="modal-title">Form Tambah User</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="simpan_gambar.php" method="post" enctype="multipart/form-data"/>
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="typeahead"> ID User </label>
                                                <div class="controls">
                                                    <input type="text" id="iduser" value="Generated By System" class="span6 typeahead"  data-provide="typeahead" data-items="4" disabled >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="typeahead"> Username</label>
                                                <div class="controls">
                                                    <input type="text" name="username"  class="span6 typeahead"  data-provide="typeahead" data-items="4" >

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="typeahead"> Password </label>
                                                <div class="controls">
                                                    <input type="password" name="password"  class="span6 typeahead"  data-provide="typeahead" data-items="4" >

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="selectError30">Hak Akses</label>
                                                <div class="controls" id="hakakses">
                                                    <select name="hak_akses" id="selectError30">
                                                        <option />Pilih Hak Akses
                                                        <option />Manajer
                                                        <option />Helpdesk
                                                        <option />Admin
                                                        <option />Operasional
                                                        <option />Logistik
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="typeahead"> Foto </label>
                                                <div class="controls">
                                                    <input name="nama_file" type="file" id="nama_file" size="30" />
                                                </div>
                                            </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                            <a href="" class="btn" data-dismiss="modal">Close</a>
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->
                </div>
                <!-- end: Content -->

            </div><!--/fluid-row-->


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