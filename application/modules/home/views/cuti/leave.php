
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
  <a href="<?php echo site_url('home/ajucuti/').$this->session->userdata('nip')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Ajukan Cuti</button></a>
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
<th>ID Cuti</th>
 <th>Tanggal Pengajuan</th>
 <th>Tanggal Awal Cuti</th>
 <th>Tanggal Akhir Cuti</th>
 <th>Lama Cuti</th>
 <th>Keterangan</th>
 <th>Tanggal Approve</th>
 <th>Di Setujui Oleh</th>
 <th>Status</th>
 <th>Aksi</th>
  </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
 <?php $no=1;
  foreach($cek as $key):
$dari=new dateTime($key->tgl_awal_cuti);
$sampai=new dateTime($key->tgl_akhir_cuti);

$total=$dari->diff($sampai);

    ?>                                               

<td colspan="" rowspan="" headers=""><?php echo $no?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->id_cuti?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_aju_cuti)?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_awal_cuti)?></td>
<td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_akhir_cuti)?></td>
<td colspan="" rowspan="" headers=""><?php echo $lama=$total->d+1;?> Hari</td>
<td colspan="" rowspan="" headers=""><?php echo $key->ket_cuti?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->tgl_approve?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->disetujui_oleh?></td>
<td colspan="" rowspan="" headers="">
    <?php if ($key->status_cuti=="PENDING"): ?>
<span class="label label-danger"><?php echo $key->status_cuti ?></span>
<?php endif; ?>
<?php if ($key->status_cuti=="POSTING"): ?>
<span class="label label-info"><?php echo $key->status_cuti ?></span>
<?php endif; ?>
<?php if($key->status_cuti=="APPROVE"): ?>
  <span class="label label-success"><?php echo $key->status_cuti ?></span>
<?php endif; ?>
<?php if($key->status_cuti=="REJECT"): ?>
  <span class="label label-danger"><?php echo $key->status_cuti ?></span>

<?php endif; ?>

</td>
<td colspan="" rowspan="" headers="">
<?php if($key->status_cuti=="POSTING" || $key->status_cuti=="REJECT" || $key->status_cuti=="APPROVE" ):?>

    <?php else:?>
  <a class="btn btn-success fa fa-check-circle" title="" onClick=posting("<?php echo $key->id_cuti.'/'.$this->uri->segment(3).'/'.$lama.'/'.'POSTING'?>")>Posting</a>  
<?php endif;?>
</td>
</tr>                                        
  <?php
$no++;
   endforeach;?>   
  </tbody>   
            </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
