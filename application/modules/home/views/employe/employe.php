

<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-users"></span> List Employe <small><?php echo $jumlah ?> Employe</small></h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Use search to find Employee. You can search by: name,  Or NIP .</p>
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name='search' class="form-control" placeholder="Who are you looking for?"/>
                                    <div class="input-group-btn">
                                        <input type="submit" name="" value="Search" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                              <a href="<?php echo site_url('home/addemploye')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Add new Employe</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="row">

      <?php foreach ($data as $key): ?>
        <div class="col-md-3">
            <!-- CONTACT ITEM -->

              <div class="panel panel-default">
                  <div class="panel-body profile">
                      <div class="profile-image">
  <a  data-toggle="modal" data-target="#detail"  data-nip="<?php echo $key->nip?>" data-jabatan="<?php echo $key->jabatan?>"
  data-name="<?php echo $key->name?>" data-phone="<?php echo $key->phone?>" data-address="<?php echo $key->address?>" data-email="<?php echo $key->email?>"
  data-level="<?php echo $key->level?>" data-golongan="<?php echo $key->golongan?>"


                          title="Detail" > <img src="<?php echo employe($key->photo)?>" alt="<?php echo $key->photo?>"/></a>
                      </div>
                      <div class="profile-data">

                          <div class="profile-data-name"><?php echo $key->name ?></div>
                          <div class="profile-data-title"><?php echo $key->nip; ?></div>
                          <div class="profile-data-title"><?php echo $key->jabatan; ?></div>

                      </div>
                      <div class="profile-controls">
                          <a href="<?php echo site_url('home/photo/'.$key->nip)?>" class="profile-control-left"><span class="fa fa-image"></span></a>
                          <a href="<?php echo site_url('home/editemploye/'.$key->nip)?>" class="profile-control-right"><span class="fa fa-edit"></span></a>
                      </div>
                  </div>
                  <div class="panel-body">
                      <div class="contact-info">
                          <p><small>Mobile</small><br/><?php echo $key->phone ?></p>
                          <p><small>*Email*</small><br/><?php echo $key->email ?></p>
                          <p><small>Address</small><br/><?php echo $key->address ?></p>
                            <p><small>Group Level</small><br/><?php echo $key->golongan ?></p>
                      </div>
                  </div>
              </div>
              <!-- END CONTACT ITEM -->
          </div>

            <?php endforeach; ?>
            <div class="row">
      <div class="col-md-12">

                    <?php echo $this->pagination->create_links() ?>

                                    </div>
                                </div>
