<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?> </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('img/konfigurasi/icon/' . $konfigurasi['icon']) ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/front/assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Mentor - v2.2.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- Vendor CSS Files -->
  <!--link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"-->

  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/assets/vendor/aos/aos.js"></script>

  <!-- Sweet-Alert  -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/front/assets/js/main.js"></script>
  <script>
    function numberOnly(event) {
      var angka = (event.which) ? event.which : event.keyCode
      if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
        return false;
      return true;
    }
  </script>
  <!-- DataTables -->
  <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <!-- Responsive datatable examples -->
  <link href="<?= base_url() ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

        <h6 class="logo mr-auto"><a href="<?= base_url() ?>"><?= $konfigurasi['nama_web'] ?></a></h6>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="<?= base_url() ?>/assets/front/assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <?= $this->renderSection('navbar') ?>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="/">HOME</a></li>
            <!--li><a href="<?= base_url('home/timhc') ?>">Tim HC JABAR</a></!--li-->
            <li class="dropdown">
              <a class="dropdown-toggle" href="#informasi" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                INFORMASI
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="<?= base_url('home/tanggungan') ?>">- Perubahan Data Tanggungan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/syaratpensiun') ?>">- Persyaratan Pensiun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/bpjs') ?>">- BPJS Kesehatan & TK</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/reskeskacamata') ?>">- Bantuan Kacamata</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/reskeskesehatan') ?>">- Restitusi Kesehatan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/absensi') ?>">- ABSENSI Pegawai</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/premi') ?>">- P2-1B Khusus</a>
              </div>
            </li>
            <li>
              <a class="dropdown-toggle" href="#agenda" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                BERITA & KEGIATAN
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url('home/healthtalk') ?>">Health Talk</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/mcu') ?>">MCU</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('home/vaksin') ?>">Vaksin</a>
              </div>
            </li>
            <li><a href="../#footer">CONTACT</a></li>
            <li><a href="<?= base_url('/bukutamu') ?>">BUKU TAMU</a></li>
          </ul>
        </nav><!-- .nav-menu -->
        <a href="<?= base_url('provider') ?>" class="get-started-btn">PROVIDER KESEHATAN</a>
      </div>
    </header><!-- End Header -->
    <main id="main">
      <?= $this->renderSection('mainbg') ?>
    </main><!-- End #main -->

    <main id="main">
        <?= $this->renderSection('isi') ?>
        <?= $this->renderSection('script') ?>
    </main><!-- End #main -->

    <main id="contact">
      <?= $this->renderSection('contact') ?>
    </main><!-- End #main -->

    <div class="footer">
      <footer id="footer">
        <div class="container d-md-flex py-4">

          <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
              &copy;<strong><span><?= $konfigurasi['nama_web'] ?></span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href=""> YAN HC JABAR - 2023</a>
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/front/assets/js/main.js"></script>
    <script>
        function numberOnly(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>