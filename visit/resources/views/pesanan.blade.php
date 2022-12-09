<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Bantuan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">

        <!-- Guest Navbar -->
        <!-- <div class="container-fluid d-flex  justify-content-between" style="margin-left: 40px;margin-right:40px;width:100%;padding: 0;">
      <a href="index.html" class="logo d-flex align-items-center">
        <h3 class="textlg">Visit </h3><h3 class="textlg2"> &nbsp;Indonesia </h3>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="katalog.html" class="active">Katalog</a></li>
          <li><a href="bantuan.html">Bantuan</a></li>
          <li><a class="get-a-quote text-medium text-bold" href="" data-bs-target="#login" data-bs-toggle="modal">Login</a></li>
        </ul>
      </nav>
    </div> -->
        <!-- End Guest Navbar -->

        <!-- Navbar If Login -->
        <div class="container-fluid d-flex  justify-content-between"
            style="margin-left: 40px;margin-right:40px;width:100%;padding: 0;">
            <a href="index.html" class="logo d-flex align-items-center">
                <h3 class="textlg">Visit &nbsp; </h3>
                <h3 class="textlg2">Indonesia </h3>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="katalog-wisata.html" class="active">Katalog</a></li>
                    <li><a href="bantuan.html">Bantuan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nama User</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-black" href="notifikasi.html">Notifikasi</a>
                            <a class="dropdown-item text-black" href="pesanan.html">Pesanan Saya</a>
                            <a class="dropdown-item text-black" href="katalog-wisata-favorit.html">Favorit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-black" text-black href="logout.php">Log Out</a>
                </ul>
                </li>
                </ul>
            </nav>
        </div>
        <!-- End Navbar if Login -->

    </header>
    <!-- End Header -->

    <!-- Login -->
    <!-- Login Modal -->
    <div class="modal" tabindex="-1" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin: auto;">
                    <h1 align="center" class="text-bold">Login</h1>
                    <form action="" method="post" align="center">
                        <input type="text" id="username" name="username" placeholder="Username"><br><br>
                        <input type="password" id="password" name="password" placeholder="Password"><br><br>
                        <p>Belum memiliki akun? <a href="#register" data-bs-toggle="modal"
                                data-bs-target="#register">Daftar sekarang!</a></p>
                        <button type="submit" class="get-a-quote login-register text-bold text-medium">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End Modal -->

    <!-- Register -->
    <!-- Register Modal -->
    <div class="modal" tabindex="-1" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin: auto;">
                    <form action="" method="post" align="center">
                        <h1 align="center">Register</h1>
                        <input type="text" id="username" name="username" placeholder="Username"><br><br>
                        <input type="password" id="password" name="password" placeholder="Password"><br><br>
                        <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
                        <input type="text" id="nama_lkp" name="nama_lkp" placeholder="Nama Lengkap"><br><br>

                        <p>Sudah memiliki akun? <a href="#register" data-bs-toggle="modal"
                                data-bs-target="#register">Login sekarang!</a></p>
                        <button type="submit"
                            class="get-a-quote login-register text-bold text-medium">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End Modal -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero2">
        <div class="black-bg">
        </div>
        <div class="grey-bg">
            <h2 id="judul-halaman" class="text-white" align="center">Pesanan</h2>
        </div>

    </section><!-- End Hero Section -->

    <!-- Section Pesanan -->
    <div class="row white-bg">
        <div class="pesanan">
            <div class="row" style="height: 100%;">
                <div class="col col-3">
                    <div class="pesanan-img" style="background-image: url('img/curug.jpg');">

                    </div>
                    <!-- <img src="img/curug.jpg" alt="" style="padding: 8px;border-radius: 16px;margin-bottom: 12px;"> -->

                </div>
                <div class="col">
                    <table style="height: 100%;">
                        <tr style="vertical-align:text-top;">
                            <td colspan="4"><B>Nama Pesanan</B></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.</td>
                        </tr>
                        <tr style="vertical-align:text-bottom;">
                            <td>Jumlah Tiket : 1</td>
                            <td>Total Harga : 20.000</td>
                            <td>Metode Pembayaran : Transfer Bank</td>
                            <td>Status : Selesai</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="pesanan">
            <div class="row" style="height: 100%;">
                <div class="col col-3">
                    <div class="pesanan-img" style="background-image: url('img/curug.jpg');">

                    </div>
                    <!-- <img src="img/curug.jpg" alt="" style="padding: 8px;border-radius: 16px;margin-bottom: 12px;"> -->

                </div>
                <div class="col">
                    <table style="height: 100%;">
                        <tr style="vertical-align:text-top;">
                            <td colspan="4"><B>Nama Pesanan</B></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.</td>
                        </tr>
                        <tr style="vertical-align:text-bottom;">
                            <td>Jumlah Tiket : 1</td>
                            <td>Total Harga : 20.000</td>
                            <td>Metode Pembayaran : Transfer Bank</td>
                            <td>Status : Selesai</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Carent</span>
                        </a>
                        <p>Carent adalah platform perentalan mobil yang beroperasi di Purbalingga. Kenyamanan pelanggan
                            juga merupakan kenyamanan kami. </p>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                    </div>
                    <div class="col-lg-3 col-6 footer-links">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:</strong> +62 938 9283 3212<br>
                            <strong>Email:</strong> carent@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                        <h4>Address</h4>
                        <p>
                            Kalimanah, Purbalingga <br>
                            Jawa Tengah 53371<br>
                            Indonesia<br><br>

                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Carent2022</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- Vendor JS Files -->
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
