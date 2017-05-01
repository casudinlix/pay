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
                                                   <th width="100">Name</th>
                                                   <th width="100">Date Request</th>
                                                   <th width="100">Reason</th>
                                                   <th width="100">Approve BY</th>
                                                   <th width="100">Approve Date</th>
                                                   <th width="100">Status</th>
                                                   <th width="100">Approve Action</th>

                                               </tr>
                                           </thead>
                                           <tbody>
                                             <?php foreach ($cek as $key):
                                               $no=1; ?>
<form>
                                                <tr id="trow_1">
<td><?php echo $no ?></td>
<td><?php echo $key->nip ?></td>
<td><?php echo $key->name ?></td>
<td><?php echo tgl_indo($key->date) ?></td>
<td><?php echo $key->ket ?></td>
<td><?php echo $key->approve_by ?></td>
<td><?php echo tgl_indo($key->approve_date) ?></td>
<td>
  <?php if ($key->status=="PENDING"): ?>
    <span class="label label-info">Pending</span>

  <?php endif; ?>
  <?php if ($key->status=="APPROVE"): ?>
    <span class="label label-success"> Approve</span>

  <?php endif; ?>
  <?php if ($key->status=="REJECT"): ?>
    <span class="label label-danger"><strong> Reject</strong></span>

  <?php endif; ?>
</td>
<td>
<?php if ($key->status=="REJECT" || $key->status=="APPROVE"): ?>

<?php else: ?>
  <button class="btn btn-warning btn-rounded btn-sm" onClick="approve('<?php echo $key->nip?>/<?php echo $key->date?>/APPROVE');">APPROVE</button>
  <button class="btn btn-danger btn-rounded btn-sm" onClick="approve('<?php echo $key->nip?>/<?php echo $key->date?>/REJECT');">REJECT</button>

<?php endif; ?>

</td>
</tr>
                                             <?php endforeach; ?>


                                           </tbody>
                                       </table>
                                   </div>

                               </div>
                           </div>

                       </div>
                   </div>
                   <!-- END RESPONSIVE TABLES -->
