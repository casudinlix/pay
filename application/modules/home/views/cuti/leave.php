
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">List Leave Remaining</h3>
                                </div>
                                <div class="panel-body panel-body-table">

                                    <table class="table table-bordered table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Leave Perioid</th>
                                                <th>Used</th>
                                                <th>Remaining</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <?php
                                              $no=1; foreach ($cuti as $key): ?>
<td><?php echo $no ?></td>
<td><?php echo tgl_indo($key->periode) ." - ".tgl_indo($key->expired)?></td>
<td><?php echo $key->terpakai?></td>
<td><?php echo  $key->sisa?></td>
<?php if ($key->sisa > 0): ?>
  <td><a href="#" data-toggle="modal" data-target="#cuti"  data-nip="<?php echo $this->uri->segment(3)?>" data-sisa="<?php echo $key->sisa?>">Use</a></td>
<?php else: ?>
  <td><label for="" class="label label-danger">expired</label> </td>
<?php endif; ?>
</tr>

                                              <?php $no++;
                                            endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

<?php if ($cek->num_rows() >=1): ?>

  <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Your Leave</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions table1">
                                            <thead>
                                                <tr>
                                                  <th width="50">No</th>
                                                    <th>Nip</th>
                                                    <th width="100">Name</th>
                                                    <th width="100">Date</th>
                                                    <th width="100">Reason</th>
                                                    <th width="100">Approve By</th>
                                                    <th width="100">Approve Date</th>
                                                    <th width="100">Status</th>
                                                    <th width="100"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="trow_1">
                                                  <?php foreach ($cek->result() as $key):
                                                    $no=1;?>
                                                    <td class="text-center"><?php echo $no ?></td>
                                                    <td><strong><?php echo $key->nip ?></strong></td>

                                                    <td><strong><?php echo $key->name ?></strong></td>
                                                    <td><strong><?php echo tgl_indo($key->date) ?></strong></td>
                                                    <td><strong><?php echo $key->ket ?></strong></td>
                                                    <td><strong><?php echo $key->approve_by ?></strong></td>
                                                    <td><strong><?php echo tgl_indo($key->approve_date) ?></strong></td>
<td><?php if ($key->status=="PENDING"): ?>
<span class="label label-warning">Pending</span>
<?php endif; ?>
<?php if($key->status=="APPROVE"): ?>
  <span class="label label-success">Approve</span>
<?php endif; ?>
<?php if($key->status=="REJECT"): ?>
  <span class="label label-danger">Reject</span>

<?php endif; ?></td>
                                                    <td>
<?php if ($key->status=="APPROVE" || $key->status=="REJECT"): ?>

                                                      <?php else: ?>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="hap('<?php echo $key->nip?>/<?php echo $key->date?>');"><span class="fa fa-times"></span></button>

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

<?php else: ?>
<marque><blink>No Data</blink></marque>
<?php endif; ?>
                            <!-- END BASIC TABLE SAMPLE -->
  <div class="modal" id="cuti" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">Apply Leave</h4>
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form  class="form-horizontal" action="<?php echo site_url('aksi_1/cuti')?>" method="post">
                            <div class="panel panel-default">
<?php foreach ($cuti as $key): ?>
<input type="text" name="sisa" value="<?php echo $key->sisa?>">
<?php endforeach; ?>

                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nip</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" value="<?php echo $this->uri->segment(3)?>" name="nip" readonly=""/>
                                                    </div>
                                                 </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Reason</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <textarea class="form-control" rows="5" required="" name='ket'></textarea>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name='tgl' class="form-control datepicker" required="">
                                                    </div>
                                                </div>
                                            </div>







                                        </div>

                                    </div>

                                </div>
                                <div class="panel-footer">

                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
  </div>
</div>
</div>
</div>
<div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
