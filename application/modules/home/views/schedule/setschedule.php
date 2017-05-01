<!-- START CONTENT FRAME -->
               <div class="content-frame">
                   <!-- START CONTENT FRAME TOP -->
                   <div class="content-frame-top">
                       <div class="page-title">
                           <h2><span class="fa fa-calendar"></span> Set schedule <?php echo $user->name ."<i class='fa fa fa-angle-right'></i>".$user->nip?></h2><small></small>
                       </div>
                       <div class="pull-right">
                           <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                       </div>
                   </div>
                   <!-- END CONTENT FRAME TOP -->

                   <!-- START CONTENT FRAME LEFT -->
                   <form action="<?php echo site_url('aksi_1/setjadwal')?>" method="post">
<?php// echo length(date('m-Y'),3) ?>
                   <div class="content-frame-left">
                       <h4>Date</h4>
                       <div class="form-group">
                           <div class="input-group">
                                 <input type="text" class="form-control datepicker" autocomplete="off" name="date" required="">
                               <div class="input-group-btn">

                               </div>
                           </div>
                       </div>
                       <h4>Shift</h4>
     <div class="form-group">
       <input type="text" class='autocomplete form-control' id="autocomplete" name="shift" required="" /></td>
                   <input type="text" class='autocomplete form-control' id="jamin" name="in" required="" readonly=""/>
                  <input type="text" class='autocomplete form-control' id="jamout" name="out" required="" readonly=""/>
     </div>
     <input type="hidden" name="nama" value="<?php echo $user->name?>">
     <input type="hidden" name="nip" value="<?php echo $user->nip?>">
     <input type="submit"  class="btn btn-success" value="Save">
     <a href="<?php echo site_url('home/createschedule')?>"><button type="button" name="button" class="btn btn-info">Finish</button></a>
</form>
                       <h4>Tips <i class="fa fa-info-circle"></i></h4>
                       <div class="list-group border-bottom" id="external-events">
                           <?php foreach ($shift as $key): ?>
<a class="list-group-item external-event"><?php echo "<span class='label label-info'>". $key->sift_name."</span><br/>".$key->jam_in."-".$key->jam_out?></a>

                           <?php endforeach; ?>
                             </div>

                       <div class="push-up-10">
                           <label class="check">
                           </label>
                       </div>

                     
                   </div>
                   <!-- END CONTENT FRAME LEFT -->

                   <!-- START CONTENT FRAME BODY -->
                   <div class="content-frame-body padding-bottom-0">
                     <div class="table-responsive">
   <table class="table table-bordered  datatable">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="50">No</th>
                                                                          <th width="100">NIP</th>
                                                                            <th width="100">Name</th>
                                                                        <th width="100">SHIFT</th>
                                                                        <th width="100">Aktual In</th>
                                                                        <th width="100">Aktual Out</th>
                                                                        <th width="100">Aktual Date</th>
                                                                        <th width="100">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr id="trow_1">
                                                                        <?php
$no=1;
                                                                         foreach ($jadwal as $key): ?>
                                                                          <td><?php echo $no ?></td>
                                                                          <td><?php echo $key->nip ?></td>
                                                                          <td><?php echo $key->name ?></td>
                                                                          <td><?php echo $key->shift ?></td>
                                                                          <td><?php echo $key->aktual_in ?></td>
                                                                          <td><?php echo $key->aktual_out ?></td>
                                                                          <td><?php echo tgl_indo($key->aktual_date) ?></td>
                                                                          <td>
                                                                              <button class="btn btn-danger btn-rounded btn-sm" onClick="jadwal(<?php echo $key->id?>);"><span class="fa fa-times"></span></button>
                                                                          </td>
                                                                          </tr>
                                                                        <?php $no++;
                                                                      endforeach; ?>






                                                                </tbody>
                                                            </table>
                                                        </div>
             </div>
                   <!-- END CONTENT FRAME BODY -->

               </div>
               <!-- END CONTENT FRAME -->

           </div>
           <!-- END PAGE CONTENT -->
       </div>
       <!-- END PAGE CONTAINER -->
