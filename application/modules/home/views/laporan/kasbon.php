
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
                                             <li><a href="#" onClick ="$('#kasbon').tableExport({type:'excel',escape:'false'});"><img src='<?php echo export()?>xls.png' width="24"/> XLS</a></li>
                                        <li class="divider"></li>

                                        <li><a href="#" onClick ="$('#kasbon').tableExport({type:'doc',escape:'false'});"><img src='<?php echo export()?>word.png' width="24"/> Word</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#" onClick ="$('#kasbon').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
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
                                <strong>Total Semua Kasbon Karyawan</strong>
                                <?php foreach ($sum as $key): ?>
                                  Rp.<?php echo number_format($key) ?>
                                <?php endforeach; ?>
                                    <table class="table datatable" id="kasbon">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> No Transaksi</th>
                                                <th> Nominal</th>
                                                <th> Keterangan</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Tanggal Di Setujui</th>
                                                <th>Disetujui Oleh</th>
                                                <th>Status</th>
                                                <th>Status Bayar</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($all as $key): ?>
                                                  <td><?php echo $no ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->no_transaksi ?></td>

<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->nominal_pinjaman )?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->ket_pinjaman ?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_aju_pinjaman) ?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_approve) ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->disetujui_oleh ?></td>
<td colspan="" rowspan="" headers="">
 
    <span class="label label-info"><strong> <?php echo $key->status_aju ?></strong></span>
 
   
 
</td>
<td colspan="" rowspan="" headers=""><?php if ($key->status_pinjaman=="BELUM BAYAR" ): ?>
      <span class="label label-danger"><strong> <?php echo $key->status_pinjaman ?></strong></span>
<?php else: ?>
      <span class="label label-success"><strong> <?php echo $key->status_pinjaman ?></strong></span>
<?php endif; ?></td>

                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
