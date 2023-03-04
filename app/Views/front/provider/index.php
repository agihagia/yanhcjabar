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
    <h2>PROVIDER KESEHATAN WILAYAH JABAR</h2>
  </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>List Provider</h2>
    </div>
<div class="viewdata">
</div>
</div>
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