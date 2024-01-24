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
    <h2></h2>
  </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>
<section id="premi" class="premi">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>PAY FOR POSITION KHUSUS</h2>
    </div>

    <div class="faq-list" data-aos="zoom-in" data-aos-delay="100">
      <div id="accordion">
        <div class="card">
          <!--div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                -> PAY FOR POSITION KHUSUS
              </button>
            </h5>
          </div-->

          <!--div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Pegawal yang ditetapkan pada Position Grade 8,
              9, 10, 11, 12, 13 dan 14 dengan
              mempertimbangkan desain organisasi dapat
              diberikan P2-I B khusus apabila melaksanakan
              fungsi dan tugas sebagai berikut:
              <br>
              (1) pekerjaan yang dilakukan secara shift dengan
              siklus tidak tetap (shift pagi sld. sore, atau
              sore s/d malam, atau malam s/d. pagi),
              contoh: operasi pembangkit, operasi transmisi
              dan operasi distribusi;
              <br>
              (2) pekerjaan di luar jam kerja yang tidak
              meninggalkan tugas pokok, contoh: piket
              pemeliharaan, piket gangguan dan piket
              logistik untuk mendukung
              pemeliharaan/gangguan, pekerjaan yang
              bersifat khusus dan spesifik yang
              membutuhkan tanggung jawab selama 24
              (dua puluh empat) jam;
              <br>
              (3) pekerjaan yang tidak boleh ada jeda dan
              harus selesai pada kurun waktu tertentu,
              contoh: komisioning, pelaksana proyek di
              lapangan;
              <br>
              (4) pekerjaan dengan risiko keselamatan kerja
              yang tinggi, contoh: Pekerjaan Dalam
              Keadaan Bertegangan (PDKB).
            </div>
          </div-->
        </div>
      </div>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<div class="container">
  <left>
    <div class="col-md-12 animate-box">
      <div class="row">
        <div class="col-lg-7">
          <div class="card mb-4">
            <?= form_open('home/premisubmit', ['class' => 'formhitung']) ?>
            <div class="card-body">
              <i class="mdi mdi-calculator"></i> Hitung
              <hr>
              <input type="hidden" class="form-control" id="konfigurasi_id" value="<?= $konfigurasi_id ?>" name="konfigurasi_id" readonly>
              <div class="row">
                <div class="form-group col-md-2 col-12">
                  <label> <i class="mdi mdi-currency-usd"></i>
                    Grade
                  </label>
                  <input type="text" class="form-control" id="grade" name="grade" onkeypress="return numberOnly(event)" minlength="1" value="<?= esc($grade) ?>" placeholder="Grade" required>
             </div>
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-currency-usd"></i>
                    Tarif Grade
                  </label>
                  <input type="text" class="form-control" id="tarif" name="tarif"  minlength="1" value="<?= esc($tarif) ?>" placeholder="Rp Tarif Grade...">
                  <div class="invalid-feedback errorNama">
                  </div>
             </div>

                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-alarm"></i>
                    Jml Hari Kerja PLN
                  </label>
                  <input type="text" class="form-control" id="harikerjapln" name="harikerjapln" onkeypress="return numberOnly(event)" minlength="1" value="<?= esc($harikerjapln) ?>" required>
                </div>

                <div class="form-group col-md-2 col-12">
                  <label> <i class="mdi mdi-arrow-left-right-bold"></i>
                    Koefisien Unit
                  </label>
                  <input type="text" class="form-control" id="koefisien" name="koefisien" onkeypress="return numberOnly(event)" minlength="1" value="1" required>
                
                </div>
              </div><i class="mdi mdi-calculator"></i> Realisasi
              <hr>
              <div class="row">
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-alarm"></i>
                    Hari Kerja
                  </label>
                  <input type="text" class="form-control" id="harikerja" name="harikerja" onkeypress="return numberOnly(event)" minlength="1" value="<?= esc($harikerja) ?>" required>
                </div>

                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-alarm"></i>
                    Hari Libur
                  </label>
                  <input type="text" class="form-control" id="harilibur" name="harilibur" onkeypress="return numberOnly(event)" minlength="1" value="<?= esc($harikerja) ?>" required>
                </div>

                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-alarm"></i>
                    Hari Raya Keagamaan
                  </label>
                  <input type="text" class="form-control" id="hariagama" name="hariagama" onkeypress="return numberOnly(event)" minlength="1" value="<?= esc($harikerja) ?>" required>
              </div>
              </div>
              <br>
              <button class="btn btn-primary btnsimpan"><i class="fa fa-paper-plane"></i> HITUNG</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card mb-6">
            <div class="card-body">
              <i class="mdi mdi-image-filter-hdr"></i> Hasil Hitung <br>
              <hr>
              <div class="form-group text-center">
              <div class="row">
                <div class="form-group col-md-6 col-12">
                 HARI REALISASI : 
                  <label id="hasil_hari"></label>
                  <br>
                  HARI REALISASI :
                  <label id="hasil_realisasi"></label>
                  <br>
                  <label id="hasil_rp" style="color:red;font-size:40px;"></label>
                  <br>
                  <label id="persen" style="color:red;font-size:20;"></label>
             </div>
             </div>
            
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </left>
</div>

<script>
    $('.formhitung').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: {
                konfigurasi_id: $('input#konfigurasi_id').val(),
                grade: $('input#grade').val(),
                tarif: $('input#tarif').val(),
                harikerjapln: $('input#harikerjapln').val(),
                koefisien: $('input#koefisien').val(),
                harikerja: $('input#harikerja').val(),
                harilibur: $('input#harilibur').val(),
                hariagama: $('input#hariagama').val(),
            },
            dataType: "json",
            beforeSend: function() {
                $('.btnsimpan').attr('disable', 'disable');
                $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
            },
            complete: function() {
                $('.btnsimpan').removeAttr('disable', 'disable');
                $('.btnsimpan').html('<i class="fa fa-paper-plane"></i> HITUNG');
            },
            success: function(response) {
                if (response.error) {
                    if (response.error.tarif) {
                        $('#tarif').addClass('is-invalid');
                        $('.errorNama').html(response.error.tarif);
                    } else {
                        $('#tarif').removeClass('is-invalid');
                        $('.errorNama').html('');
                    }
                } else {
                    Swal.fire({
                        title: "Rupiah Premi",
                        text: response.sukses,
                        icon: "success",
                        showConfirmButton: true
                    });
                    
                    $('#hasil_hari').text(response.realisasi_hari);
                    $('#hasil_realisasi').text(response.realisasi);
                    $('#hasil_rp').text(response.rp_realisasi);
                    $('#persen').text("(" +response.persen + ")");
                }
            }
        });
    })
</script>

<?= $this->endSection('isi') ?>