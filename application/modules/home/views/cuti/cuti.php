
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

                                       <a href="<?php echo site_url('home/addleave')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Add new leave</button></a>

                                 </div>
                                   <ul class="panel-controls">
                                       <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                       <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                   </ul>
                               </div>
                               <div class="panel-body">
                                   <table class="table table-bordered datatable">
                                       <thead>
                                           <tr>
                                             <th>Kode</th>
                                            <th>NIP</th>
<th>Name</th>
<th>Periode</th><th>Expired</th><th>Used</th><th>Remaining</th><th>Action</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                                         <tr>
                                           <?php foreach ($cuti as $key): ?>
                                             <td><?php echo $key->id_cuti ?></td>
                                             <td><?php echo $key->nip ?></td>
                                             <td><?php echo $key->name ?></td>
                                             <td><?php echo tgl_indo($key->periode) ?></td>
                                             <td><?php echo tgl_indo($key->expired )?></td>
                                             <td><?php echo $key->terpakai ?></td>
                                             <td><?php echo $key->sisa ?></td>
              <td><a class="btn btn-info" href="<?php echo site_url('home/editleave/')?><?php echo $key->id_cuti?>"><i class="fa fa-pencil"></i></a></td>
                                             </tr>
                                           <?php endforeach; ?>


                                     </tbody>
                                   </table>


                               </div>
                           </div>
                           <!-- END DEFAULT DATATABLE -->
