

<!-- PAGE TITLE -->
                <div class="page-title">

                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"></h3>
                                    <div class="col-md-4">
  <a href="<?php echo site_url('accounting/addinsentif')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Tambah Insentif</button></a>
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Insentif</th>
                                                <th>Jenis Insentif</th>
                                                <th> Jumlah</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th colspan="" rowspan="" headers="" scope="">Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($intensif as $key): ?>
                                                  <td><?php echo $no ?></td>
                                                  <td><?php echo  $key->id_insentif?></td>
                                                  <td><?php echo $key->jenis_insentif?></td>
                                                  <td colspan="" rowspan="" headers=""><?php echo $key->jml_insentif?>x</td>
                                                  <td><?php echo  $key->nama_jabatan?></td>
                                                  <td><?php echo $key->gol_jabatan ?></td>
                                                  <td>Rp. <?php echo number_format($key->nominal_insentif) ?></td>
                                                  <td><a href="<?php echo site_url('accounting/editinsentif/'.$key->id_insentif)?>" class="fa fa-pencil fa-lg btn btn-info"></a>
                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
