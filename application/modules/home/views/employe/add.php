
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal " action="<?php echo site_url('aksi_1/addemploye')?>" method='post'>

                <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Personal Data</a></li>
                        <li><a href="#tab-second" role="tab" data-toggle="tab">Payment Settings</a></li>
                        <li><a href="#tab-third" role="tab" data-toggle="tab">Email Settings & Login</a></li>
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
                                <label class="col-md-3 col-xs-12 control-label">Name</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name='nama' required="" autocomplete="OFF"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Sex</label>
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
                                <label class="col-md-3 col-xs-12 control-label">Merried Status</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="nikah form-control" tabindex="-1" name='nikah' required="">
                                    <option></option>
                                  <?php foreach ($nikah as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Date of birth</label>
                              <div class="col-md-6 col-xs-12">
<input type="text" class="form-control datepicker"  name='ttl' required="" placeholder="YYYY-MM-DD"/>

</div>

                      </div>

                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Religion</label>
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
          <label class="col-md-3 col-xs-12 control-label">Address</label>
                                                <div class="col-md-6 col-xs-12">
<textarea class="form-control" rows="5" name='alamat'></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Phone</label>
                                                <div class="col-md-6 col-xs-12">
                                                  <input type="number" name="phone" class="form-control" required="">
                                                </div>
                                            </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Join Date</label>
                        <div class="col-md-6 col-xs-12">
                      <input type="text" class="form-control datepicker"   name='join' required="" placeholder="YYYY-MM-DD"/>

                      </div>

                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Education</label>
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
                          <label class="col-md-3 col-xs-12 control-label">Id Card Number</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='id' required="" autocomplete="OFF"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Identity Type</label>
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
                          <label class="col-md-3 col-xs-12 control-label">NPWP</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='npwp' required="" autocomplete="OFF"/>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jamsostek</label>
                          <div class="col-md-6 col-xs-12">
                              <input type="number" class="form-control" name='jam' required="" autocomplete="OFF"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 col-xs-12 control-label">Jobdesk</label>
                          <div class="col-md-6 col-xs-12">
                            <select class="job form-control" tabindex="-1" name='job' required="">
                              <option></option>
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
                              <option></option>
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
                                    <option></option>
                                  <?php foreach ($bank as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Account Number</label>
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
                                <label class="col-md-3 col-xs-12 control-label">Password</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="pass" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Role</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="typeemploye form-control" tabindex="-1" name='role' required="">
                                    <option></option>
                                  <?php foreach ($level as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label"> Status</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="nikah form-control" tabindex="-1" name='status' required="">
                                    <option></option>
                                  <?php foreach ($status as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label"> Group Level</label>
                                <div class="col-md-6 col-xs-12">
                                  <select class="nikah form-control" tabindex="-1" name='golongan' required="">
                                    <option></option>
                                  <?php foreach ($golongan as $key): ?>
                                  <option value="<?php echo $key ?>"><?php echo $key ?></option>

                                  <?php endforeach; ?>
                                  </select>
                                  </div>
                            </div>                        </div>
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
