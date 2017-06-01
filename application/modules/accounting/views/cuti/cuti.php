
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
                                   <table class="table table-bordered datatable">
                                       <thead>
                                           <tr>
                                             <th>Kode</th>
                                            <th>NIP</th>
<th>Nama Lengkap</th>
<th>Awal Berlaku</th><th>Akhir Masa Berlaku</th><th>Terpakai</th><th>Sisa Cuti</th><th>Aksi</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                                         <tr>
                                           <?php foreach ($cuti as $key): ?>
                                             <td><?php echo $key->id_jc ?></td>
                                             <td><?php echo $key->nip ?></td>
                                             <td><?php echo $key->nama_lengkap ?></td>
                                             <td><?php echo tgl_indo($key->awal_berlaku_cuti) ?></td>
                                             <td><?php echo tgl_indo($key->akhir_berlaku_cuti )?></td>
                                             <td><?php echo $key->terpakai ?></td>
                                             <td><?php echo $key->sisa_cuti ?></td>
              <td><a class="btn btn-info" href="#"><i class="fa fa-pencil"></i></a></td>
                                             </tr>
                                           <?php endforeach; ?>


                                     </tbody>
                                   </table>


                               </div>
                           </div>
                           <!-- END DEFAULT DATATABLE -->
