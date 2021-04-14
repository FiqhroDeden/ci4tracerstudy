<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tracer Study Universitas Pattimura</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tracer Study</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
          <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Diri</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                <div class="col-md-2 col-sm-0">
                </div>
                <div class="col-md-7 col-sm-12">

      <form class="needs-validation" novalidate="" action="/tracerstudy/save/" method="POST">
            
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Nama Perguruan Tinggi</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pt" class="form-control form-control-sm" value="Universitas Pattimura" readonly="">
                                <div class="invalid-feedback">
                                      Nama Ruangan Wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F1. Program Studi</label>
                            <div class="col-sm-9">
                                <select name="prodi" class="form-control form-control-sm" id="">
                                <option value="">-- Pilih --</option>
                                <?php foreach($prodi as $p): ?>
                                <option value="<?= $p['prodi_id']; ?>"><?= $p['nama_prodi']; ?></option>
                                <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                      Nama Ruangan Wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F2. Nama Responden</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_responden" class="form-control form-control-sm" required="">
                                <div class="invalid-feedback">
                                      Nama Responden Wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F2a. Nim semasa kuliah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" class="form-control form-control-sm" required="">
                                <div class="invalid-feedback">
                                      Nim Wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F2b. Tahun Lulus</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_lulus" class="form-control form-control-sm" required="">
                                <div class="invalid-feedback">
                                      Nim Wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F2c. Nomor Telepon/Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control form-control-sm" required="">
                                <div class="invalid-feedback">
                                      Nomor hp wajib diisi?.
                                </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">F2d. Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control form-control-sm" required="">
                                <div class="invalid-feedback">
                                      Nomor hp wajib diisi?.
                                </div>
                            </div>
                      </div>
                  
                </div>
                <div class="col-md-3 col-sm-0">
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.data diri -->

            <div class="card card-outline card-warning">
              
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-2 col-sm-0">
                  </div>
                  <div class="col-md-7 col-sm-12">

                        <div class="form-group mb row">
                          <label class="col-sm-4 col-form-label col-form-label-sm">F3. Kapan anda mulai mencari pekerjaan ?</label>
                              <div class="col-sm-6">
                              <table border="0">
                                  <tbody>
                                    <tr>
                                      <td width="60">kira-kira</td><td width="100"><input type="text" class="form-control form-control-sm" name="cr_sblm" id="cr_sblm" maxlength="2" value="" data-bv-field="cr_sblm"><i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="cr_sblm" style=""></i></td><td> bulan sebelum lulus
                                      </td>
                                    </tr>

                                    <tr>
                                      <td width="60">kira-kira</td><td width="100"><input type="text" class="form-control form-control-sm" name="cr_ssdh" id="cr_ssdh" maxlength="2" value="" data-bv-field="cr_ssdh"><i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="cr_ssdh" style=""></i></td><td> bulan sesudah lulus
                                      </td>
                                    </tr>
                                  <!--TR>
                                  <TD colspan="3"><input type="checkbox" class="flat-blue" name="f3no" id="f3no" value="1">
                                    &nbsp; Saya tidak mencari kerja (<font color="navy">jika di centang langsung lanjut ke pertanyaan F8</font>)</TD></TR-->
                                </tbody></table>
                              </div>
                        </div>
                    
                  </div>
                  <div class="col-md-3 col-sm-0">
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            

          <div class="card card-outline card-info">
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-2 col-sm-0">
                  </div>
                  <div class="col-md-7 col-sm-12">

                      <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F3b.Apakah anda sementara mencari kerja ?</label>
                            <div class="col-sm-8">
                            <div class="form-group clearfix">
                                <div class="icheck-primary  d-inline">
                                  <input type="radio" id="radioPrimary1" name="r1" checked>
                                  <label for="radioPrimary1">Ya
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="radioPrimary2" name="r1">
                                  <label for="radioPrimary2">Tidak
                                  </label>
                                </div>
                                <br>
                                <div class="icheck-primary d-inline">
                                  
                                  <small for="radioPrimary3">Jika menjawab <b>Tidak</b>, langsung ke pertanyaan F5
                                </small>
                                </div>
                                
                              </div>
                            </div>
                      </div>
                  
                  </div>
                  <div class="col-md-3 col-sm-0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-outline card-success">
              
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                <div class="col-md-2 col-sm-0">
                </div>
                <div class="col-md-7 col-sm-12">

                      <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F4.Bagaimana anda mencari pekerjaan tersebut ? <br><small>Jawaban bisa lebih dari satu</small></label>
                        
                            <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Melalui iklan di koran/majalah, brosur</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pergi ke bursa/pameran kerja</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Mencari lewat internet/iklan online/milis</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Dihubungi oleh perusahaan</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Menghubungi Kemenakertrans</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Menghubungi agen tenaga kerja komersial/swasta</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Menghubungi kantor kemahasiswaan/hubungan alumni</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Membangun jejaring (network) sejak masih kuliah</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Membangun bisnis sendiri</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Melalui penempatan kerja atau magang</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Lainnya</label>
                                </div>
                              </div>
                            </div>
                      </div>
                  
                </div>
                <div class="col-md-3 col-sm-0">
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- .row -->
            <div class="card card-outline card-info">
              
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-1 col-sm-0">
                  </div>
                  <div class="col-md-10 col-sm-12">

                      <div class="form-group mb row">
                        <label class="col-sm-6 col-form-label col-form-label-sm">F5. Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk mencari/memperoleh pekerjaan pertama?</label>
                            <div class="col-sm-6">
                            <table border="0">
                                <tbody>
                                  <tr>
                                    <td width="60">kira-kira</td><td width="100"><input type="text" class="form-control form-control-sm" name="cr_sblm"  maxlength="2" value="" ><i class="form-control-feedback glyphicon glyphicon-ok"  style=""></i></td><td> bulan sebelum lulus
                                    </td>
                                  </tr>

                                  <tr>
                                    <td width="60">kira-kira</td><td width="100"><input type="text" class="form-control form-control-sm" name="cr_ssdh"  maxlength="2" value="" ><i class="form-control-feedback glyphicon glyphicon-ok" ></i></td><td> bulan sesudah lulus
                                    </td>
                                  </tr>
                                
                              </tbody></table>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-6 col-form-label col-form-label-sm">F6. Berapa banyak perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memperoleh pekerjaan pertama?</label>
                            <div class="col-sm-6">
                            <table border="0">
                                <tbody>
                                  <tr>
                                    <td width="100"><input type="text" class="form-control form-control-sm" name="cr_sblm"  maxlength="2" value="" ><i class="form-control-feedback glyphicon glyphicon-ok"  style=""></i></td><td> perusahan/instansi/institusi</td>
                                  </tr>
                                
                              </tbody></table>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-6 col-form-label col-form-label-sm">F7. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</label>
                            <div class="col-sm-6">
                            <table border="0">
                                <tbody>
                                  <tr>
                                    <td width="100"><input type="text" class="form-control form-control-sm" name="cr_sblm"  maxlength="2" value="" ><i class="form-control-feedback glyphicon glyphicon-ok"  style=""></i></td><td> perusahan/instansi/institusi</td>
                                  </tr>
                                
                              </tbody></table>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-6 col-form-label col-form-label-sm">F7a. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</label>
                            <div class="col-sm-6">
                            <table border="0">
                                <tbody>
                                  <tr>
                                    <td width="100"><input type="text" class="form-control form-control-sm" name="cr_sblm"  maxlength="2" value="" ><i class="form-control-feedback glyphicon glyphicon-ok"  style=""></i></td><td> perusahan/instansi/institusi</td>
                                  </tr>
                                
                              </tbody></table>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-1 col-sm-0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-outline card-info">
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-2 col-sm-0">
                  </div>
                  <div class="col-md-7 col-sm-12">

                      <div class="form-group mb row">
                        <label class="col-sm-6 col-form-label col-form-label-sm">F8. Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)? <small>Pilih Ya atau Tidak</small></label>
                            <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <div class="icheck-primary  d-inline">
                                  <input type="radio" id="kerja1" name="r1" checked>
                                  <label for="kerja1">Ya
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="kerja2" name="r1">
                                  <label for="kerja2">Tidak  
                                  </label>
                                </div>
                        
                              </div>
                            </div>
                      </div>
                  
                  </div>
                  <div class="col-md-3 col-sm-0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-outline card-info">
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-2 col-sm-0">
                  </div>
                  <div class="col-md-7 col-sm-12">

                  <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F9. Bagaimana anda menggambarkan situasi anda saat ini? <br><small>Jawaban bisa lebih dari satu</small></label>
                        
                            <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya Menikah</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya sibuk dengan keluarga dan anak-anak</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya sekarang sedang mencari pekerjaan</label>
                                </div>            
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Lainnya</label>
                                </div>
                              </div>
                            </div>
                      </div>
                  
                  </div>
                  <div class="col-md-3 col-sm-0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-outline card-info">
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-1 col-sm-0">
                  </div>
                  <div class="col-md-8 col-sm-12">

                    <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F10. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? <br><small>Pilihlah satu Jawaban</small></label>
                        
                            <div class="col-sm-8">
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="radio1">
                                  <label class="form-check-label">Tidak</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="radio1">
                                  <label class="form-check-label"> Tidak, tapi saya sedang menunggu hasil lamaran kerja</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="radio1">
                                  <label class="form-check-label">  Ya, saya akan mulai bekerja dalam 2 minggu ke depan</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="radio1">
                                  <label class="form-check-label">  Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="radio1">
                                  <label class="form-check-label">  Lainnya</label>
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                          <label class="col-sm-4 col-form-label col-form-label-sm">F11. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang? <br><small>Pilihlah satu Jawaban</small></label>
                          
                              <div class="col-sm-8">
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio2">
                                    <label class="form-check-label"> Instansi pemerintah (termasuk BUMN)</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio2">
                                    <label class="form-check-label"> Organisasi non-profit/Lembaga Swadaya Masyarakat</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio3">
                                    <label class="form-check-label"> Perusahaan swasta</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio4">
                                    <label class="form-check-label">  Wiraswasta/perusahaan sendiri</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio5">
                                    <label class="form-check-label">  Lainnya</label>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F12. Tempat anda bekerja saat ini bergerak di bidang apa? <br><small>(Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)</small></label>
                            <div class="col-sm-8">
                              <select class="form-control form-control-sm select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Salah Satu --</option>
                                <option>Administrasi Pemerintahan, Pertahanan dan jaminan sosial wajib</option>
                                <option>Angkutan Air</option>
                                <option>Angkutan darat dan angkutan melalusi saluran pipa</option>
                                <option>Angkutan udara</option>
                                <option>Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib</option>
                                <option>Bidang lainnya (belum bekerja)</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group mb row">
                          <label class="col-sm-4 col-form-label col-form-label-sm">F13. Kira-kira berapa pendapatan anda setiap bulannya?</label>
                              <div class="col-sm-8">
                              <table border="0">
                                  <tbody>
                                    <tr>
                                      <td width="60">Rp.</td><td width="200"><input type="text" class="form-control form-control-sm" name="cr_sblm" id="cr_sblm" maxlength="8" value="" data-bv-field="cr_sblm"><i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="cr_sblm" style=""></i></td><td> dari pekerjaan utama
                                      </td>
                                    </tr>

                                    <tr>
                                      <td width="60">Rp.</td><td width="200"><input type="text" class="form-control form-control-sm" name="cr_ssdh" id="cr_ssdh" maxlength="8" value="" data-bv-field="cr_ssdh"><i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="cr_ssdh" style=""></i></td><td> dari lembur dan tips
                                      </td>
                                    </tr>
                                    <tr>
                                      <td width="60">Rp.</td><td width="200"><input type="text" class="form-control form-control-sm" name="cr_ssdh" id="cr_ssdh" maxlength="8" value="" data-bv-field="cr_ssdh"><i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="cr_ssdh" style=""></i></td><td> lainnya
                                      </td>
                                    </tr>
                                  <!--TR>
                                  <TD colspan="3"><input type="checkbox" class="flat-blue" name="f3no" id="f3no" value="1">
                                    &nbsp; Saya tidak mencari kerja (<font color="navy">jika di centang langsung lanjut ke pertanyaan F8</font>)</TD></TR-->
                                </tbody></table>
                              </div>
                        </div>
                        <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F14. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                            <div class="col-sm-8">
                              <select class="form-control form-control-sm" style="width: 100%;">
                                <option selected="selected">-- Pilih Salah Satu --</option>
                                <option>Sangat Erat</option>
                                <option>Erat</option>
                                <option>Cukup Erat</option>
                                <option>Angkutan udara</option>
                                <option>Kurang Erat</option>
                                <option>Tidak Sama Sekali</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F15. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                            <div class="col-sm-8">
                              <select class="form-control form-control-sm" style="width: 100%;">
                                <option selected="selected">-- Pilih Salah Satu --</option>                          
                                <option>Setingkat Lebih Tinggi</option>
                                <option>Tingkat yang sama</option>
                                <option>Sedikit lebih rendah</option>
                                <option>Tidak perlu pendidikan tinggi</option>
                                
                              </select>
                            </div>
                        </div>

                        <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F16. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?<br><small>Jawaban bisa lebih dari satu</small></label>
                        
                            <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya belum mendapatkan pekerjaan yang lebih sesuai.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Di pekerjaan ini saya memeroleh prospek karir yang baik.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pekerjaan saya saat ini lebih aman/terjamin/secure.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pekerjaan saya saat ini lebih menarik.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Lainnya</label>
                                </div>
                                
                              </div>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F17a. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?</label>
                            <div class="col-sm-7">
                              <table class="table table-sm table-striped table-bordered table-hover table-responsive table-condensed">
                                  <tbody>
                                    <tr align="center">
                                      <td align="left" style="color:red;">Keterangan: 1 = Sangat Rendah, 5 = Sangat Tinggi</td>
                                      <th>&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;</th>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di bidang atau disiplin ilmu anda</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-1"></td>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di luar bidang atau disiplin ilmu anda </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-2"></td>
                                    </tr>                          
                                    <tr>
                                      <td>Pengetahuan umum</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-3"></td>
                                    </tr>
                                    <tr>
                                      <td>Bahasa Inggris</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-4"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan internet</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-5"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan komputer</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-6"></td>
                                    </tr>
                                    <tr>
                                      <td>Berpikir kritis </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-7"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan riset</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-8"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan belajar </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-9"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan berkomunikasi</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-10"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja di bawah tekanan </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-11"></td>
                                    </tr>
                                    <tr>
                                      <td>Manajemen waktu </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-12"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja secara mandiri</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-13"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja dalam tim/bekerjasama dengan orang lain</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-14"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam memecahkan masalah</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-15"></td>
                                    </tr>
                                    <tr>
                                      <td>Negosiasi</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-16"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan analisis</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-17"></td>
                                    </tr>
                                    <tr>
                                      <td>Toleransi </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-18"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan adaptasi </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-19"></td>
                                    </tr>
                                    <tr>
                                      <td>Loyalitas</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-20"></td>
                                    </tr>
                                    <tr>
                                      <td>Integritas </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-21"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja dengan orang yang berbeda budaya maupun latar belakang </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-22"></td>
                                    </tr>
                                    <tr>
                                      <td>Kepemimpinan</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-23"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam memegang tanggungjawab</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-24"></td>
                                    </tr>
                                    <tr>
                                      <td>Inisiatif</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-25"></td>
                                    </tr>
                                    <tr>
                                      <td>Manajemen proyek/program 	</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-26"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan untuk memresentasikan ide/produk/laporan</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-27"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam menulis laporan, memo dan dokumen</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-28"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan untuk terus belajar sepanjang hayat</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-29"></td>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di luar bidang atau disiplin ilmu anda </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17a-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17a-30"></td>
                                    </tr>
                                  </tbody>
                              </table>
                            </div>
                      </div>
                      <div class="form-group mb row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">F17b. Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini?</label>
                            <div class="col-sm-7">
                              <table class="table table-sm table-striped table-bordered table-hover table-responsive table-condensed">
                                  <tbody>
                                    <tr align="center">
                                      <td align="left" style="color:red;">Keterangan: 1 = Sangat Rendah, 5 = Sangat Tinggi</td>
                                      <th>&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;</th>
                                      <th>&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;</th>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di bidang atau disiplin ilmu anda&nbsp;&nbsp;&nbsp;</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-1"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-1"></td>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di luar bidang atau disiplin ilmu anda </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-2"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-2"></td>
                                    </tr>                          
                                    <tr>
                                      <td>Pengetahuan umum</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-3"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-3"></td>
                                    </tr>
                                    <tr>
                                      <td>Bahasa Inggris</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-4"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-4"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan internet</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-5"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-5"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan komputer</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-6"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-6"></td>
                                    </tr>
                                    <tr>
                                      <td>Berpikir kritis </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-7"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-7"></td>
                                    </tr>
                                    <tr>
                                      <td>Ketrampilan riset</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-8"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-8"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan belajar </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-9"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-9"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan berkomunikasi</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-10"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-10"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja di bawah tekanan </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-11"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-11"></td>
                                    </tr>
                                    <tr>
                                      <td>Manajemen waktu </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-12"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-12"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja secara mandiri</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-13"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-13"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja dalam tim/bekerjasama dengan orang lain</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-14"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-14"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam memecahkan masalah</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-15"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-15"></td>
                                    </tr>
                                    <tr>
                                      <td>Negosiasi</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-16"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-16"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan analisis</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-17"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-17"></td>
                                    </tr>
                                    <tr>
                                      <td>Toleransi </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-18"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-18"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan adaptasi </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-19"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-19"></td>
                                    </tr>
                                    <tr>
                                      <td>Loyalitas</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-20"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-20"></td>
                                    </tr>
                                    <tr>
                                      <td>Integritas </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-21"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-21"></td>
                                    </tr>
                                    <tr>
                                      <td>Bekerja dengan orang yang berbeda budaya maupun latar belakang </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-22"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-22"></td>
                                    </tr>
                                    <tr>
                                      <td>Kepemimpinan</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-23"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-23"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam memegang tanggungjawab</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-24"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-24"></td>
                                    </tr>
                                    <tr>
                                      <td>Inisiatif</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-25"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-25"></td>
                                    </tr>
                                    <tr>
                                      <td>Manajemen proyek/program 	</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-26"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-26"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan untuk memresentasikan ide/produk/laporan</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-27"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-27"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan dalam menulis laporan, memo dan dokumen</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-28"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-28"></td>
                                    </tr>
                                    <tr>
                                      <td>Kemampuan untuk terus belajar sepanjang hayat</td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-29"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-29"></td>
                                    </tr>
                                    <tr>
                                      <td>Pengetahuan di luar bidang atau disiplin ilmu anda </td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio"  name="f17b-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-30"></td>
                                      <td><input class="form-check-input" style="margin-left: 10px;" type="radio" name="f17b-30"></td>
                                    </tr>
                                  </tbody>
                              </table>
                              <div class="row">
                                <div class="col md-3"></div>
                                <div class="col md-6">
                                  <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane"></span> Kirim</button>
        </form>
                                </div>
                                <div class="col md-3"></div>
                              </div>
                              
                            </div>
                      </div>
                      
                  
                  </div>
                  <div class="col-md-2 col-sm-0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            

          <!-- / -->
          </div>
          
          
          
        <!-- /.row -->

        
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?= $this->endSection(); ?>