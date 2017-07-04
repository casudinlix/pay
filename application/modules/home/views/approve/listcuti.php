<!-- START RESPONSIVE TABLES -->
                   <div class="row">
                       <div class="col-md-12">
                           <div class="panel panel-default">

                               <div class="panel-heading">
                                   <h3 class="panel-title">Total employee leave request</h3>
                               </div>

                               <div class="panel-body panel-body-table">

                                   <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-actions table1">
                                           <thead>
                                               <tr>
                                                   <th width="30">No</th>
                                                   <th width="70">NIP</th>
                                                   <th width="100">Nama Lengkap</th>
                                                   <th width="100">Tanggal Request</th>
                                                    <th width="100">Tanggal Awal Cuti</th>
                                                     <th width="100">Tanggal Akhir Cuti</th>
                                                    <th width="100">Lama Cuti</th>
                                                   <th width="100">Keterangan</th>
                                                   <th width="100">Di Setujui Oleh</th>
                                                   <th width="100">Tgl Di Setujui</th>
                                                   <th width="100">Status</th>
                                                   <th width="100">Aksi</th>

                                               </tr>
                                           </thead>
                                           <tbody>
                                             <?php $no=1; 
                                             foreach ($cek as $key):
                                               
$dari=new dateTime($key->tgl_awal_cuti);
$sampai=new dateTime($key->tgl_akhir_cuti);

$total=$dari->diff($sampai);
                                              ?>

                                                <tr id="trow_1">
<td><?php echo $no ?></td>
<td><?php echo $key->nip ?></td>
<td><?php echo $key->nama_lengkap ?></td>
<td><?php echo tgl_indo($key->tgl_aju_cuti) ?></td>
<td><?php echo tgl_indo($key->tgl_awal_cuti) ?></td>
<td><?php echo tgl_indo($key->tgl_akhir_cuti) ?></td>
<td><?php echo $total->d+1 ?> Hari</td>
<input type="hidden" name="lama" value="<?php echo $lama=$total->d+1;?>">
<td><?php echo $key->ket_cuti ?></td>
<td><?php echo $key->disetujui_oleh ?></td>
<td><?php echo $key->tgl_approve ?></td>
<td>
  <?php if ($key->status_cuti=="POSTING"): ?>
    <span class="label label-info"><?php echo $key->status_cuti ?></span>

  <?php endif; ?>
  <?php if ($key->status_cuti=="APPROVE"): ?>
    <span class="label label-success"> <?php echo $key->status_cuti ?></span>

  <?php endif; ?>
  <?php if ($key->status_cuti=="REJECT"): ?>
    <span class="label label-danger"><strong> <?php echo $key->status_cuti ?></strong></span>

  <?php endif; ?>
</td>
<td>
<?php if ($key->status_cuti=="REJECT" || $key->status_cuti=="APPROVE"): ?>

<?php else: ?>
  <button class="btn btn-warning btn-rounded btn-sm" onClick="approve('<?php echo $key->nip?>/<?php echo $key->tgl_awal_cuti?>/APPROVE/<?php echo $key->id_cuti?>/<?php echo $lama ?>/<?php echo $key->id ?> ');">APPROVE</button>
  <button class="btn btn-danger btn-rounded btn-sm" onClick="approve('<?php echo $key->nip?>/<?php echo $key->tgl_awal_cuti?>/REJECT/<?php echo $key->id_cuti?>/<?php echo $lama ?>/<?php echo $key->id ?>');">REJECT</button>

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
                           </div>

                       </div>
                   </div>
                   <!-- END RESPONSIVE TABLES -->
