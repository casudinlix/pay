
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
                                <strong>Total Semua Pinjaman Karyawan</strong>
                                <?php foreach ($sum as $key): ?>
                                  Rp.<?php echo number_format($key) ?>
                                <?php endforeach; ?>
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> No Transaksi</th>
                                                 <th> Nip</th>
                                                  <th> Nama Karyawan</th>
                                                <th> Nominal</th>
                                                <th> Keterangan</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Tanggal Di Setujui</th>
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
<td colspan="" rowspan="" headers=""><?php echo $key->nip ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap ?></td>

<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->nominal_pinjaman )?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->ket_pinjaman ?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_aju_pinjaman) ?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_approve) ?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->disetujui_oleh ?></td>
<td colspan="" rowspan="" headers="">
<?php if ($key->status_aju=="PENDING" || $key->status_aju=="REJECT"): ?>
    <span class="label label-danger"><strong> <?php echo $key->status_aju ?></strong></span>
<?php else: ?>
  <span class="label label-success"><strong> <?php echo $key->status_aju ?></strong></span>
<?php endif; ?>
</td>
<td colspan="" rowspan="" headers=""><?php if ($key->status_pinjaman=="BELUM BAYAR" ): ?>
      <span class="label label-danger"><strong> <?php echo $key->status_pinjaman?></strong></span>
<?php else: ?>
      <span class="label label-success"><strong> <?php echo $key->status_pinjaman ?></strong></span>
<?php endif; ?></td>
<td colspan="" rowspan="" headers="">
  <?php if ($key->status_aju =="PENDING"): ?>
    

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
