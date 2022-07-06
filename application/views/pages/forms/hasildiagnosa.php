  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
          <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SISTEM PAKAR DIAGNOSA PENYAKIT GIGI DENGAN METODE FORWARD CHAINING</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12 color-3 p-4">
          <div class="content-wrapper">

            <?php
            foreach ($hasil as $h) {
              $jawaban = $h->jawaban;
              $id_jawaban = $h->id_jawaban;
            }
            $ar_jawab = explode(" ", $jawaban);
            $golrule = null;

            foreach ($rule as $r) {
              $ketentuan = $r->kode_gejala;
              $exketentuan = explode(" ", $ketentuan);
              if ($exketentuan == $ar_jawab) {
                $golrule = explode(" ", $ketentuan);
                foreach ($penyakit as $p) {
                  if ($r->kode_penyakit == $p->kode_penyakit) {
                    $golpenyakit = $p->nama_penyakit;
                    $golidpenyakit = $p->id_penyakit;
                    $golpenjelasanpenyakit = $p->penjelasan;
                    $golgejalapenyakit = $p->gejala;
                    $golpenangananpenyakit = $p->penanganan;
                  }
                }
              }
            }
            ?>

            <section class="content">
              <div class="">
                <div class="jawaban">
                  <div class="row">
                    <div class="jawab">

                      <?php
                      if ($jawaban == "") {
                      ?>
                        <div class="info-box">
                          <span class="info-box-icon bg-yellow"><i class="fa fa-question-circle"></i></span>
                          <div class="info-box-content">
                            <h4>Hasil diagnosa :</h4>
                            Hasil diagnosa penyakit <mark style="background: #e9dbc9;">tidak diketahui</mark>
                          </div>
                        </div>
                        <br>
                        <h4>Anda bisa mencoba diagnosa kembali -> <a href="<?php echo base_url(); ?>konsultasi">konsultasi</a>.</h4>
                        <br>
                        <?php
                      } else {
                        if ($golrule == $ar_jawab) {
                        ?>
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>
                            <div class="info-box-content">
                              <h4>Hasil diagnosa :</h4>
                              Anda kemungkinan <mark style="background: #e9dbc9;">terkena</mark> penyakit <b><?php echo $golpenyakit; ?></b>
                            </div>
                          </div>

                          <a href="<?php echo base_url(); ?>cetak/<?php echo $id_jawaban; ?>">
                            <button type="button" class="btn btn-info" name="button">Cetak</button>
                          </a>
                          <br>

                          <br>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Penjelasan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golpenjelasanpenyakit; ?>
                            </div>
                          </div>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Gejala</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golgejalapenyakit; ?>
                            </div>
                          </div>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Penanganan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golpenangananpenyakit; ?>
                            </div>
                          </div>

                        <?php
                        } else {
                          foreach ($rule as $ru) {
                            $ketentuan = $ru->kode_gejala;
                            $exketentuan = explode(" ", $ketentuan);
                            $intersect = array_intersect($exketentuan, $ar_jawab);
                            $similarity = count($intersect);
                            $rule_similarity[$ru->kode_rule] = $arrayName = array('nilai' => $similarity, 'kode' => $ru->kode_rule);
                          }
                          $most_similar = (max($rule_similarity));
                          foreach ($rule as $rul) {
                            if ($most_similar['kode'] == $rul->kode_rule) {
                              $most_similar_penyakit = $rul->kode_penyakit;
                            }
                          }
                          foreach ($penyakit as $p) {
                            if ($p->kode_penyakit == $most_similar_penyakit) {
                              $golpenyakit = $p->nama_penyakit;
                              $golidpenyakit = $p->id_penyakit;
                              $golpenjelasanpenyakit = $p->penjelasan;
                              $golgejalapenyakit = $p->gejala;
                              $golpenangananpenyakit = $p->penanganan;
                            }
                          }
                        ?>
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>
                            <div class="info-box-content">
                              <h4>Hasil diagnosa :</h4>
                              Anda kemungkinan <mark style="background: #e9dbc9;">terkena</mark> penyakit <b><?php echo $golpenyakit; ?></b>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->

                          <a href="<?php echo base_url(); ?>cetak/<?php echo $id_jawaban; ?>">
                            <button type="button" class="btn btn-info" name="button">Cetak</button>
                          </a>
                          <br>

                          <br>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Penjelasan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golpenjelasanpenyakit; ?>
                            </div>
                          </div>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Gejala</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golgejalapenyakit; ?>
                            </div>
                          </div>
                          <div class="box box-info collapsed-box">
                            <div class="box-header with-border" data-widget="collapse">
                              <h3 class="box-title">Penanganan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="box-body">
                              <?php echo $golpenangananpenyakit; ?>
                            </div>
                          </div>
                      <?php
                        }
                      }
                      ?>

                      <a href="<?php echo base_url(); ?>home">
                        <button type="button" class="btn btn-danger" name="button">Kembali</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- /.content -->
          </div>
          <!--  -->


        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    $('#click').on("click", function() {
      console.log('ok');


    });
  </script>
  <!-- /.content -->
  </div>