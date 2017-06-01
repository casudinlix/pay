
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal " action=" " method='post'>

                <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Data Pribadi</a></li>
                        <li><a href="#tab-second" role="tab" data-toggle="tab">Pengaturan Pembayaran</a></li>
                        <li><a href="#tab-third" role="tab" data-toggle="tab">Email Settings</a></li>
                    </ul>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label"> Nip</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name='nip' autocomplete="OFF" readonly="" value="<?php echo $this->uri->segment(3) ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                                <div class="col-md-6 col-xs-12">
      <input type="text" class="form-control" name='nama' required="" autocomplete="OFF" value="<?php echo $user->nama_lengkap?>" readonly=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class=" form-control" tabindex="-1" name='sex' readonly="">
                                    <option readonly=""><?php echo $user->jk?></option>
                                  
                                  </select>
                                  </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                              <div class="col-md-6 col-xs-12">
<input type="text" class="form-control "  name='ttl' required="" value="<?php echo $user->tgl_lahir?>" readonly=""/>

</div>

                      </div>

                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Agama</label>
                          <div class="col-md-6 col-xs-12">
                            <select class=" form-control" tabindex="-1" name='agama' readonly="">
                              <option><?php echo $user->agama?></option>
                             
                          </select>
                          </div>
                      </div>
                      <div class="form-group">
          <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                                <div class="col-md-6 col-xs-12">
<textarea class="form-control" rows="5" name='alamat' readonly=""><?php echo $user->alm_tinggal?></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Telphone</label>
                                                <div class="col-md-6 col-xs-12">
 <input type="number" name="phone" class="form-control" required="" value="<?php echo $user->no_hp?>" readonly="">
                                                </div>
                                            </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Tanggal Bergabung</label>
                        <div class="col-md-6 col-xs-12">
<input type="text" class="form-control  "  readonly="" name='join' required="" value="<?php echo $user->tgl_bergabung?>"/>

                      </div>

                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Pendidikan</label>
                          <div class="col-md-6 col-xs-12">
                            <select class=" form-control" tabindex="-1" name='edu' readonly="">
                              <option><?php echo $user->pendidikan?></option>
                           
                            </select>
                           </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Nomor Identitas</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='id' value="<?php echo $user->no_id?>" autocomplete="OFF" readonly=""/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Type Identitas</label>
                          <div class="col-md-6 col-xs-12">
                            <select class=" form-control" tabindex="-1" name='idtype' readonly="">
                              <option><?php echo $user->jenis_id?></option>
                            
                            </select>
                          </div>
                      </div>
                     
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                          <div class="col-md-6 col-xs-12">
                            <select class=" form-control" tabindex="-1" name='job' readonly="">
                              <option value=""><?php echo $user->nama_jabatan?></option>
                            
                           
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Golongan</label>
                          <div class="col-md-6 col-xs-12">
                              <select name="golongan" class="form form-control" readonly="">
                                <option><?php echo $user->gol_jabatan?></option>
                                  
                                    
                              </select>
                          </div>
                      </div>
                    </div>
                        <div class="tab-pane" id="tab-second">

                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Bank</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class=" form-control" tabindex="-1" name='bank' readonly="">
                                    <option><?php echo $user->bank?></option>
                                   
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Nomor Rekening</label>
                                <div class="col-md-6 col-xs-12">
   <input type="number" name="account" class="form-control" value="<?php echo $user->no_rek?>" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2"></div>
                              </div>

                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label"></label>
                                <div class="col-md-6 col-xs-12">
                                    </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tab-third">

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                <div class="col-md-6 col-xs-12">
  <input type="email" class="form-control" name='email' value="<?php echo $user->email?>" readonly=""/>
                                </div>
                            </div>

                           
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label"> Status</label>
                                <div class="col-md-6 col-xs-12">
                                  <select name="status" class="form-control" required="" readonly="">
                                <option><?php echo $user->status?></option>
                                     
                                    </select>
                                  </div>
                            </div>
                           
                                                </div>
                    </div>
                  </div>
                     
                </div>

            </form>


        </div>
    </div>
</div>

    </form>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
