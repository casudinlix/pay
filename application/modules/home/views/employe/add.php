
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal " action="<?php echo site_url('aksi_1/addemploye')?>" method='post'>

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
                                    <input type="text" class="form-control" name='nip' autocomplete="OFF" readonly="" value="<?php echo $nip ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name='nama' required="" autocomplete="OFF"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="sex form-control" tabindex="-1" name='sex' required="">
                                    <option></option>
                                  <?php foreach ($sex as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                  </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                              <div class="col-md-6 col-xs-12">
<input type="text" class="form-control datepicker"  name='ttl' required="" placeholder="YYYY-MM-DD"/>

</div>

                      </div>

                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Agama</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="select2_single form-control" tabindex="-1" name='agama' required="">
                              <option></option>
                            <?php foreach ($agama as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                          </select>
                          </div>
                      </div>
                      <div class="form-group">
          <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                                <div class="col-md-6 col-xs-12">
<textarea class="form-control" rows="5" name='alamat'></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Telphone</label>
                                                <div class="col-md-6 col-xs-12">
                                                  <input type="number" name="phone" class="form-control" required="">
                                                </div>
                                            </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Tanggal Bergabung</label>
                        <div class="col-md-6 col-xs-12">
                      <input type="text" class="form-control datepicker"   name='join' required="" placeholder="YYYY-MM-DD"/>

                      </div>

                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Pendidikan</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="edu form-control" tabindex="-1" name='edu' required="">
                              <option></option>
                            <?php foreach ($pendidikan as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                           </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Nomor Identitas</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='id' required="" autocomplete="OFF"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Type Identitas</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="idtype form-control" tabindex="-1" name='idtype' required="">
                              <option></option>
                            <?php foreach ($id as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                     
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="job form-control" tabindex="-1" name='job' required="">
                              <option></option>
                            <?php foreach ($job as $key): ?>
                            <option value="<?php echo $key->id_jabatan ?>"><?php echo $key->id_jabatan?> - <?php echo $key->nama_jabatan ?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Golongan</label>
                          <div class="col-md-6 col-xs-12">
                              <select name="golongan" class="form form-control" required="">
                                <option value="">--</option>
                                 <option value="A">A</option>
                                  <option value="B">B</option>
                                   <option value="C">C</option>
                                    
                              </select>
                          </div>
                      </div>
                    </div>
                        <div class="tab-pane" id="tab-second">

                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Bank</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="bank form-control" tabindex="-1" name='bank' required="">
                                    <option></option>
                                  <?php foreach ($bank as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Nomor Rekening</label>
                                <div class="col-md-6 col-xs-12">
                                  <input type="number" name="account" class="form-control" required="">
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
                                    <input type="email" class="form-control" name='email' required=""/>
                                </div>
                            </div>

                           
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label"> Status</label>
                                <div class="col-md-6 col-xs-12">
                                  <select name="status" class="form-control" required="">
                                <option value="">--</option>
                                    <option value="AKTIF">AKTIF</option>
                                    <option value="TIDAK AKTIF">TIDAK AKTIF</option>}
                                    </select>
                                  </div>
                            </div>
                           
                                                </div>
                    </div>
                  </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
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
