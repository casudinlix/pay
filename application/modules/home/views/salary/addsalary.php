

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/addsalary')?>" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-3 control-label">Gaji</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
                                          <input type="number" name="salary" class="form-control" required="" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jabatan</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <select class="form-control"  name="jabatan" required="">
                                                          <option value="">--</option>
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
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <select class="form-control"  name="gol" required="">
                                                          <option value="">--</option>
                                                          <option value="A">A</option>
                                                          <option value="B">B</option>
                                                          <option value="C">C</option>
                                                        </select>
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
