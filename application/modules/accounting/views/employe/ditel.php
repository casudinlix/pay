 

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal " action="<?php echo site_url('aksi_1/editemploye')?>" method='post'>

                <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Personal Data</a></li>
                        <li><a href="#tab-second" role="tab" data-toggle="tab">Payment Settings</a></li>
                        <li><a href="#tab-third" role="tab" data-toggle="tab">Email Settings / Login</a></li>
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
                                <label class="col-md-3 col-xs-12 control-label">Name</label>
                                <div class="col-md-6 col-xs-12">
                  <input type="text" class="form-control" name='nama' required="" autocomplete="OFF" value="<?php echo $user->name ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Sex</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="sex form-control" tabindex="-1" name='sex' required="" autocomplete="OFF">
                                    <option><?php echo $profil->sex ?></option>
                                  <?php foreach ($sex as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Date of birth</label>
                              <div class="col-md-6 col-xs-12">
<input type="text" class="form-control datepicker"  name='ttl' required="" placeholder="YYYY-MM-DD" autocomplete="OFF" value="<?php echo $profil->ttl ?>"/>

</div>

                      </div>

                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Religion</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="select2_single form-control" tabindex="-1" name='agama' required="">
                              <option><?php echo $profil->religion ?></option>
                            <?php foreach ($agama as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                          </select>
                          </div>
                      </div>
                      <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Address</label>
                                                <div class="col-md-6 col-xs-12">
<textarea class="form-control" rows="5" name='alamat'><?php echo $profil->address?></textarea>

                                                </div>
                                            </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Join Date</label>
                        <div class="col-md-6 col-xs-12">
                      <input type="text" class="form-control datepicker"   name='join' required="" placeholder="YYYY-MM-DD" autocomplete="OFF" value="<?php echo $profil->joindate ?>"/>

                      </div>

                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Education</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="edu form-control" tabindex="-1" name='edu' required="">
                              <option><?php echo $profil->education?></option>
                            <?php foreach ($pendidikan as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                           </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Id Card Number</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='id' required="" autocomplete="OFF" value="<?php echo $profil->id_number?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Identity Type</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="idtype form-control" tabindex="-1" name='idtype' required="">
                              <option><?php echo $profil->type_id?></option>
                            <?php foreach ($id as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">NPWP</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='npwp' required="" autocomplete="OFF" value="<?php echo $profil->npwp?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jamsostek</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='jam' required="" autocomplete="OFF" value="<?php echo $profil->jamsostek?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="job form-control" tabindex="-1" name='job' required="">
                              <option><?php echo $profil->jabatan?></option>
                            <?php foreach ($job as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Type Emloye</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="typeemploye form-control" tabindex="-1" name='typeemploye' required="">
                              <option><?php echo $profil->type_employe?></option>
                            <?php foreach ($type as $key): ?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                    </div>
                        <div class="tab-pane" id="tab-second">

                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Bank</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="bank form-control" tabindex="-1" name='bank' required="">
                                    <option><?php echo $profil->bank?></option>
                                  <?php foreach ($bank as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Account Number</label>
                                <div class="col-md-6 col-xs-12">
                                  <input type="number" name="account" class="form-control" required="" autocomplete="off" value="<?php echo $profil->account_number?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Phone</label>
                                <div class="col-md-6 col-xs-12">
                                  <input type="number" name="phone" class="form-control" required="" autocomplete="off" value="<?php echo $profil->phone?>">
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
                                    <input type="email" class="form-control" name='email' required="" autocomplete="off" value="<?php echo $profil->email?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Password</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="pass" required="" value="<?php echo base64_decode($pass->pass)?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Role</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="typeemploye form-control" tabindex="-1" name='role' required="">
                                    <option><?php echo $pass->level?></option>
                                  <?php foreach ($level as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" >
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                    </div>
                </div>

            </form>


        </div>
    </div>


    </form>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
