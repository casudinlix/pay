
<!-- PAGE TITLE -->
                <div class="page-title">

                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                  <div class="col-md-12">
                                       <div class="btn-group pull-right">
                                    <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-download"></i> Export Absence</button>
                                    <ul class="dropdown-menu">


                                        <li><a href="#" onClick ="$('#example').tableExport({type:'excel',escape:'false'});"><img src='<?php echo export()?>xls.png' width="24"/> XLS</a></li>
                                        <li class="divider"></li>

                                         <li class="divider"></li>
                                         <li><a href="<?php echo site_url('laporan/cetakabsensi')?>" target="_blank"><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                  </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
    


     <table class="table table-responsive table1" id="example">
                                        <thead>
                                            <tr>

                                              <th colspan="" class="danger">NIP</th>
                                              <th colspan="" class="danger">Name</th>
                                             
                                              <th class="info">Jam In / Out</th>
                                              <th class="info">Tanggal</th>
                                              <th class="info">Lembur</th>
                                              <th class="info">Telat</th>
                                              
                                              <th class="info">Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                           <?php   foreach ($all as $key): ?>
                                                  

                                                  <td><?php echo $key->nip?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->in."-".$key->out?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_absensi)?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->lembur?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->telat?></td>
 
<td colspan="" rowspan="" headers=""><?php echo $key->status?></td>
    
    </tr>
                                                <?php
                    endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
