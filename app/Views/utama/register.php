<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran Murid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('img/logosph.png') ?>" rel="icon">
  <link href="<?= base_url('img/apple-touch-icon.png" rel="apple-touch-icon') ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/simple-datatables/style.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>
  <style>
    .custom-width {
      max-width: 11000px;
      /* Adjust as needed */
    }
  </style>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center custom-width">


              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <form action="<?= base_url('home/aksi_register') ?>" method="POST" enctype="multipart/form-data">

                    <!--PEMBUATAN AKUN -->
                    <div class="pt-4 pb-2">
                      <h2 class="card-title text-center pb-0 fs-4">Pendaftaran Siswa</h2>
                      <h1 class="text-center small">1. Buat Akun Permata Harapan</h1>
                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <label for="usrnm" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="usrnm" class="form-control" id="usrnm" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>

                        <div class="col">
                          <label for="pwd" class="form-label">Password</label>
                          <input type="password" name="pwd" class="form-control" id="pwd" autocomplete="new-password"
                            required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                      </div>
                    </div>

                    <!--PENDAFTARAN SISWA -->

                    <div class="pt-4 pb-2">

                      <h1 class="text-center small">2. Biodata Siswa</h1>
                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="nama" class="form-label">Nama Lengkap</label>

                          <input type="text" name="nama" class="form-control" id="nama" required>
                          <div class="invalid-feedback">Masukkan Nama Lengkap Anda.</div>
                        </div>



                        <div class="col-md-4">
                          <label for="nik" class="form-label">NIK</label>
                          <input type="number" name="nik" class="form-control" id="nik" required>
                          <div class="invalid-feedback">Masukkan NIK Anda</div>
                        </div>



                        <div class="col-md-4">
                          <label for="nisn" class="form-label">NISN</label>
                          <input type="number" name="nisn" class="form-control" id="nisn" required>
                          <div class="invalid-feedback">Masukkan NISN Anda</div>
                        </div>
                      </div>




                      <div class="row">
                        <div class="col-md-4">
                          <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                          <div class="input-group has-validation">
                            <input type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir" required>
                            <div class="invalid-feedback">Masukkan Tempat Lahir Anda.</div>
                          </div>
                        </div>


                        <div class="col-md-4">
                          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
                          <div class="invalid-feedback">Masukkan Tanggal Lahir Anda</div>
                        </div>



                        <div class="col-md-4">
                          <label for="agama" class="form-label">Agama</label>
                          <select name="agama" class="form-control" id="agama" required>
                            <option disabled selected>Pilih Agama</option>
                            <option>Buddha</option>
                            <option>Katolik</option>
                            <option>Protestan</option>
                            <option>Islam</option>
                            <option>Konghucu</option>
                            <option>Hindu</option>
                            <option>Lainnya</option>
                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label for="jk" class="form-label">Jenis Kelamin</label>

                          <select name="jk" class="form-control" id="jk" required>
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>

                        </div>


                        <div class="col-md-4">
                          <label for="nohp" class="form-label">No Handphone</label>
                          <input type="number" name="nohp" class="form-control" id="nohp" required>
                          <div class="invalid-feedback">Masukkan No Handphone Anda</div>
                        </div>



                        <div class="col-md-4">
                          <label for="mail" class="form-label">Email</label>
                          <input type="email" name="mail" class="form-control" id="mail" required>
                          <div class="invalid-feedback">Masukkan Email Anda</div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-4">
                          <label for="alamat" class="form-label">Alamat</label>
                          <div class="input-group has-validation">
                            <textarea type="email" name="alamat" class="form-control" id="alamat" required></textarea>
                            <div class="invalid-feedback">Masukkan Alamat Anda</div>
                          </div>
                        </div>



                        <div class="col-md-4">
                          <label for="province" class="form-label">Provinsi</label>
                          <select name="province" id="province" class="form-control" required>
                            <option disabled selected>Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                          </select>
                        </div>



                        <div class="col-md-4">
                          <label for="kota" class="form-label">Kota</label>
                          <input type="text" name="kota" class="form-control" id="kota" required>
                          <div class="invalid-feedback">Masukkan Kota Anda</div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label for="kcmtn" class="form-label">Kecamatan</label>

                          <input type="text" name="kcmtn" class="form-control" id="kcmtn" required>
                          <div class="invalid-feedback">Masukkan Kecamatan Anda.</div>

                        </div>


                        <div class="col-md-4">
                          <label for="klrhn" class="form-label">Kelurahan</label>
                          <input type="text" name="klrhn" class="form-control" id="klrhn" required>
                          <div class="invalid-feedback">Masukkan Kelurahan Anda</div>
                        </div>



                        <div class="col-md-4">
                          <label for="kodepos" class="form-label">Kodepos</label>
                          <input type="number" name="kodepos" class="form-control" id="kodepos" required>
                          <div class="invalid-feedback">Masukkan KodePos Anda</div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label for="rt" class="form-label">RT</label>
                          <input type="number" name="rt" class="form-control" id="rt" required>
                          <div class="invalid-feedback">Masukkan RT Anda.</div>

                        </div>


                        <div class="col-md-4">
                          <label for="rw" class="form-label">RW</label>
                          <input type="number" name="rw" class="form-control" id="rw" required>
                          <div class="invalid-feedback">Masukkan RW Anda</div>
                        </div>
                      </div>



                    </div>




                    <!--PENDAFTARAN WALI-->
                    <div class="pt-4 pb-2"></div>
                    <h1 class="text-center small">3. Biodata Wali/Orang Tua</h1>


                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="nmwali" class="form-label">Nama Wali/Orangtua </label>
                        <input type="text" name="nmwali" class="form-control" id="nmwali" required>
                            <div class="invalid-feedback">Nama Wali Anda</div>
                          </div>
                        

                        <div class="col-md-4">
                          <label for="nohpwali" class="form-label">No Handphone</label>
                          <input type="number" name="nohpwali" class="form-control" id="nohpwali" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="tgl_lahirwali" class="form-label">Tanggal Lahir</label>
                          <input type="date" name="tgl_lahirwali" class="form-control" id="tgl_lahirwali" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label for="kerja" class="form-label">Pekerjaan </label>


                          <input type="text" name="kerja" class="form-control" id="kerja" required>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>


                        <div class="col-md-4">
                          <label for="gaji" class="form-label">Pendapatan</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                            <input type="number" name="gaji" class="form-control" id="gaji" value="000.000" min="1000"
                              required>
                            <div class="invalid-feedback">Please enter your password!</div>
                          </div>
                        </div>

                      </div>



                    </div>

                    <!--DATA SEKOLAH ALUMNI -->
                    <div class="pt-4 pb-2">
                    <h1 class="text-center small">4. Sekolah Alumni</h1>
                  

                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <label for="nmsklh" class="form-label">Nama Sekolah </label>
                       <input type="text" name="nmsklh" class="form-control" id="nmsklh" required>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                      

                      <div class="col">
                        <label for="asalsklh" class="form-label">Asal Sekolah</label>
                        <select id="asalsklh" name="asalsklh" class="form-control"required>
  <option  disabled selected>Asal Sekolah</option>
  <option>Swasta</option>
  <option>Negeri</option>
  <option>HomeSchooling</option>
  <option>Tidak ada</option>
  </select>
                        
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div> </div>
                      <div class="row">
                      <div class="col">
                        <label for="almtsklh" class="form-label">Alamat Sekolah</label>
                        <textarea name="almtsklh" class="form-control" id="almtsklh" required></textarea>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                     

                      
                      <div class="col">
                        <label for="year" class="form-label">Tahun Lulusan </label>
                        <select id="year" name="year" class="form-control"required>
  <option value="" disabled selected>Tahun Lulusan</option>
  <option value="2022">2024</option>
  <option value="2023">2025</option>
  <option value="2024">2026</option>
 
</select>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                     </div>
                     
                      </div>
                  </div>



                    <!--DATA FOTO -->
                    <div class="pt-4 pb-2">
                    <h1 class="text-center small">5. Identitass</h1>
                  

                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <label for="usrnm" class="form-label">Akte Lahir </label>
                        <input type="file" class="form-control" name="akte" accept="fotodata/akte" required>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                      

                      <div class="col">
                        <label for="pwd" class="form-label">Ijazah</label>
                        <input type="file" class="form-control" name="ijazah" accept="fotodata/ijazah" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div> 
                      <div class="col">
                        <label for="pwd" class="form-label">Kartu Keluarga</label>
                        <input type="file" class="form-control" name="kk" accept="fotodata/kk" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                     

                      </div>
                      <div class="row">
                      <div class="col">
                        <label for="usrnm" class="form-label">KTP Wali </label>
                        <input type="file" class="form-control" name="ktp" accept="fotodata/ktp" required>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                        <div class="col">
                        <label for="pwd" class="form-label">Foto 3x4</label>
                        <input type="file" class="form-control" name="foto" accept="fotodata/fotomuka" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                     
                       </div>
                      </div>
                   </div>




                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                            conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?=base_url('home/index')?>">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?= base_url('vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= base_url('vendor/quill/quill.min.js') ?>"></script>
  <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= base_url('vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= base_url('vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>


</body>

</html>