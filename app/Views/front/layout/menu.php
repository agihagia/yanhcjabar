<?= $this->extend('front/layout/main') ?>
<?= $this->section('mainbg') ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h2><?= $konfigurasi['deskripsi'] ?> </h2>
        </div>
    </section><!-- End Hero -->
<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
    <div class="container">
        <strong> TOTAL PEGAWAI & PENSIUN </strong>
        <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"><?= $pegawai['id'] ?></span>
                <p>Pegawai</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"><?= $pegawaikeluarga['id'] ?></span>
                <p>Keluarga Pegawai</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"><?= $pensiun['id'] ?></span>
                <p>Pensiun</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"><?= $pensiunkeluarga['id'] ?></span>
                <p>Keluarga Pensiun</p>
            </div>

        </div>
    </div>
</section>
<!-- ======= Features Section ======= -->
<section id="features" class="features">
      <div class="container" data-aos="fade-up">
      <br>
      <div class="section-title">
            <h2>UNIT YANG DILAYANI</h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4  text-center">
            <div class="icon-box">
              <i class="ri-user-3-fill" style="color: #ffbb2c;"></i>
              <h3><a href="">UID JABAR</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0  text-center">
            <div class="icon-box">
              <i class="ri-user-3-fill" style="color: #5578ff;"></i>
              <h3><a href="">UIT JBT</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0  text-center">
            <div class="icon-box">
              <i class="ri-user-3-fill" style="color: #29cc61;"></i>
              <h3><a href="">UIP JBT</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0  text-center">
            <div class="icon-box">
              <i class="ri-user-3-fill" style="color: #e80368;"></i>
              <h3><a href="">PUSHARLIS</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

<section id="tim" class="tim">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>TIM YAN HC JABAR - BANDUNG</h2>
        </div>
        <div class="row justify-content-center align-items-left">
        <div class="col-lg-6 col-md-6 footer-contact">
        <div id="chart_div" style="height: 100%; width: 100%; align: left"></div>
        </div>
        </div>

    </div>
</section>
<?= $this->endSection('isi') ?>
<?= $this->section('contact') ?>
<footer id="footer">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
                <h3><?= $konfigurasi['nama_web'] ?></h3>
                <p>
                <strong>Lokasi Kerja:</strong> UID JAWA BARAT<br>
                    <?= $konfigurasi['alamat'] ?><br>
                    <strong>Telp:</strong> 022-7251234 ext 1252<br>
                    <strong>Whatsapp:</strong> <?= $konfigurasi['whatsapp'] ?><br>
                    <strong>Email:</strong> <?= $konfigurasi['email'] ?> <br>
                </p>
            </div>
            <div class="col-lg-9 col-md-6 footer-newsletter">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=asia afrika 63&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('contact') ?>
 <!-- ======= Footer ======= -->
