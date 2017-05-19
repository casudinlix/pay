  
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo site_url('aksi_1/hitunggaji') ?>" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Hitung </strong> Gaji</h3>
                                    <ul class="panel-controls">
                                       
                                    </ul>
                                </div>
                                <div class="panel-body">
                                   
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">ID Gaji</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-lock"></span></span>
  <input type="text" class="form-control" name="code" value="<?php echo $idgaji?>" readonly/>
                                                    </div>                                            
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Insentif</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
  <select name="in" class="insentif form-control"  required="">
      <option></option>
      <?php foreach($insentif as $key):?>
      
<option value="<?php echo $key->id_insentif?>"><?php echo $key->id_insentif." - ".$key->jenis_insentif."(".$key->gol_jabatan.")"?></option>

      <?php endforeach;?>
  </select>

                                                    </div>                                            
                                                   
                                                </div>
                                            </div>
                                            
                                                                                                                                                                                                               
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
<input type="hidden" class="form-control" name="nip" value="<?php echo $this->uri->segment(3)?>" placeholder="">
<input type="hidden" class="form-control" name="gol" value="<?php echo $this->uri->segment(4)?>" placeholder="">

                                            <div class="form-group">                                        
                                                 <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
  
                                                    </div>            
                                                     
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group">                                        
                                                 <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
 <?php 
     echo $all->nama_lengkap;
 ?>
                                                    </div>            
                                                     
                                                </div>
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
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Data</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>ID Gaji</th>
                                                    <th width="100">NIP</th>
                                                    <th width="100">ID INSENTIF</th>
                                                    <th width="100">date</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->                                           
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
               