<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Manajemen Ambulans Kota Malang</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!--<link href="admin/css/bootstrap.min.css" rel="stylesheet" />-->
        <!--<link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet" />-->
        <!--<link href="admin/css/style.min.css" rel="stylesheet" />-->
        <!--<link href="admin/css/style-responsive.min.css" rel="stylesheet" />-->
        <!--<link href="admin/css/retina.css" rel="stylesheet" />-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            .form-style-2{
                max-width: 1500px;
                padding: 20px 15px 10px 200px;
                font: 13px, "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
                color: black;
            }
            .form-style-2-heading{
                font-weight: bold;
                font-style: italic;
                border-bottom: 2px solid #ddd;
                margin-bottom: 20px;
                font-size: 15px;
                padding-bottom: 3px;
            }
            .form-style-2 label{
                display: block;
                margin: 0px 0px 20px 0px;
                color: gray;
            }
            .form-style-2 label > span{
                width: 100px;
                font-weight: bold;
                float: left;
                padding-top: 8px;
                padding-right: 10px;
                color: white;
            }
            .form-style-2 span.required{
                color:red;
            }
            .form-style-2 .tel-number-field{
                width: 108px;
                text-align: center;
            }
            .form-style-2 input.input-field{
                width: 65%;

            }
            .form-style-2 .textarea-field{
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border: 1px solid #C2C2C2;
                box-shadow: 1px 1px 4px #EBEBEB;
                -moz-box-shadow: 1px 1px 4px #EBEBEB;
                -webkit-box-shadow: 1px 1px 4px #EBEBEB;
                border-radius: 0px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 0px;
                padding: 10px;
                margin-top: 20px;
                outline: none;
                
            }
            .form-style-2 input.input-field, 
            .form-style-2 .tel-number-field, 

            .form-style-2 .select-field{
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border: 1px solid #C2C2C2;
                box-shadow: 1px 1px 4px #EA7B00;
                -moz-box-shadow: 1px 1px 4px #EA7B00;
                -webkit-box-shadow: 1px 1px 4px #EA7B00;
                border-radius: 0px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 0px;
                padding: 7px;
                outline: none;
            }
            .form-style-2 .input-field:focus, 
            .form-style-2 .tel-number-field:focus, 
            .form-style-2 .textarea-field:focus,  
            .form-style-2 .select-field:focus{
                border: 1px solid #EA7B00;
            }
            .form-style-2 .textarea-field{
                height:100px;
                width: 55%;
            }
            .form-style-2 input[type=submit],
            .form-style-2 input[type=button]{
                border: none;
                padding: 8px 15px 8px 15px;
                background: #FF8500;
                color: #fff;
                box-shadow: 1px 1px 4px #EA7B00;
                -moz-box-shadow: 1px 1px 4px #EA7B00;
                -webkit-box-shadow: 1px 1px 4px #EA7B00;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                margin-top: 20px;
            }
            .form-style-2 input[type=submit]:hover,
            .form-style-2 input[type=button]:hover{
                background: #EA7B00;
                color: #fff;
            }
        </style>
    </head>

    <body>

        <!-- Navigation -->
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top"  onclick = $("#menu-close").click(); >Menu Sistem</a>
                </li>
                <li>
                    <a href="#top" onclick = $("#menu-close").click(); >Home</a>
                </li>
                <li>
                    <a href="#about" onclick = $("#menu-close").click(); >Pemetaan</a>
                </li>
                <li>
                    <a href="#services" onclick = $("#menu-close").click(); >Layanan Ambulans</a>
                </li>
                <li>
                    <a href="#portfolio" onclick = $("#menu-close").click(); >Data Ambulans</a>
                </li>
                <!--                <li>
                                    <a href="#contact" onclick = $("#menu-close").click(); >Tentang Kami</a>
                                </li>-->
            </ul>
        </nav>

        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h1>Malang Smart Ambulance System</h1>
                <h3>Web GIS Manajemen Ambulans Kota Malang</h3>
                <br>
                <div class="portfolio-item">
                    <!--<a  href="a">-->
                    <!--                        <h4>
                                                <strong>Tekan tombol gawat darurat dibawah ini !</strong>
                                            </h4>-->
                    <img id="demo" class="img-portfolio img-responsive" src="img/panic.png" onclick="getLocation()">
                    <!--<button onclick="getLocation()">Try It</button>-->
                    <!--</a>-->
                </div>
                <div id="mapholder"></div>
                <script>
                        var x = document.getElementById("demo");
                        function getLocation()
                        {
                            if (navigator.geolocation)
                            {
                                navigator.geolocation.getCurrentPosition(showPosition, showError);
                            }
                            else {
                                x.innerHTML = "Geolocation is not supported by this browser.";
                            }
                        }

                        function showPosition(position)
                        {
                            var latlon = position.coords.latitude + "," + position.coords.longitude;
                            window.alert(position.coords.latitude + "," + position.coords.longitude);
                            //window.location.href = "myphpfile.php?name=" + javascriptVariable; 
                            //var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
                            //+latlon + "&zoom=14&size=100x100&sensor=false";
                            //document.getElementById("mapholder").innerHTML = "<img src='" + img_url + "' />";
                        }

                        function showError(error)
                        {
                            switch (error.code)
                            {
                                case error.PERMISSION_DENIED:
                                    x.innerHTML = "User denied the request for Geolocation."
                                    break;
                                case error.POSITION_UNAVAILABLE:
                                    x.innerHTML = "Location information is unavailable."
                                    break;
                                case error.TIMEOUT:
                                    x.innerHTML = "The request to get user location timed out."
                                    break;
                                case error.UNKNOWN_ERROR:
                                    x.innerHTML = "An unknown error occurred."
                                    break;
                            }
                        }

                        function buttonClick(subEvent)
                        {
                            var mainEvent = subEvent ? subEvent : window.event;

                            alert("This button click occurred at: X(" +
                                    mainEvent.screenX + ") and Y(" + mainEvent.screenY + ")");
                        }
                </script>
            </div>
        </header>

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <br>
                        <br>
                        <h2>Pemetaan Data Pendukung Sistem Manajemen Ambulans</h2>
                        <p class="lead">Pemetaan dari data-data terkait Sistem Manajemen Ambulans</p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="row text-center">
                        <!--                        <div class="col-md-3 col-sm-6">
                                                    <div class="service-item">
                                                        <span class="fa-stack fa-4x">
                                                            <i class="fa fa-circle fa-stack-2x"></i>
                                                            <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                                        </span>
                                                        <h4>
                                                            <strong>Peta Jaringan Jalan</strong>
                                                        </h4>
                                                        <p>Sub menu ini berisi peta jaringan jalan kota Malang</p>
                                                        <a href="#" class="btn btn-light">Lihat Peta</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="service-item">
                                                        <span class="fa-stack fa-4x">
                                                            <i class="fa fa-circle fa-stack-2x"></i>
                                                            <i class="fa fa-compass fa-stack-1x text-primary"></i>
                                                        </span>
                                                        <h4>
                                                            <strong>Peta Kerapatan Jalan</strong>
                                                        </h4>
                                                        <p>Sub menu ini berisi peta dari luas dan lebar jalan</p>
                                                        <a href="#" class="btn btn-light">Lihat Peta</a>
                                                    </div>
                                                </div>-->
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>Peta Rumah Sakit</strong>
                                </h4>
                                <p>Sub menu ini berisi peta dari rumah sakit di seluruh Kota Malang</p>
                                <a href="RS/rumahsakit.html" class="btn btn-light">Lihat Peta</a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>Peta Lampu Lalu Lintas</strong>
                                </h4>
                                <p>Sub menu ini berisi data dari lampu lalu lintas Kota Malang</p>
                                <a href="LLL/lalulintas.html" class="btn btn-light">Lihat Peta</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Services -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <br>
                        <br>
                        <h2>Layanan Kami</h2>
                        <hr class="small">
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-8">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Go Help Me !</strong>
                                    </h4>
                                    <p>Layanan ini berfungsi untuk meminta pertolongan medis ambulans bagi anda yang mengalami kejadian gawat darurat secara langsung</p>
                                    <a href="#" class="btn btn-light">Akses Layanan</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-compass fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>E Helper</strong>
                                    </h4>
                                    <p>Layanan ini berfungsi untuk meminta pertolongan medis ambulans bagi anda yang mengalami kejadian gawat darurat secara tidak langsung</p>
                                    <a href="#ehelper" class="btn btn-light onclick = $("#menu-close").click(); >Akses Layanan</a>
                                    <!--<a href="login.php" class="btn btn-light">Learn More</a>-->
                                </div>
                            </div>
                            <!--                            <div class="col-md-3 col-sm-6">
                                                            <div class="service-item">
                                                                <span class="fa-stack fa-4x">
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                                                                </span>
                                                                <h4>
                                                                    <strong>Transport</strong>
                                                                </h4>
                                                                <p>Layanan ini berfungsi untuk melihat status perjalanan dari mobil ambulans, sisa jarak dan waktu tempuh yang dibutuhkan untuk mencapai lokasi</p>
                                                                <a href="login.php" class="btn btn-light">Learn More</a>
                                                            </div>
                                                        </div>-->
                            <div class="col-md-4 col-sm-8">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Routing Map</strong>
                                    </h4>
                                    <p>Layanan ini berfungsi untuk melihat peta rute perjalan mobil ambulans, jalan yang diakses, dan rumah sakit yang menjadi tujuan gawat darurat</p>
                                    <a href="login.php" class="btn btn-light">Akses Layanan</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!--         Callout 
                <aside class="callout">
                    <div class="text-vertical-center">
                        <h1>Keselamatan anda adalah kepuasan kami</h1>
                    </div>
                </aside>-->

        <!-- Portfolio -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h2>Data Ambulans</h2>
                        <hr class="small">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <h4>
                                            <strong>Data Korban Gawat Darurat</strong>
                                        </h4>
                                        <img class="img-portfolio img-responsive" src="img/portfolio-12.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <h4>
                                            <strong>Data Jaringan Jalan Kota Malang</strong>
                                        </h4>
                                        <img class="img-portfolio img-responsive" src="img/portfolio-22.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <h4>
                                            <strong>Data Rumah Sakit Kota Malang</strong>
                                        </h4>
                                        <img class="img-portfolio img-responsive" src="img/portfolio-32.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <h4>
                                            <strong>Data Lampu Lalu Lintas Kota Malang</strong>
                                        </h4>
                                        <img class="img-portfolio img-responsive" src="img/portfolio-42.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                        <!-- <a href="#" class="btn btn-dark">View More Items</a> -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <section id="ehelper" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">

                        <h2>Form Electronic Helper</h2>
                        <hr class="small">

                    </div>
                </div>
                <!--<div class="row">-->
                <div class="col-md-0">
                    <aside class="call-to-action bg-primary">
                        <div class="container">
                            <div class="row">
                                <div class="form-style-2">
                                    <form action="" method="post">
                                        <label for="field1"><span>Pelapor</span>
                                            <input type="text" class="input-field" name="field1" value="" /></label>
                                        <label for="field4"><span>Jenis</span>
                                            <select name="field4" class="select-field">
                                                <option value="General Question">Kecelakaan</option>
                                                <option value="Advertise">Kebakaran</option>
                                                <option value="Partnership">Gawat Darurat Penyakit</option>
                                            </select></label>
                                        <label for="field2"><span>Lokasi <span class="required">*</span></span>
                                            <input type="text" class="input-field" name="field2" value="" /></label>
                                        <label for="field2"><span>Longitude <span class="required">*</span></span>
                                            <input type="text" class="input-field" name="field2" value="" /></label>
                                        <label for="field2"><span>Latitude <span class="required">*</span></span>
                                            <input type="text" class="input-field" name="field2" value="" /></label>
                                        <label><span>Foto</span></label><input type="file" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />
<!--                                        <label for="field5"><span>Pesan <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>-->

                                        <label><span>&nbsp;</span>
                                            <input type="submit" value="Proses Pengaduan" /></label>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </aside>
                </div>



                <!-- /.row (nested) -->

                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>

                    <p class="text-muted">Copyright &copy; Malang Smart Ambulance System 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

</body>

</html>
