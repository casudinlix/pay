<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo site_url('home')?>"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="<?php echo site_url('home/employe')?>"><i class="fa fa-users"></i>Employe</a></li>

</ul>
<!-- END BREADCRUMB -->


<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-users"></span> Address Book <small><?php echo $this->session->userdata('login')."".$this->session->userdata('level')?></small></h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Use search to find contacts. You can search by: name, address, phone. Or use the advanced search.
<?php echo var_dump($this->session->all_userdata())?>
 
                    </p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Who are you looking for?"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Add new contact</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <!-- CONTACT ITEM -->
            <div class="panel panel-default">
                <div class="panel-body profile">
                    <div class="profile-image">
                        <img src="assets/images/users/user3.jpg" alt="Nadia Ali"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">Nadia Ali</div>
                        <div class="profile-data-title">Singer-Songwriter</div>
                    </div>
                    <div class="profile-controls">
                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="contact-info">
                        <p><small>Mobile</small><br/>(555) 555-55-55</p>
                        <p><small>Email</small><br/>nadiaali@domain.com</p>
                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>
                    </div>
                </div>
            </div>
            <!-- END CONTACT ITEM -->
        </div>
