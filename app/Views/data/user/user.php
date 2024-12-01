

<div class="pagetitle">
    <h1>Tabel User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User</h5>
            




            <style>
              input[name="search"] {
                width: 130px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
              }

              /* When the input field gets focus, change its width to 100% */
              input[name="search"]:focus {
                width: 100%;
              }
            </style>
            <div class="container" flex="left">
              <button class="btn btn-primary"><i class="fas fa-search"></i><button>
                  <input type="text" class="form-control" name="search" placeholder="Pencarian">
            </div>


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
                    <h4 class="modal-title">Tambah User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="<?= base_url('home/simpan_user') ?>" method="POST">

                      <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control" placeholder="Username" id="usrnm"
                            name="usrnm" required></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control" placeholder="Password" id="pw"
                            name="pw" required></td>
                      </tr>
                      <tr>
                        <td>Level</td>
                        <td><select class="form-control" id="level"
                        name="level" required>
                        <option disabled selected>Pilih Level</option>
                            <option>1</option>
                            <option>2</option>
                        </select></td>
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
                  <th>Username</th>
                  <th>Password</th>
                  <th width="5%">Level</th>
                  
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
    <td><?= $value->username ?></td>
    <td><?=md5($value->password)?></td>
    <td><?= $value->level ?></td>
                    
                    
                   
                    <td>
                      <a href="<?= base_url('home/edit_user/' . $value->id_user) ?>"><button class="btn btn-warning"><i
                            class="fas fa-edit"></i></button></a>

                      <a href="<?= base_url('home/hapus_user/' . $value->id_user) ?>"><button class="btn btn-danger"><i
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
