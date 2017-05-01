<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title><?php echo $com->title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo img()?>rk.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo tema()?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
          <link href="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.css" rel="stylesheet">
    </head>
    <body>

        <div class="login-container">

            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="<?php echo site_url('login/cek')?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name='nip' class="form-control" placeholder="Nip" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="pass" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 <?php echo $com->title ?>
                    </div>

                </div>
            </div>

        </div>
<script src="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('error')): ?>c
  <script>swal(
    {title: "Not Allowed!", text: "Login Required", timer: 3000, type: "error", showConfirmButton: false }
  )</script>
<?php endif; ?>

<?php if ($this->session->flashdata('gagal')): ?>
<script>swal(
  {title: "Please Try Again!", text: "Please Try Again", timer: 3000, type: "error", showConfirmButton: false }
)</script>
<?php endif; ?>
    </body>
</html>

