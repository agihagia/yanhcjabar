<style type="text/css">
    .footer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
    }
</style>

<?= $this->extend('front/layout/main') ?>
<?= $this->section('mainbg') ?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
    </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Absensi</h2>
        </div>

        <div class="faq-list" data-aos="zoom-in" data-aos-delay="100">
        <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Absensi
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">   
            <ul>
                <li>Batas Waktu Administrasi Absensi max Tgl 10</li>
                <li>Tanggal 11 setiap bulan akan dilakukan upload data pada SAP secara final sehingga data tidak bisa diubah lagi</li>
                <li>Proses perekaman di PLN Daily yang tidak lengkap mengakibatkan JKP = NOL</li>
                <li>Validitas data pada PLN Daily menjadi tanggung jawab penuh antara pegawai dan atasan masing-masing.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
<?= $this->endSection('isi') ?>