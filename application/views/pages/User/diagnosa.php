        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Diagnosa</h1>
          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Petunjuk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="col-md-8">
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style="background-image: url(assets/images/11.jpg);"></a>
                    </div>
                    <p>Daftar pertanyaan ini disusun oleh Drg. Dirhansyah.
                      Seorang dokter gigi yang beralamat di Jl. gajah Mada,
                      Campursari, Sidemangan, Kecamatan Temanggung, Kabupaten Temanggung,
                      Jawa Tengah 56229.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Mulai Diagnosa</h6>

                </div>
                <!-- Card Body -->
                <div class="container">
                  <div class="jawaban">
                    <div class="row">
                      <div class="jawab">
                        <div class="info-box">
                          <!-- Apply any bg-* class to to the icon to color it -->
                          <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
                          <div class="info-box-content">
                            <h4>Jawablah pertanyaan berikut ini :</h4>
                            <span class="progress-description">
                              Untuk mendiagnosis penyakit gigi anda
                            </span>
                          </div><!-- /.info-box-content -->
                        </div><!-- /.info-box -->

                        <script>
                          var base_url = 'http://localhost/sp_gigi/'
                          var api_rule = base_url + 'api_rule'

                          let rule_list = []
                          let gejala_list = []

                          fetch(api_rule)
                            .then(response => {
                              if (response.ok) {
                                return response.json();
                              } else {
                                throw new Error(response.statusText);
                              }
                            })
                            .then(data => {
                              rule_list = data.rule;
                            });


                          function pencet(click_gejala) {
                            var kode_gejala = click_gejala
                            gejala_list.push(kode_gejala)
                            //console.log(gejala_list)
                            for (var i = 0; i < rule_list.length; i++) {
                              rule = rule_list[i].kode_gejala.split(" ")
                              merge = rule.concat(gejala_list)
                              let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
                              duplicate = ([...new Set(findDuplicates(merge))])
                              if (JSON.stringify(duplicate) === JSON.stringify(rule)) {
                                submitForm(duplicate)
                              }
                            }

                            function submitForm(jawaban) {
                              var form = document.createElement("form");
                              var element1 = document.createElement("input");
                              var element2 = document.createElement("input");

                              var today = new Date();
                              var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                              var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                              var dateTime = date + ' ' + time;

                              form.method = "POST";
                              form.action = base_url + 'Konsultasi_control/cek_diagnosa';
                              //form.action = base_url + 'User/Diagnosa/cek_diagnosa';

                              element1.value = jawaban;
                              element1.name = "jawaban";
                              form.appendChild(element1);

                              element2.value = dateTime;
                              element2.name = "waktu";
                              form.appendChild(element2);

                              document.body.appendChild(form);

                              form.submit();
                            }
                          }

                          function pencet_last(click_gejala) {
                            var kode_gejala = click_gejala
                            gejala_list.push(kode_gejala)
                            //console.log(gejala_list)
                            for (var i = 0; i < rule_list.length; i++) {
                              rule = rule_list[i].kode_gejala.split(" ")
                              merge = rule.concat(gejala_list)
                              let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
                              duplicate = ([...new Set(findDuplicates(merge))])
                              if (JSON.stringify(duplicate) === JSON.stringify(rule)) {
                                submitForm(duplicate)
                              }
                            }
                            submitLast()

                            function submitForm(jawaban) {
                              var form = document.createElement("form");
                              var element1 = document.createElement("input");
                              var element2 = document.createElement("input");

                              var today = new Date();
                              var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                              var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                              var dateTime = date + ' ' + time;

                              form.method = "POST";
                              form.action = base_url + 'Konsultasi_control/cek_diagnosa';
                              //form.action = base_url + 'User/Diagnosa/cek_diagnosa';

                              element1.value = jawaban;
                              element1.name = "jawaban";
                              form.appendChild(element1);

                              element2.value = dateTime;
                              element2.name = "waktu";
                              form.appendChild(element2);

                              document.body.appendChild(form);

                              form.submit();
                            }

                            function submitLast() {
                              var form = document.createElement("form");
                              var element1 = document.createElement("input");
                              var element2 = document.createElement("input");

                              var today = new Date();
                              var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                              var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                              var dateTime = date + ' ' + time;

                              form.method = "POST";
                              form.action = base_url + 'Konsultasi_control/cek_diagnosa';
                              //form.action = base_url + 'User/Diagnosa/cek_diagnosa';

                              element1.value = gejala_list;
                              element1.name = "jawaban";
                              form.appendChild(element1);

                              element2.value = dateTime;
                              element2.name = "waktu";
                              form.appendChild(element2);

                              document.body.appendChild(form);

                              form.submit();
                            }
                          }

                          function lastNo() {
                            var form = document.createElement("form");
                            var element1 = document.createElement("input");
                            var element2 = document.createElement("input");

                            var today = new Date();
                            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                            var dateTime = date + ' ' + time;

                            form.method = "POST";
                            form.action = base_url + 'Konsultasi_control/cek_diagnosa';
                            // form.action = base_url + 'User/Diagnosa/cek_diagnosa';

                            element1.value = gejala_list;
                            element1.name = "jawaban";
                            form.appendChild(element1);

                            element2.value = dateTime;
                            element2.name = "waktu";
                            form.appendChild(element2);

                            document.body.appendChild(form);

                            form.submit();
                          }
                        </script>

                        <form name="form_pertanyaan">
                          <br>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalpertanyaan1" data-backdrop="static" data-keyboard="false">
                            Mulai Diagnosa
                          </button>
                          <br>
                          <br>

                          <?php
                          $no = 1;
                          foreach ($pertanyaan as $p) {
                          ?>
                            <div class="modal modal-default fade" id="modalpertanyaan<?php echo $no; ?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $p->gejala; ?>?</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="center-block well">
                                      <div class="text-center">
                                        <button type="button" class="btn btn-success btn-block" data-dismiss="modal" id="jwby" onclick="<?php if ($jumlah_pertanyaan == $no) {
                                                                                                                                          echo "pencet_last('" . $p->kode_gejala . "')";
                                                                                                                                        } else {
                                                                                                                                          echo "pencet('" . $p->kode_gejala . "')";
                                                                                                                                        } ?>" name="jwby" data-toggle="modal" data-target="#modalpertanyaan<?php echo $no + 1; ?>" data-backdrop="static" data-keyboard="false">Ya</button>
                                        <br>
                                        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="jwbt" onclick="<?php if ($jumlah_pertanyaan == $no) {
                                                                                                                                          echo "lastNo()";
                                                                                                                                        } ?>" name="jwbt" data-toggle="modal" data-target="#modalpertanyaan<?php echo $no + 1; ?>" data-backdrop="static" data-keyboard="false">Tidak</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php
                            $no++;
                          }
                          ?>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>

                <script type="text/javascript">
                  $('#click').on("click", function() {
                    console.log('ok');
                  });
                </script>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function() {

            $('.modal').on("hidden.bs.modal", function(e) { //fire on closing modal box
              if ($('.modal:visible').length) { // check whether parent modal is opend after child modal close
                $('body').addClass('modal-open'); // if open mean length is 1 then add a bootstrap css class to body of the page
              }
            });
          });
        </script>