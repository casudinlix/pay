<!-- PAGE CONTENT WRAPPER -->
               <div class="page-content-wrap">

                   <div class="row">
                       <div class="col-md-12">

                           <form class="form-horizontal" action="<?php echo site_url('aksi_1/kasbon')?>" method="post">
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   <h3 class="panel-title"><strong>Form Pengajuan Kasbon</strong> </h3>
                                   <ul class="panel-controls">
                                    </ul>
                               </div>
                               <div class="panel-body">
                               </div>
                               <div class="panel-body">
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>" >
                                   <div class="form-group">
                                       <label class="col-md-3 col-xs-12 control-label">Nomor Transaksi</label>
                                       <div class="col-md-6 col-xs-12">
                                           <div class="input-group">
                                               <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                               <input type="text" class="form-control" name='no' value="<?php echo $tr ?>" readonly=""/>
                                           </div>
                                        </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-md-3 col-xs-12 control-label">Nominal</label>
                                       <div class="col-md-6 col-xs-12">
                                           <div class="input-group">
                                               <span class="input-group-addon"><span class="fa fa-money"></span></span>
                                               <input type="number" class="form-control" name="nominal"/>
                                           </div>
                                        </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-md-3 col-xs-12 control-label">Tanggal</label>
                                       <div class="col-md-6 col-xs-12">
                                           <div class="input-group">
                                               <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                               <input type="text" class="form-control" value="<?php echo date("Y-m-d")?>" name="tgl" readonly="">
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
