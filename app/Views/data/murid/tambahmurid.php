

<div class="pagetitle">
    <h1>Tabel Siswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Siswa</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Siswa</h5>
            




           
            
        

            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
              <i class="fas fa-plus-square"></i>
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="<?= base_url('home/simpan_Siswa') ?>" method="POST">

                      <tr>
                        <td>Nama Siswa</td>
                        <td><input type="text" class="form-control" placeholder="Nama Siswa" id="nama_brg"
                            name="nama_brg" required></td>
                      </tr>
                      <tr>
                        <td>Kode Siswa</td>
                        <td><input type="text" class="form-control" placeholder="Kode Siswa" id="kode_brg"
                            name="kode_brg" required></td>
                      </tr>
                      <tr>
                        <td>Stok Siswa</td>
                        <td><input type="number" class="form-control" placeholder="Stok Siswa" id="stok_brg"
                            name="stok_brg" required></td>
                      </tr>



                      </table>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                
                  <th width="3%">No</th>
                  <th>Nama Siswa</th>
                  <th width="5%">NIK</th>
                  <th width="5%">NISN</th>
                  <th width="3%">Jenis Kelamin</th>
                  <th>No Handphone</th>
                  <th>Email</th>
                  <th>Detail</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $ms = 1;
                foreach ($hoh as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $ms++ ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->nik ?></td>
                    <td><?= $value->nisn ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                    <td><?= $value->nama_wali ?></td>
                    <td><?= $value->email ?></td>
                    
                    <td>
                    <a href="<?= base_url('home/full_siswa/' . $value->id_siswa) ?>"><button class="btn btn-primary"><i
                            class="fas fa-window-maximize"></i></button></a>
                    </td>
                    <td>
                      <a href="<?= base_url('home/edit_siswa/' . $value->id_siswa) ?>"><button class="btn btn-warning"><i
                            class="fas fa-edit"></i></button></a>

                      <a href="<?= base_url('home/hapus_siswa/' . $value->id_siswa) ?>"><button class="btn btn-danger"><i
                            class="fas fa-minus-square"></i></button></a>
                    </td>


                  </tr>


                <?php
                }
                ?>


              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </section>
