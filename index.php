<?php
include_once 'controller/mobil.php';
include_once 'controller/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Rerentalan</title>
    <link rel="icon" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/custom/custom.css" type="text/css" rel="stylesheet">
    <link href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="assets/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/main.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="assets/vendors/jquery-3.2.1.min.js"></script>
</head>

<body>
    <!-- Start Page Loading -->
    <!--
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
-->
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color  light-blue darken-4">
                <div class="nav-wrapper">
                    <ul class="left">
                    </ul>
                </div>
            </nav>
        </div>
        <?php (isset($_GET['page']) ? ($_GET['page'] == 'home' ? include 'component/parallax.php' : '') : include 'component/parallax.php' ) ?>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                    <?php
            if(isset($_GET['page'])){
                 $a = $_GET['page'];
             }else{
                        $a = 'home';
             }

             switch ($a) {
                  case 'home':
                      include 'view/home.php';
                      break;
                  case 'cari':
                      include 'view/cari.php';
                     break;
                  case 'detail_mobil':
                      include 'view/detail_mobil.php';
                       break;
                  case 'sewa_mobil':
                      include 'view/sewa_mobil.php';
                      break;
                  case 'profil':
                      include 'view/profile.php';
                      break;
                  case 'status':
                     include 'view/status_sewa.php';
                      break;
                  case 'laporan':
                     include 'view/laporan.php';
                      break;
                  case 'hapus_mobil':
                     include 'view/hapus_mobil.php';
                      break;
                  case 'logout':
                     include '/view/logout.php';
                      break;
                  default:
                      include 'view/home.php';
                      break;
              }
        ?>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright ©
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());

                    </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
                <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2" href="https://pixinvent.com/">PIXINVENT</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="assets/vendors/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/custom-script.js"></script>
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
            $('.modal').modal();
          });
    </script>
</body>

</html>
