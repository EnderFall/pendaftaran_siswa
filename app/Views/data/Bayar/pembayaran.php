

<div class="pagetitle">
    <h1>Tabel Siswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Pembayaran</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pembayaran</h5>
            




           
            
        

           

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                
                  <th width="3%">No</th>
                  <th width="5%">Nama Siswa</th>
                  <th width="5%">NIK</th>
                  <th width="5%">NISN</th>
                  <th width="5%">Harga</th>
                  <th>Metode</th>
                  
                  <th>Status</th>
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
                    <td><?= $value->harga ?></td>
                    <td><?= $value->metode ?></td>
                    
                    
                    <td>
                        <?php if(($value->status)==0){?>
                            <button class="btn btn-success" disabled>Lunas</button>
                    

                    <?php } else { ?>
                        <button class="btn btn-danger" disabled>Tidak Lunas</button>
                        <?php }?>
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
