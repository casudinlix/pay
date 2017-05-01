<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home')?>"><i class="fa fa-home"></i>Home</a></li>
  <li class="active"><a href="<?php echo site_url('home/employe')?>"><i class="fa fa-users"></i>Employe</a></li>
  <li class="active"><a href="<?php echo site_url('home/company/1')?>"><i class="fa fa-building-o"></i>Company</a></li>

</ul>
<!-- END BREADCRUMB -->

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/company')?>" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Company Profile</strong> </h3>
                                    <ul class="panel-controls">
                                    </ul>
                                </div>
                                <div class="panel-body">
                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">App Name</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="title" class="form-control" required="" autocomplete="off" value="<?php echo $com->title ?>"/>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>" >


                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <textarea class="form-control" rows="5" name="des"><?php echo $com->desc ?></textarea>
                                                    <span class="help-block">Default textarea field</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Logo</label>
                                                <div class="col-md-9">
                                                  <img src="<?php echo logo($com->logo)?>" alt="" height="90" width="90">
                                                    <input type="file" class="fileinput btn-primary" name="logo" id="filename" title="Browse file"/>
                                                    <span class="help-block">Input type file</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                          <div class="form-group">
                                              <label class="col-md-3 control-label">Address</label>
                                              <div class="col-md-9 col-xs-12">
                                                  <textarea class="form-control" rows="5" name="alamat"><?php echo $com->address ?></textarea>
                                                  <span class="help-block">Default textarea field</span>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-md-3 control-label">Phone</label>
                                              <div class="col-md-9">
                                                  <div class="input-group">
                                                      <span class="input-group-addon"><span class="fa fa-phone"></span></span>
             <input type="text" name="tlp" class="form-control" required="" autocomplete="off" value="<?php echo $com->phone ?>"/>
                                                  </div>
                                                  <span class="help-block">This is sample of text field</span>
                                              </div>
                                          </div>







                                        </div>

                                    </div>

                                </div>
                                <div class="panel-footer">
                                     <input type="submit" name="" value="Save" class="btn btn-primary pull-right">

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
