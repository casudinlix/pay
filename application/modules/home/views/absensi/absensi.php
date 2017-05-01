
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

                                        <li><a href="#" onClick ="$('#example').tableExport({type:'doc',escape:'false'});"><img src='<?php echo export()?>word.png' width="24"/> Word</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#" onClick ="$('#example').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                  </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
    <form action="<?php echo site_url();?>aksi_1/import" method="post" enctype="multipart/form-data">

  <input type="file" name="file" required="">
  <i class="fa fa-cloud-upload"><input type="submit" name="" value="Import" class="btn btn-warning"></i>
                          </form>


     <table class="table table-responsive datatable" id="dataTable">
                                        <thead>
                                            <tr>

                                              <th colspan="" class="danger">NIP</th>
                                              <th colspan="" class="danger">Name</th>
                                              <th colspan="" class="danger">Shift</th>
                                              <th colspan="" class="danger">Date</th>
                                              <th colspan="" class="danger">In / Out</th>
                                              <th class="info">Actual In / Out</th>
                                              <th class="info">Actual Date</th>
                                              <th class="info">Overtime</th>
                                              <th class="info">Late</th>
                                              <th class="info">Total</th>
                                              <th class="info"></th>
                                              <th class="warning">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <?php foreach ($all as $key): ?>
                                                <td class="danger"><?php echo $key->nip ?></td>
                                                <td class="danger"><?php echo $key->name ?></td>
                                                <td class="danger"><?php echo $key->shift ?></td>
                                                <td class="danger"><?php echo tgl_indo($key->aktual_date) ?></td>
                                                <td class="danger"><?php echo $key->aktual_in ?>-<?php echo $key->aktual_out ?></td>

                                                <td><?php echo $key->in ?> -<?php echo $key->out ?></td>
<td><?php echo tgl_indo($key->date) ?></td>
<td><?php echo $key->overtime ?></td>
<td><?php echo $key->late ?></td>
<td><?php echo $key->total ?></td>
<td><?php echo $key->status ?></td>


<td>xx</td>
                                                </tr>
                                              <?php endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
