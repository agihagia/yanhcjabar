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
        <h2>BPJS KETENAGAKERJAAN</h2>
    </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Semua Pegawai Terdaftar sebagai peserta BPJS KETENAGAKERJAAN</h3>
                <ul>
                    <b>
                    <li><i class="ri-check-fill" style="color: #29cc61;"></i> BPJS JHT (JAMINAN HARI TUA)</li>
                    <li><i class="ri-check-fill" style="color: #29cc61;"></i> BPJS JP (JAMINAN PENSIUN)</li>
                    </b>
                </ul>
                <br>
                <p>untuk melihat SALDO Keanggotan bisa dilihat melalui : </p>
                <p>
                    <b>Aplikasi JMO (JAMSOSTEK MOBILE)</b> ->  <a href="https://play.google.com/store/apps/details?id=com.bpjstku&hl=id&gl=US" target="_blank">https://play.google.com/store/apps/details?id=com.bpjstku&hl=id&gl=US</a>
                </p>
                <p>
                    <b>Panduan Layanan</b> -> <a href="https://www.bpjsketenagakerjaan.go.id/" target="_blank">https://www.bpjsketenagakerjaan.go.id/</a>
                </p>
                <br>
                <p><b>Perubahan Data Peserta</b></p>
                <ul>
                    <li><i class="ri-check-fill" style="color: #ffbb2c;"></i> Isi Form 1A => <a href="https://www.bpjs-kesehatan.go.id/bpjs/arsip/view/1477" target="_blank">Download Form 1A</a></li>
               </ul>
                <br>
                <p><b>Form Pengajuan Dikirim ke</b></p>
                <p><b>Email    : </b>yan_hc_jabar@pln.co.id <b>(menggunakan email Korporat)</b></p>
                <p><b>Subject  : </b>[BPJS TK] NIP - Perubahan Data peserta</p>

            </div>
        </div>

    </div>
</section><!-- End About Section -->
<?= $this->endSection('isi') ?>