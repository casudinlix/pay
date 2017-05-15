  
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal">
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
                                                <label class="col-md-3 control-label">Tanggal Gaji</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-calendar-o"></span></span>
      <input type="text" name="tgl" placeholder="Tanggal Gaji" required="" class="form-control datepicker">

                                                    </div>            
                                                     
                                                </div>
                                            </div>
                                            
    <div class="form-group">                                        
                                                <label class="col-md-3 control-label">NIP</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-user-md"></span></span>
<input type="text" name="nip" id="cari" placeholder="NIP" required="" class="form-control cari">

                                                    </div>            
                                                     
                                                </div>
                                            </div>
 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-user"></span></span>
<input type="text" name="nama" id="nama_lengkap" placeholder="" required="" class="form-control cari" readonly="">

                                                    </div>            
                                                     
                                                </div>
                                            </div>                                                                                 
 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Jabatan</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-check-square-o"></span></span>
<input type="text" name="jabatan" id="nama_jabatan" placeholder="" required="" class="form-control cari" readonly="">
                                                    </div>            
                                                     
                                                </div>
                                            </div>                                            
 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Golongan</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-users"></span></span>
<input type="text" name="gol" id="gol_jabatan" placeholder="" required="" class="form-control cari" readonly="">

                                                    </div>            
                                                     
                                                </div>
                                            </div> 
 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Gaji Pokok</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-money"></span></span>
<input type="text" name="nom" id="nominal" placeholder="" required="" class="form-control cari" readonly="">

                                                    </div>            
                                                     
                                                </div>
                                            </div> 
 
    <div class="form-group">                                        
     <label class="col-md-3 control-label">Total Hari Kerja</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
<input type="number" name="hr"  placeholder="" required="" class="form-control">

                                                    </div>            
                                                     
                                                </div>
                                            </div>                                                                                                                                                                              
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            
                                            <div class="form-group">                                        
     <label class="col-md-3 control-label">Total Potongan</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
<input type="number" name="potongan"  placeholder="" required="" class="form-control">

                                                    </div>            
                                                     
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group">                                        
     <label class="col-md-3 control-label">Total Insentif</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
             <span class="input-group-addon"><span class="fa fa-money"></span></span>
<input type="number" name="insentif"  placeholder="" required="" class="form-control">

                                                    </div>            
                                                     
                                                </div>
                                            </div>        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Select</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Select box example</span>
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
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
               