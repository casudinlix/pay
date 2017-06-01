
<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/addleave')?>" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong></strong> </h3>
                                    <ul class="panel-controls">
                                    </ul>
                                </div>
                                <div class="panel-body">
                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="col-md-3 control-label">Kode</label>
  <div class="col-md-9">
    <div class="input-group">
   <span class="input-group-addon"><span class="fa fa-book"></span></span>
<input type="text" name="kode" class="form-control" value="<?php echo $kode ?>" readonly="">
                                                                                           </div>
                                                                                      </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
      <input type="text" name="nip" class="form-control  nip" id="name" required="" autocomplete="off"/>
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">NIP</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
<span class="input-group-addon"><span class="fa fa-hand-o-right"></span></span>
  <input type="text" name="nip" id="nip" class="form-control nip" required="" autocomplete="off"/>
                                                    </div>
                                                 </div>
                                            </div>
<div class="form-group">
<label class="col-md-3 control-label">Awal Masa Berlaku Cuti</label>
<div class="col-md-9">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
<input type="text" name="periode" class="form-control datepicker">
  </div>
    </div>
</div>
     <div class="form-group">
 <label class="col-md-3 control-label">Akhir Masa Berlaku</label>
 <div class="col-md-9">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
 <input type="text" name="expired" class="form-control datepicker">
       </div>
     </div>
  </div>
  <div class="form-group">
 <label class="col-md-3 control-label">Terpakai</label>
  <div class="col-md-9">
  <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-money"></span></span>
 <input type="number" name="used" class="form-control" required="" autocomplete="off" value="0"/>
  </div>
 </div>
 </div>
<div class="form-group">
<label class="col-md-3 control-label">Sisa Cuti</label>
 <div class="col-md-9">
 <div class="input-group">
  <span class="input-group-addon"><span class="fa fa-money"></span></span>
<input type="number" name="sisa" class="form-control" required="" autocomplete="off" value="12"/>
    </div>
       </div>
     </div>
         </div>
           </div>
          </div>
                                <div class="panel-footer">
                                     <input type="submit" name="" value="Save" class="btn btn-primary">

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
