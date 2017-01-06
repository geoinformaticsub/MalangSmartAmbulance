<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Awesome Flat Login Form" />
        <meta name="keywords" content="Login, Flat, HTML5, CSS3" />
        <meta name="author" content="Wahid Anggara - LunarPixel" />
        <title>Login Form MSA</title>

        <link href="css_login/login_style.css" rel="stylesheet" type="text/css">
        <link href="css_login/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css_login/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="apple-touch-icon" href="img/favicon.png"/>

    </head>
    <body>
        <div class="logo"></div>
        <div class="login"> <!-- Login -->
            <h1>Login to your account</h1>

            <form class="form" method="post" action="ceklogin.php">

                <p class="field">
                    <input type="text" name="username" placeholder="Username or email" required/>
                    <i class="fa fa-user"></i>
                </p>

                <p class="field">
                    <input type="password" name="password" placeholder="Password" required/>
                    <i class="fa fa-lock"></i>
                </p>

                <p class="submit"><input type="submit" name="commit" value="Login"></p>
                <?php
                //kode php ini kita gunakan untuk menampilkan pesan eror
                
                if (!empty($_GET['error'])) {

                    if ($_GET['error'] == 1) {

                        echo '<center>Username dan Password belum diisi</center>';
                    } else if ($_GET['error'] == 2) {

                        echo '<center>Username belum diisi!</center>';
                    } else if ($_GET['error'] == 3) {

                        echo '<center><h3>Password belum diisi!</h3></center>';
                    } else if ($_GET['error'] == 4) {

                        echo '<center>Username dan Password tidak terdaftar</center>';
                    }
                }
                ?>
                <p class="remember">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember"><span></span>Remember Me</label>
                </p>

                <p class="forgot">
                    <a href="#">Forgot Password?</a>
                </p>

            </form>
            
        </div> <!--/ Login-->
        <div class="copyright">
            <p>Copyright &copy; 2015</p>
            <p>Malang Smart Ambulance System</a></p>
        </div>
    </body>
</html>
