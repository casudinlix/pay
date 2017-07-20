
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
 <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                             <li><a href="#" onClick ="$('#gaji').tableExport({type:'excel',escape:'false'});"><img src='<?php echo export()?>xls.png' width="24"/> XLS</a></li>
                                        <li class="divider"></li>

                                         <li><a href="<?php echo site_url('laporan/cetakpenggajian')?>" target="_blank" ><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                    </div> 
                                    <div class="col-md-4">
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                
                                    <table class="table datatable" id="gaji">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> ID Gaji</th>
                                                <th> Nip</th>
                                                <th> Nama Karyawan</th>
                                                <th> Jabatan</th>
                                                <th> Golongan</th>
                                                <th>Bulan Gaji</th>
                                                
                                                <th>Gaji Pokok</th>
                                                <th>Status</th>
                                                 
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
    foreach ($all as $key): ?>
                                                  <td><?php echo $no ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->id_gaji ?></td>

<td colspan="" rowspan="" headers=""><?php echo $key->nip ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_jabatan ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->gol_jabatan?></td>
<td colspan="" rowspan="" headers=""><?php echo bulan($key->bulan_gaji) ?></td>
<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->gapok) ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->status ?></td>

   
  

                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
