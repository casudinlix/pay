
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

                                    <div class="col-md-4">
  <a href="<?php echo site_url('home/adduser')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Tambah User Baru</button></a>
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> NIP</th>
                                                 
                                                <th>Nama Lengkap</th>
                                                <th colspan="" rowspan="" headers="" scope="">Hak Akses</th>
                                                
                                                <th colspan="" rowspan="" headers="" scope="">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($all as $key): ?>
                                                  <td><?php echo $no ?></td>

                                                  <td><?php echo $key->nip?></td>
                                                  <td><?php echo  $key->nama_lengkap?></td>
                                                  <td colspan="" rowspan="" headers=""><?php echo  $key->hak_akses?></td>
                                                  
                                                  <td><a href="<?php echo site_url('home/edituser/'.$key->nip)?>" class="fa fa-pencil fa-lg btn btn-info"></a>
                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
