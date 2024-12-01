<style>
    .input-group-text {
        width: 150px; /* Adjust the width as needed */
        text-align: left; /* Align the text if needed */
    }
    .form-control {
        background-color: #d3d3d3; /* Light gray */
        color: black; /* Text color */
        font-weight: bold; /* Make text bold */
    }
</style>

<input type="text" value="<?= $hoh->nama ?>">

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
            
            <a href="<?= base_url('home/siswa') ?>"><button class="btn btn-secondary">
            <i class="fas fa-arrow-alt-circle-left"></i></button></a>


            <!-- Table with stripped rows -->
            
             
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Nama Siswa</span>
            <input type="text" class="form-control" value="<?= $hoh->nama ?>" style="background-color: lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">NIK</span>
            <input type="text" class="form-control" value="<?= $hoh->nik ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">NISN</span>
            <input type="text" class="form-control" value="<?= $hoh->nisn ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Jenis Kelamin</span>
            <input type="text" class="form-control" value="<?= $hoh->jenis_kelamin ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">No Handphone</span>
            <input type="text" class="form-control" value="<?= $hoh->no_hp ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Email</span>
            <input type="text" class="form-control" value="<?= $hoh->email ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Tanggal Lahir</span>
            <input type="text" class="form-control" value="<?= $hoh->tanggal_lahir ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Tempat Lahir</span>
            <input type="text" class="form-control" value="<?= $hoh->tempat_lahir ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Agama</span>
            <input type="text" class="form-control" value="<?= $hoh->agama ?>" style="background-color:lightgray;" readonly>
            </div>  
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Provinsi</span>
            <input type="text" class="form-control" value="<?= $hoh->provinsi ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Kota</span>
            <input type="text" class="form-control" value="<?= $hoh->kota ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Kecamatan</span>
            <input type="text" class="form-control" value="<?= $hoh->kecamatan ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Kelurahan</span>
            <input type="text" class="form-control" value="<?= $hoh->kelurahan ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Alamat</span>
            <input type="text" class="form-control" value="<?= $hoh->alamat ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Kodepos</span>
            <input type="text" class="form-control" value="<?= $hoh->kodepos ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">RT</span>
            <input type="text" class="form-control" value="<?= $hoh->rt ?>" style="background-color:lightgray;" readonly>
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">RW</span>
            <input type="text" class="form-control" value="<?= $hoh->rw ?>" style="background-color:lightgray;" readonly>
            </div> 
           <!-- Wali -->
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Wali</span>
            <input type="text" class="form-control" value="<?= $hoh->nama_wali ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Tanggal Lahir Wali</span>
            <input type="text" class="form-control" value="<?= $hoh->tanggal_lahirwali ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">No Hp Wali</span>
            <input type="text" class="form-control" value="<?= $hoh->nama_wali ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Pekerjaan Wali</span>
            <input type="text" class="form-control" value="<?= $hoh->pekerjaan ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Pendapatan Wali</span>
            <input type="text" class="form-control" value="Rp. <?= $hoh->pendapatan ?>" style="background-color:lightgray;" readonly>
            </div> 
            
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Alumni Sekolah</span>
            <input type="text" class="form-control" value="<?= $hoh->nama_sekolah ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Asal Sekolah</span>
            <input type="text" class="form-control" value="<?= $hoh->asal ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Alamat Sekolah</span>
            <input type="text" class="form-control" value="<?= $hoh->alamat_sklh ?>" style="background-color:lightgray;" readonly>
            </div> 
            <div class="input-group mb-3"> 
            <span class="input-group-text" style="background-color:powderblue;">Lulusan Tahun</span>
            <input type="text" class="form-control" value="<?= $hoh->tahun ?>" style="background-color:lightgray;" readonly>
            </div> 
            
               
                 
                    
                    
                    
                    
                    
                    <td>
                      <input type="hidden" value="<?=$hoh -> id_siswa?>" name="id"></input>
                    
                      <a href="<?= base_url('home/edit_Siswa/' . $hoh->id_siswa) ?>"><button class="btn btn-warning"><i
                            class="fas fa-edit"></i></button></a>

                      <a href="<?= base_url('home/hapus_Siswa/' . $hoh->id_siswa) ?>"><button class="btn btn-danger"><i
                            class="fas fa-minus-square"></i></button></a>
                    </td>


                  </tr>


                

             
            </table>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
