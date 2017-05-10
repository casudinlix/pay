

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/edituser')?>" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-3 control-label">NIP</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
    <input type="teks" name="code" class="form-control" readonly="" value="<?php echo $this->uri->segment(3)?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
     <input type="text" name="nama"  value="<?php echo $user->nama_lengkap?>" required="" class="form-control">
                                                    </div>
                                                 </div>
                                            </div>

<div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-lock"></span></span>
      <input type="password" name="pass" required="" class="form-control" value="<?php echo base64_decode( $user->pass) ?>">
                                                    </div>
                                                 </div>
                                            </div>

<div class="form-group">
                                                <label class="col-md-3 control-label">Hak Akses</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <select name="hak" class="form-control">
                                                            <option value="<?php echo $user->hak_akses?>"><?php echo $user->hak_akses?></option>
                                                            <option value="ADMIN">ADMIN</option>
                                                            <option value="HRD">HRD</option>
                                                            <option value="ACOUNTING">ACCOUNTING</option>
                                                            <option value="KARYAWAN">KARYAWAN</option>
                                                            
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
