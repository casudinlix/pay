
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
                                                <label class="col-md-3 control-label">Task</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
      <input type="text" name="task" class="form-control" required="" autocomplete="off" value="<?php echo $in->tindakan?>"/>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Many</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-hand-o-right"></span></span>
                                          <input type="number" name="many" class="form-control" required="" autocomplete="off" value="<?php echo $in->jml?>"/>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

                                                                                        <div class="form-group">
                                                                                            <label class="col-md-3 control-label">Group Level</label>
                                                                                            <div class="col-md-9">
                                                                                                <div class="input-group">
                                                                                                    <span class="input-group-addon"><span class="fa fa-group"></span></span>
<select class="form-control" name="gol">
  <option value="<?php echo $in->golongan?>"><?php echo $in->golongan?></option>
  <?php foreach ($gol as $key): ?>
    <option value="<?php echo $key ?>"><?php echo $key ?></option>
  <?php endforeach; ?>
</select>                                                                                                </div>
                                                                                                <span class="help-block">This is sample of text field</span>
                                                                                            </div>
                                                                                        </div>

                                                                                                                                    <div class="form-group">
                                                                                                                                      <div class="form-group">
                                                                                                                                          <label class="col-md-3 control-label">Jobs Office</label>
                                                                                                                                          <div class="col-md-9">
                                                                                                                                              <div class="input-group">
                                                                                                                                                  <span class="input-group-addon"><span class="fa fa-money"></span></span>
                                                                                                                        <select class="form-control" name="jabatan">
                                                                                                                        <option value="<?php echo $in->jabatan?>"><?php echo $in->jabatan?></option>
                                                                                                                        <?php foreach ($jabatan as $key): ?>
                                                                                                                        <option value="<?php echo $key ?>"><?php echo $key ?></option>
                                                                                                                        <?php endforeach; ?>
                                                                                                                        </select>                                                                                                </div>
                                                                                                                                              <span class="help-block">This is sample of text field</span>
                                                                                                                                          </div>
                                                                                                                                      </div>
                                                                                                                                  <label class="col-md-3 control-label">Nominal</label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <div class="input-group">
                                                                                                                                                <span class="input-group-addon"><span class="fa fa-money"></span></span>
                                                                                                                                  <input value="<?php echo $in->nominal?>" type="number" name="nominal" class="form-control" required="" autocomplete="off"/>
                                                                                                                                            </div>
                                                                                                                                            <span class="help-block">This is sample of text field</span>
                                                                                                                                        </div>
                                                                                                                                    </div>

<input type="hidden" name="id" value="<?php echo $in->id?>">










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
