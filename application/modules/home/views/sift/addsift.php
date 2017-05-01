<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home')?>"><i class="fa fa-home"></i>Home</a></li>
  <li class="active"><a href="<?php echo site_url('home/employe')?>"><i class="fa fa-users"></i>Employe</a></li>
  <li class="active"><a href="<?php echo site_url('home/company/1')?>"><i class="fa fa-building-o"></i>Company</a></li>
  <li class="active"><a href="<?php echo site_url('home/settingshift')?>"><i class="fa fa-clock-o"></i>Shift</a></li>

</ul>
<!-- END BREADCRUMB -->

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/addshift')?>" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-3 control-label">Shift Name</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
      <input type="text" name="nama" class="form-control" required="" autocomplete="off"/>
                                                    </div>
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                       <label class="col-md-3 control-label">Time In</label>
                                       <div class="col-md-5">
                                           <div class="input-group bootstrap-timepicker">
                                               <input type="text" class="form-control timepicker24" name='in' required="" autocomplete="off"/>
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-md-3 control-label">Time Out</label>
                                       <div class="col-md-5">
                                           <div class="input-group bootstrap-timepicker">
                                               <input type="text" class="form-control timepicker24" name="out" required="" autocomplete="off"/>
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                           </div>
                                       </div>
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
