<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Pasien</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url(); ?>admin/pasien/tambah">
        <button type="button" name="button" class="btn btn-primary float-right">Tambah Pasien</button>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Pasien</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Hp</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($pasien as $data) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data->kode_pasien; ?></td>
                <td><?php echo $data->nama; ?></td>
                <td><?php echo $data->email; ?></td>
                <td><?php echo $data->hp; ?></td>
                <td><?php echo $data->alamat; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/pasien/edit/<?php echo $data->id_user; ?>" class="btn btn-warning btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?php echo base_url(); ?>admin/pasien/hapus/<?php echo $data->id_user; ?>" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Hapus</span>
                  </a>
                </td>
              </tr>
            <?php
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->