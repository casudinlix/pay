
<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/editinsentif')?>" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-3 control-label">ID Insentif</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
      <input type="text" name="code" class="form-control" required="" value="<?php echo $this->uri->segment(3);?>" readonly=""/>
                                                    </div>
                                                 </div>
                                            </div>
<div class="form-group">
                                                <label class="col-md-3 control-label">Nominal Insentif</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
      <input type="number" name="nominal" class="form-control" required="" value="<?php echo $in->nominal_insentif;?>" />
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jenis Insentif</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-hand-o-right"></span></span>
 <input type="text" name="jenis" class="form-control" required="" autocomplete="off" value="<?php echo $in->jenis_insentif;?>"/>
                                                    </div>
                                                 </div>
                                            </div>
 <div class="form-group">
                                                <label class="col-md-3 control-label">Jumlah Insentif</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-hand-o-right"></span></span>
<input type="text" name="jml" class="form-control" required="" autocomplete="off" value="1"/>
                                                    </div>
                                                 </div>
                                            </div>

    <div class="form-group">
          <label class="col-md-3 control-label">Jabatan</label>
   <div class="col-md-9">
     <div class="input-group">
     <span class="input-group-addon"><span class="fa fa-group"></span></span>
<select class="form-control" name="jabatan">
  <option value="<?php echo $in->id_jabatan;?>"><?php echo $in->id_jabatan."-".$in1->nama_jabatan;?></option>
  <?php foreach ($jabatan as $key): ?>
    <option value="<?php echo $key->id_jabatan ?>"><?php echo $key->id_jabatan."-".$key->nama_jabatan ?></option>
  <?php endforeach; ?>
</select> 
             </div>


</div>
</div>
<div class="form-group">
          <label class="col-md-3 control-label">Golongan</label>
   <div class="col-md-9">
     <div class="input-group">
     <span class="input-group-addon"><span class="fa fa-group"></span></span>
<select class="form-control" name="gol">
  <option value="<?php echo $in->gol_jabatan?>"><?php echo $in->gol_jabatan?></option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  
</select> 
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
