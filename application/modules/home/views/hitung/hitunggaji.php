  
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
<div class="form-group">                                        
  <label class="col-md-3 control-label">Nama Lengkap</label>
 <div class="col-md-9 col-xs-12">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-user"></span></span>
 <input type="text" class="form-control" name="" value="<?php echo $all->nama_lengkap?>" readonly="" />
 </div>            
 
  </div>
  </div>
  <div class="form-group">                                        
  <label class="col-md-3 control-label">Jabatan</label>
 <div class="col-md-9 col-xs-12">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-building-o"></span></span>
 <input type="text" class="form-control" name="" value="<?php echo $all->nama_jabatan?>" readonly=""/>
 </div>            
 
  </div>
  </div>
  <div class="form-group">                                        
  <label class="col-md-3 control-label">Golongan</label>
 <div class="col-md-9 col-xs-12">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-users"></span></span>
 <input type="text" class="form-control" name="" value="<?php echo $all->gol_jabatan?>" readonly=""/>
 </div>            
 
  </div>
  </div>
  <div class="form-group">                                        
  <label class="col-md-3 control-label">Gaji Pokok</label>
 <div class="col-md-9 col-xs-12">
 <div class="input-group">
 <span class="input-group-addon"><span class="fa fa-money"></span></span>
 <input type="text" class="form-control" name="" value="Rp. <?php echo number_format($all->gapok)?>" readonly=""/>
 </div>            
 
  </div>
  </div>
                                                </div>
                                            </div>        
                                            
                                            <div class="panel-footer">
                                                                     
     <input type="submit" class="btn btn-primary pull-right" value="Tambah" name="tambah">
                                </div> 
                                        </div>
                                        
                                    </div>

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
                                                   
                                                    
                                                    <th width="100">Nama Insentif</th>
                                                    <th width="100">Nominal</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                              <?php if($cekgaji==NULL):?>
                                              Kosong
                                              <?php endif; ?>  
                                              <?php foreach($cekgaji as $key):?>
                                                <?php  $data=$key->id_gaji."/".$key->id_insentif?>
<td colspan="" rowspan="" headers=""><?php echo $key->jenis_insentif?></td> 
<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->nominal_insentif)?></td> 
<td colspan="" rowspan="" headers=""><a  href="#" onclick="hapusinsentif('<?php echo $data ?>')">xxx</a></td>                                                   
                                                </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->     

 
  <form class="form-horizontal" action="<?php echo site_url('aksi_1/hitunggaji') ?>" method="post">
                            <div class="panel panel-default">
                                 
                                 
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

 
           
 
                                                </div>
                                            </div>        
                                            
                                            <div class="panel-footer">
                                                                     
                                    <input type="submit" class="btn btn-primary pull-right" value="Posting" name="posting">
                                </div> 
                                        </div>
                                        
                                    </div>

                            

                         </form>        
                     <!-- Akhir Form -->        
                        
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

               
                
                  
                          