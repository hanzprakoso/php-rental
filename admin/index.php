<?php
include_once '../controller/mobil.php';
include_once '../controller/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <!-- Favicons-->
    <link rel="icon" href="../assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../assets/img/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../assets/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../assets/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../assets/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
</head>

<body>
    <!-- Start Page Loading -->
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-light-blue-cyan">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper">
                                <a href="index.html" class="brand-logo darken-1">
                                    <img src="../assets/img/logo/materialize-logo.png" alt="materialize logo">
                                    <span class="logo-text hide-on-med-and-down">Materialize</span>
                                </a>
                            </h1>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            <?php include_once 'component/sidebar.php'?>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
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
                  case 'tabel_mobil':
                      include 'view/tabel_mobil.php';
                     break;
                  case 'tambah_mobil':
                      include 'view/tambah_mobil.php';
                       break;
                  case 'detail_mobil':
                      include 'view/detail_mobil.php';
                      break;
                  case 'edit_mobil':
                      include 'view/edit_mobil.php';
                      break;
                  case 'status':
                     include 'view/status_sewa.php';
                            break;
                  case 'laporan':
                     include 'view/laporan.php';
                      break;
                  case 'transaksi':
                     include 'view/transaksi.php';
                      break;
                  case 'hapus_mobil':
                     include 'view/hapus_mobil.php';
                      break;
                 case 'logout':
                            include '../view/logout.php';
                      break;
                  default:
                      include 'view/home.php';
                      break;
              }
        ?>
                </div>
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
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="../assets/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../assets/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../assets/js/custom-script.js"></script>
</body>

</html>
