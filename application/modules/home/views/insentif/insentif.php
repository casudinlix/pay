<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home')?>"><i class="fa fa-home"></i>Home</a></li>
  <li class="active"><a href="<?php echo site_url('home/employe')?>"><i class="fa fa-users"></i>Employe</a></li>
  <li class="active"><a href="<?php echo site_url('home/settingshift')?>"><i class="fa fa-clock-o"></i>Sift</a></li>

</ul>
<!-- END BREADCRUMB -->

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
  <a href="<?php echo site_url('home/addinsentif')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Add new Insentif</button></a>
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
                                                <th>Task</th>
                                                <th>Many</th>
                                                <th> Jobs</th>
                                                <th>Group Level</th>
                                                <th>Nominal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($intensif as $key): ?>
                                                  <td><?php echo $no ?></td>
                                                  <td><?php echo  $key->tindakan?></td>
                                                  <td><?php echo $key->jml?>x</td>
                                                  <td><?php echo  $key->jabatan?></td>
                                                  <td><?php echo $key->golongan ?></td>
                                                  <td>Rp. <?php echo number_format($key->nominal) ?></td>
                                                  <td><a href="<?php echo site_url('home/editinsentif/'.$key->id)?>" class="fa fa-pencil fa-lg btn btn-info"></a>
                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
