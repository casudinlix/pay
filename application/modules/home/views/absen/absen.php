
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
                                   <table class="table table-bordered table1">
                                       <thead>
                                           <tr>
                                            <th>Actual In</th>
<th> Actual Out</th>
<th>Date</th><th>Overtime</th><th>Late</th><th>Status</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                                         <tr>

  <?php foreach ($absen as $absen1): ?>
    <td><?php echo $absen1->in ?></td>
    <td><?php echo $absen1->out ?></td><td><?php echo tgl_indo($absen1->date) ?></td><td><?php echo $absen1->overtime ?></td>
    <td><?php echo $absen1->late ?></td><td><?php echo $absen1->status ?></td>
    </tr>
  <?php endforeach; ?>

                                     </tbody>
                                   </table>


                               </div>
                           </div>
                           <!-- END DEFAULT DATATABLE -->
