<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
  <form class="form-horizontal" action="<?php echo site_url('aksi_1/ajucuti')?>" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Pengajuan Cuti</h3>
                                    <ul class="panel-controls">
                                    </ul>
                                </div>
                                <div class="panel-body">

                                <?php if($sisa->num_rows()==0){
                                    echo "Maap Anda Tidak Mempunyai Jatah Cuti Silahkan Ajukan Ke Admin";
                                    }else{?>
                                  <p>Sisa Cuti Anda Adalah <b><?php echo $sisa->row()->sisa_cuti?></b> Berlaku Sampai
                                  <b><?php echo tgl_indo($sisa->row()->akhir_berlaku_cuti)?></b></p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Pilih Masa Cuti</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <select name="periode" class="form-control" required="">
                                                            <option value="">--</option>
                                                            <?php foreach($sisa->result() as $key):?>
   <option value="<?php echo $key->id_jc?>"><?php echo $key->id_jc?></option>

                                                        <?php endforeach;?>

                                                        </select>
                                                    </div>                                            
                                                   
                                                </div>
                                            </div>
                                            
 <input type="hidden" name="id" value="<?php echo $this->session->userdata('nip');?>" placeholder=""> 
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Keterangan</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="ket" required=""></textarea>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Tanggal Awal Cuti</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
           <input type="text" class="form-control datepicker" name="awal">                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Sampai Tanggal</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
   <input type="text" class="form-control datepicker" name="akhir">                                            
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Apakah Anda Yakin</label>
                                                <div class="col-md-9">                                                                                                                                        
   <label class="check"><input type="checkbox" class="icheckbox" required="" /> Ya</label>
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
                            <?php }?>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        