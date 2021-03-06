<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Penyakit</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url(); ?>admin/penyakit/tambah">
        <button type="button" name="button" class="btn btn-primary float-right">Tambah Penyakit</button>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Penyakit</th>
              <th>Nama Penyakit</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($penyakit as $data) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data->kode_penyakit; ?></td>
                <td><?php echo $data->nama_penyakit; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/penyakit/edit/<?php echo $data->id_penyakit; ?>" class="btn btn-warning btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?php echo base_url(); ?>admin/penyakit/hapus/<?php echo $data->id_penyakit; ?>" class="btn btn-danger btn-icon-split btn-sm">
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