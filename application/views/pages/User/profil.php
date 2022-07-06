        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
          </div>


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form class="user" action="<?php echo base_url(); ?>user/daftar/proses_daftar" method="post">

                    <div class="form-group">
                      <!-- <input type="hidden" name="id_user" required value="<?php echo $data->id_user; ?>"> -->
                    </div>
                    <div class="form-group">
                      <label for="nama_penyakit">Nama</label>
                      <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_penyakit">Email</label>
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_penyakit">No Hp</label>
                      <input type="number" class="form-control form-control-user" name="hp" id="exampleInputHp" placeholder="08......" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_penyakit">Alamat</label>
                      <input type="text" class="form-control form-control-user" name="alamat" id="exampleInputHp" placeholder="alamat" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_penyakit">Password</label>
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Simpan
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->