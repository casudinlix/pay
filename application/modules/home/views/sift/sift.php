

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
                                    <h3 class="panel-title">Sift Master</h3>
                                    <div class="col-md-4">
                                      <a href="<?php echo site_url('home/addshift')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Add new Shift</button></a>
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
                                                <th>Sift Name</th>
                                                <th> In</th>
                                                <th> Out</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($all as $key): ?>
                                                  <td><?php echo $no ?></td>
                                                  <td><?php echo  $key->sift_name?></td>
                                                  <td><?php echo  $key->jam_in?></td>
                                                  <td><?php echo  $key->jam_out?></td>
                                                  <td><a href="<?php echo site_url('home/deletshift/'.$key->id)?>" class="fa fa-trash-o fa-lg btn btn-danger"></a>
                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
