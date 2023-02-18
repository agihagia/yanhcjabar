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
        <h2>PERSYARATAN PENSIUN</h2>
    </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pensiun Normal</h2>
        </div>

        <div class="faq-list" data-aos="zoom-in" data-aos-delay="100">
        <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Persyaratan Pensiun Normal
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <ul>
                    <li>Isi Form DP 4.1 => <a href="https://bit.ly/pensiunpln" target="_blank">Download Form DP 4.1</a></li>
                    <li>Isi Form Kesediaan Bayar Kelebihan MP => <a href="https://bit.ly/pensiunpln" target="_blank">Download Form Kesediaan Bayar Kelebihan MP</a></li>
                    <li>FC Keputusan Pengangkatan Sebagai Pegawai</li>
                    <li>FC Keputusan Pembinaan Gaji Pokok Terakhir</li>
                    <li>FC Keputusan Pembinaan Skala Gaji Dasar Terakhir Sebagai PhDP</li>
                    <li>FC Kartu Peserta Dana Pensiun PLN</li>
                    <li>FC Surat Nikah / Surat Cerai</li>
                    <li>FC KTP, NPWP, dan KK (Kartu Keluarga)</li>
                    <li>Pas Photo Berwarna Uk. 3x4 (4 Lembar)</li>
                    <li>FC Buku Tabungan / Nomor Rekening Bank</li>
                    <li>FC Akta Kelahiran Anak yang Ditanggung</li>
                    <li>Surat Keterangan Masih Sekolah/Kuliah (21 Tahun s.d 25 Tahun)</li>
                    <li>FC Bukti Pembelian Masa Kerja Pensiun (MKP) (Bagi yang Membeli)</li>
               </ul> </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Batas Akhir Penyerahan Dokumen
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <p><b>Batas Akhir Penyerahan Dokumen</b></p>
                <p><b>Maksimal 3 (Tiga) Bulan sebelum memasuki masa Pensiun</b></p>
                <p><b>Cek Kesesuaian Data, Karena permintaan perubahan data setelah pensiun TIDAK DIAKOMODIR</b></p></div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Pengiriman Form Pengajuan
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <p><b>Berkas Asli Dikirim Langsung Ke YAN HC & di scan di email ke</b></p>
                <p><b>Email    : </b>yan_hc_jabar@pln.co.id <b>(menggunakan email Korporat)</b></p>
                <p><b>Subject  : </b>[PENSIUN] NIP - Persyaratan Pensiun Normal</p></div>
          </div>
        </div>
      </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
<?= $this->endSection('isi') ?>