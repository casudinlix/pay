
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
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> No Transaksi</th>
                                                <th> Nominal</th>
                                                <th>Tanggal</th>
                                                <th>Disetujui Oleh</th>
                                                <th>Status</th>
                                                <th>Status Bayar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$no=1;
                                                foreach ($all as $key): ?>
                                                  <td><?php echo $no ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->no_transaksi ?></td>

<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->nominal )?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl) ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->approve_by ?></td>
<td colspan="" rowspan="" headers="">
<?php if ($key->status=="PENDING" || $key->status=="REJECT"): ?>
    <span class="label label-danger"><strong> <?php echo $key->status ?></strong></span>
<?php else: ?>
  <span class="label label-success"><strong> <?php echo $key->status ?></strong></span>
<?php endif; ?>
</td>
<td colspan="" rowspan="" headers=""><?php if ($key->status_byr=="BELUM BAYAR" ): ?>
      <span class="label label-danger"><strong> <?php echo $key->status_byr ?></strong></span>
<?php else: ?>
      <span class="label label-success"><strong> <?php echo $key->status_byr ?></strong></span>
<?php endif; ?></td>
<td colspan="" rowspan="" headers="">
  <?php if ($key->status =="PENDING"): ?>
    <a href="#" class='btn btn-success' title="APPROVE" onclick="approvekasbon('<?php echo $key->no_transaksi?>/APPROVE')"><i class="fa fa-check"></i></a>
    <a href="#" class='btn btn-danger' title="REJECT" onclick="approvekasbon('<?php echo $key->no_transaksi?>/REJECT')"><i class="fa fa-minus-square"></i></a>

  <?php endif; ?>

</td>
                                                  </tr>
                                                <?php
$no++;
                                              endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
