

<div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/editpotongan')?>" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-3 control-label">ID</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
 <input type="text" name="id" class="form-control" required="" autocomplete="off" value="<?php echo $this->uri->segment(3)?>" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jenis</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
<input type="text" name="jenis"  placeholder="" class="form-control" required="" value="<?php echo $all->jenis_potongan?>">
                                                    </div>
                                                 </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nominal</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
<input type="number" name="nom"  value="<?php echo $all->nominal_potongan?>" placeholder="" class="form-control" required="">

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
