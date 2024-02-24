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
<section id="Buku Tamu" class="Buku Tamu">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>BUKU TAMU</h2>
    </div>
  </div>
</section><!-- End Frequently Asked Questions Section -->
<div class="container">
  <left>
    <div class="col-md-12 animate-box">
      <div class="row">
        <div class="col-lg-7">
          <div class="card mb-4">
            <?= form_open('home/bukutamusubmit', ['class' => 'formbukutamu']) ?>
            <div class="card-body">
              <i class="mdi mdi-account"></i> Data Tamu
              <hr>
              <input type="hidden" class="form-control" id="konfigurasi_id" value="<?= $konfigurasi_id ?>" name="konfigurasi_id" readonly>
              <div class="row">
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    Status
                  </label>
                        <select name="status" id="status" class="form-control">
                            <option Disabled=true Selected=true>Pilih</option>
                            <option value="0">PENSIUN</option>
                            <option value="1">PEGAWAI</option>
                        </select>
                        <div class="invalid-feedback errorPendidikan">

                        </div>
                  </div>
                  <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi  mdi-account-check"></i>
                    Hubungan
                  </label>
                        <select name="status" id="status" class="form-control">
                            <option Disabled=true Selected=true>Pilih</option>
                            <option value="0">YBS</option>
                            <option value="1">SUAMI/ISTRI</option>
                            <option value="2">ANAK</option>
                            <option value="3">KELUARGA</option>
                        </select>
                        <div class="invalid-feedback errorStatus">

                        </div>
                  </div>
                <div class="form-group col-md-2 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    NIP
                  </label>
                  <input type="text" class="form-control" id="nip" name="nip" minlength="5" required>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    Nama
                  </label>
                  <input type="text" class="form-control" id="nama" name="nama" minlength="3" value="<?= esc($nama) ?>" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-cellphone"></i>
                    No Telp (WA)
                  </label>
                  <input type="text" class="form-control" id="notelp" name="notelp" onkeypress="return numberOnly(event)" minlength="8" value="<?= esc($notelp) ?>" required>
                </div>
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-email"></i>
                    Email
                  </label>
                  <input type="text" class="form-control" id="email" name="email" minlength="5" value="<?= esc($email) ?>">
                </div>
                <div class="form-group col-md-4 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    Keperluan
                  </label>
                  <select name="keperluan" id="keperluan" class="form-control">
                            <option Disabled=true Selected=true>Pilih</option>
                            <option value="0">PERMOHONAN RESTITUSI</option>
                            <option value="1">CEK RESTITUSI</option>
                            <option value="2">KONSULTASI KESEHATAN</option>
                            <option value="3">DATA ULANG</option>
                            <option value="4">UPDATE DATA</option>
                            <option value="5">ABSENSI</option>
                            <option value="6">BPJS</option>
                            <option value="7">PAJAK</option>
                            <option value="8">APLN</option>
                            <option value="9">TGL LAHIR</option>
                        </select>
                        <div class="invalid-feedback errorKeperluan">

                        </div>
                  </div>
              </div>
              <hr>
              <div class="row">
              <div class="form-group col-md-12 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    Keperluan
                  </label>
                  <textarea class="form-control" id="keperluan" rows="2" required></textarea>
                  </div>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-md-3 col-12">
                  <label> <i class="mdi mdi-account-check"></i>
                    PIC Penerima
                  </label>
                  <select name="pic" id="pic" class="form-control">
                            <option Disabled=true Selected=true>Pilih</option>
                            <option value="0">DWI MULYANI</option>
                            <option value="1">DOKTER DODI</option>
                            <option value="2">AGI ADITYA</option>
                            <option value="3">AJENG TRIVANI</option>
                            <option value="4">BAGUSTI</option>
                            <option value="5">BRAMIANTO</option>
                            <option value="6">DETI NURWULANDARI</option>
                            <option value="7">DEWI SINTAWATI</option>
                        </select>
                        <div class="invalid-feedback errorPic">

                        </div>
                  </div>
              <div class="form-group col-md-6 col-12">
                  <label> <i class="mdi mdi-check"></i>
                    Tindak Lanjut PIC
                  </label>
                  <textarea class="form-control" id="tindaklanjut" rows="1"></textarea>
                  </div>
              </div>
              <br>
              <button class="btn btn-primary btnsimpan"><i class="fa fa-paper-plane"></i> SUBMIT</button>
              <br>
              *Hari Raya Keagamaan (Nyepi, Natal, Idul Fitri,Waisak,Imlek)
            </div>
            <?= form_close() ?>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card mb-6">
            <div class="card-body">
              <i class="mdi mdi-image-filter-hdr"></i> Foto <br>
              <hr>
              <div class="form-group text-center">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label class="black  control-label">Ambil Foto dari webcam</label>
                    <div id="my_camera"></div>
                    <br>
                    <button type="button" class="btn btn-secondary btn-sm btn-block" onclick="take_picture()">Ambil Gambar</button>
                  </div>
                  <div class="form-group col-md-6 col-12">
                  <label class="black  control-label">Hasil Capture</label>
                    <div id="results"></div>
                    <input type="hidden" name="imagecam" class="image-tag">
                  </div>
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
        harikerjapln: $('input#harikerjapln').val(),
        koefisien: $('input#koefisien').val(),
        harikerja: $('input#harikerja').val(),
        harilibur: $('input#harilibur').val(),
        hariagama: $('input#hariagama').val(),
        harikerja2: $('input#harikerja2').val(),
        harilibur2: $('input#harilibur2').val(),
        hariagama2: $('input#hariagama2').val(),
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
            title: "Koefisien Pengali Buku Tamu",
            text: response.sukses,
            icon: "success",
            showConfirmButton: true
          });

          $('#hasil_hari').text(response.realisasi_hari);
          $('#hasil_realisasi').text(response.realisasi);
          $('#hasil_rp').text(response.rp_realisasi_max);
        }
      }
    });
  })
</script>

<script language="JavaScript">
	Webcam.set({
		width: 320,
		height: 240,
		dest_width: 640,
		dest_height: 480,
		image_format: 'jpeg',
		jpeg_quality: 90,
		force_flash: false,
		flip_horiz: true,
		fps: 45
	});
	Webcam.attach('#my_camera');

	function take_picture(){
		Webcam.snap( function(data_uri) {
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			$('.image-tag').val(raw_image_data);
			document.getElementById('results').innerHTML = '<img class="img-responsive" style="width:320px;height:240px;" src="'+data_uri+'"/>';
		});
	}
</script>

<?= $this->endSection('isi') ?>