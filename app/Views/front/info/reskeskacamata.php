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
<!-- ======= About Section ======= -->

<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Bantuan Kacamata</h2>
    </div>

    <h7>
      <p><i class="ri-asterisk" style="color: red;"></i>Penyimpangan terhadap pelaksanaan pemberian bantuan kacamata ini akan diproses sesuai Peraturan Disiplin Pegawai (PDP) atau sesuai ketentuan sanksi yang berlaku.</p>
    </h7>
    <br>
    <div class="faq-list" data-aos="zoom-in" data-aos-delay="100">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Persyaratan Pengajuan Bantuan Kacamata
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <ul>
                <li>Lensa & Bingkai Kacamata yang diberikan Pertama Kali untuk Pegawai</li>
                <ul>
                  <li>Dioptri Lensa Paling Sedikit minus / plus / silindris -> 0,50 (nol koma lima puluh)</li>
                </ul>
                <li>Penggantian Lensa Kacamata Selanjutnya untuk Pegawai</li>
                <ul>
                  <li>Lensa Kacamata selanjutnya jika terdapat perubahan dioptri lensa minus / plus / silindris -> 0,25 (nol koma dua lima)</li>
                </ul>
                <li>Penggantian bingkai Kacamata Selanjutnya untuk Pegawai</li>
                <ul>
                  <li>Penggantian bingkai kacamata diberikan dalam hal Pegawai yang bersangkutan telah menerima bantuan bingkai kacamata yang terakhir paling sedikit selama 2 (dua) tahun </li>
                </ul>
                <li>Penggantian Lensa bingkai Kacamata untuk Keluarga Pegawai</li>
                <ul>
                  <li>Penggantian bingkai kacamata diberikan 1 (satu) Kali dengan ketentuan Dioptri Lensa Paling Sedikit minus / plus / silindris -> 0,50 (nol koma lima puluh)</li>
                </ul>
                <li>Penggantian Lensa bingkai Kacamata untuk Pensiun</li>
                <ul>
                  <li>Penggantian bingkai kacamata diberikan 1 (satu) Kali dengan ketentuan Dioptri Lensa Paling Sedikit minus / plus / silindris -> 0,50 (nol koma lima puluh)</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Besaran Penggantian Biaya
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <ul>
                <li>Bingkai dan Lensa Kacamata Maksimal Rp. 5.000.000,- (lima juta rupiah)</li>
                <ul>
                  <li>Bingkai Kacamata Maksimal Rp 2.500.000,- (dua juta lima ratus)</li>
                  <li>Lensa Kacamata Maksimal Rp 2.500.000,- (dua juta lima ratus)</li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Persyaratan Pengajuan
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p><b>Penggantian Biaya Pembelian Lensa dan Bingkai diberikan secara Restitusi/reimbursement</b></p>
                <ul>
                  <li>Melampirkan Dokumen Hasil Ukuran Refraksi dari Dokter Spesialis mata atau optik</li>
                  <li>Melampirkan Kwitansi asli berstempel basah dan bertandatangan (materai 10rb untuk nominal Rp 5.000.000,- keatas)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
</section><!-- End Frequently Asked Questions Section -->
<?= $this->endSection('isi') ?>