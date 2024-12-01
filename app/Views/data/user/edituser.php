

    <div class="pagetitle">
      <h1>Edit User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">DataMaster</li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">EditUser</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User</h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('home/update_user')?>" method="post">
                <div class="row">
                  <label for="inputText" class="col col-form-label">Username</label>
                  <div class="col">
                    <input type="text" class="form-control" name="usrnm" value="<?=$hoh->username ?>">
                  </div>
                </div>
                
                </div>
                <div class="row">
                  <label for="inputPassword" class="col col-form-label">Password</label>
                  <div class="col">
                    <input type="password" class="form-control" name="pwd"value="<?=md5($hoh->password) ?>">
                  </div>
                </div>
                

                <div class="row">
                  <label class="col col-form-label">Level</label>
                  <div class="col">
                    <select class="form-select" aria-label="Default select example" name="level" >
                      <option disabled selected value="<?=$hoh->level ?>"><?=$hoh->level ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      
                    </select>
                  </div>
                </div>

                <div>
	<input type="hidden" name="idusr" value="<?= $hoh->id_user ?>">
	<button type="submit" class= "btn btn-success">Simpan</button>
</div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

