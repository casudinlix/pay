

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/editsalary')?>" method="post" enctype="multipart/form-data">
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
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                        <div class="col-md-6">



                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Salary</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
                 <input type="number" name="salary" class="form-control" required="" autocomplete="off" value="<?php echo $sal->nominal ?>"/>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jobs Desk</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user-md"></span></span>
                                                        <select class="form-control"  name="jabatan" required="">
                                                          <option value="<?php echo $sal->jabatan ?>"><?php echo $sal->jabatan ?></option>
                                                          <?php foreach ($jabatan as $key): ?>
                                                            <option value="<?php echo $key ?>"><?php echo $key ?></option>
                                                          <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Group Level</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-group"></span></span>
                                                        <select class="form-control"  name="gol" required="">
                                                          <option value="<?php echo $sal->golongan ?>"><?php echo $sal->golongan ?></option>
                                                          <?php foreach ($gol as $key): ?>
                                                            <option value="<?php echo $key ?>"><?php echo $key ?></option>
                                                          <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
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
