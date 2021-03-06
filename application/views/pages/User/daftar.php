<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Baru</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun Baru!</h1>
                            </div>
                            <form class="user" action="<?php echo base_url(); ?>user/daftar/proses_daftar" method="post">
                                <?php if($this->session->flashdata('tambah')): ?>
                                <?php if($this->session->flashdata('tambah') == TRUE): ?>
                                <div class="alert alert-success">Berhasil menambahkan pengguna baru.
                                    <span>Silakan gunakan Email dan password yang telah terdaftar untuk login pada halaman login.</span>
                                </div>
                                <?php elseif($this->session->flashdata('tambah') == FALSE): ?>
                                <div class="alert alert-danger">Gagal menambahkan pengguna baru</div>
                                <?php endif; ?>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName"
                                        placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="hp" id="exampleInputHp"
                                        placeholder="08......" required>
                                </div>
                                <div class="form-group">
                                    <input type="texarea" class="form-control form-control-user" name="alamat" id="exampleInputAlamat"
                                        placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                                <hr>
                                <a href="<?php echo base_url(); ?>user/login" class="btn btn-google btn-user btn-block">
                                    Sudah Punya Akun
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>