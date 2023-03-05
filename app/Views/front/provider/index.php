<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- jQuery  -->

<script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/js/metismenu.min.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>/assets/js/waves.min.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>/assets/js/app.js"></script>
<!-- Required datatable js -->
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!--Summernote js-->
<script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Datatable init js -->
<script src="<?= base_url() ?>/assets/pages/datatables.init.js"></script>
<script>
    const user_id = '<?= session()->get('user_id') ?>'
    const base_url = '<?= base_url('/') ?>'
    const date = '<?= date('Y-m-d') ?>'
</script>
<?= $this->endSection('script') ?>
<?php

use App\Models\Modelkonfigurasi;

$this->konfigurasi = new Modelkonfigurasi();
$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url('img/konfigurasi/icon/' . $konfigurasi['icon']) ?>">

    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/select2/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/select2/dist/css/select2-bootstrap4.min.css" />
    <link href="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
    <!-- DataTables -->
    <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>


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
      <h2>Provider Kesehatan Wilayah Jabar</h2>
    </div>
    <div class="container">
    <div class="viewdata">
    </div>
    </div><!-- End Breadcrumbs -->
    </section>

<script>
    function listprovider() {
        $.ajax({
            url: "<?= site_url('provider/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        listprovider();
    });
</script>
<?= $this->endSection('isi') ?>