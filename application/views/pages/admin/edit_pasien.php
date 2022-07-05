<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Pasien</h1>

  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    input[type=number], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>

  <div class="container">
    <form action="<?php echo base_url(); ?>admin/pasien/proses_edit" method="post">
      
      <?php
      if (isset($pasien)) {
        foreach ($pasien as $data) {
      ?>

      <div class="row">
        <div class="col-25">
          <label for="kode_pasien">Kode Pasien</label>
        </div>
        <div class="col-75">
          <input type="hidden" name="id_pasien" required value="<?php echo $data->id_user; ?>">
          <input type="text" name="kode_pasien" required value="<?php echo $data->kode_pasien; ?>" readonly>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="nama">Nama</label>
        </div>
        <div class="col-75">
          <input type="text" name="nama" placeholder="Nama" required value="<?php echo $data->nama; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="email" name="email" placeholder="Email" required value="<?php echo $data->email; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="hp">No Hp</label>
        </div>
        <div class="col-75">
          <input type="text" name="hp" placeholder="08....." required value="<?php echo $data->hp; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="alamat">Alamat</label>
        </div>
        <div class="col-75">
          <textarea name="alamat" rows="4" cols="50" placeholder="Alamat" require value="<?php echo $data->alamat; ?>">
          </textarea>
        </div>


      <br>
      <div class="row float-right">
        <input type="submit" value="Submit">
      </div>

      <?php
        }
      }
       ?>
    </form>
  </div>
  <br><br><br>

</div>
<!-- /.container-fluid -->