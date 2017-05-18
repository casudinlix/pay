<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title><?php echo $com->title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo img()?>rk.png" type="image/x-icon" />
        <!-- END META SECTION -->
        <link href="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.css" rel="stylesheet">
          <link href="<?php echo tema();?>css/dropzone/dropzone.css" rel="stylesheet">

<link href="<?php echo tema();?>select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo tema();?>date/daterangepicker.css" rel="stylesheet">



<style type="text/css">

body{
	background-color: #E8E9EC;
}

.dropzone {
	margin-top: 100px;
	border: 2px dashed #0087F7;
}

</style>
<link rel="stylesheet" href="<?php echo tema()?>css/eventCalendar.css">
        <link rel="stylesheet" href="<?php echo tema()?>css/eventCalendar_theme_responsive.css">
        <!-- CSS INCLUDE -->
             <link rel="stylesheet" href="<?php echo tema()?>date/jquery.dataTables.yadcf.css">

        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo tema()?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo tema();?>js/jquery.autocomplete.css' rel='stylesheet' />


    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="<?php echo base_url()?>">Dashboard</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs fa-spin"></span> <span class="xn-text">Data Master</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="<?php echo site_url('home/employe')?>"><span class="fa fa-users"></span> Karyawan</a></li>
                                                        <li class="xn-openable">
                                                            <a href="#"><span class="fa fa-money"></span> Accounting</a>
                                                            <ul>
                                                              <li><a href="<?php echo site_url('home/salary')?>"><span class="fa fa-money"></span> Gaji</a></li>

                                                                <li><a href="<?php echo site_url('home/insentif')?>"><span class="fa fa-dollar"></span>Insentif</a></li>

                                                             </ul>
                                                        </li>
                            <li><a href="<?php echo site_url('home/company/1')?>"><span class="fa fa-building-o"></span> Edit Info Company</a></li>
                             <li><a href="<?php echo site_url('home/jabatan')?>"><span class="fa fa-group"></span> Jabatan</a></li>
                              <li><a href="<?php echo site_url('home/user')?>"><span class="fa fa-user"></span> User Pengguna</a></li>






                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> <span class="xn-text">Management Waktu</span></a>
                        <ul class="animated zoomIn">
                          <li class="xn-openable">
                              <a href="#"><span class="fa fa-clock-o"></span> Absensi & Cuti</a>

                              <ul>
                                  <li><a href="<?php echo site_url('home/attendance') ?>"><span class="glyphicon glyphicon-dashboard"></span> Absensi & Lembur</a></li>
                                  <li><a href="<?php echo site_url('home/listleave') ?>"><span class="glyphicon glyphicon-new-window"></span>Input Cuti</a></li>

                              </ul>
                             
                          </li>
                            
<li> <a href="<?php echo site_url('home/approvecuti')?>"><span class="fa fa-calendar-o"></span> Pengajuan Cuti</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-dollar"></span> <span class="xn-text">Accounting Management</span></a>
                        <ul class="animated zoomIn">
                          <li class="">
                              <a href="<?php echo site_url('home/listkasbon')?>"><span class="fa fa-money"></span> Kasbon</a>


                          </li>
<li><a href="<?php echo site_url('home/hitung')?>"><span class="glyphicon glyphicon-usd"></span>Hitung Gaji Karyawan</a></li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-calendar"></span> <span class="xn-text">Ijin & Absen</span></a>
                        <ul class="animated zoomIn">
                            <li>
                                <a href="<?php echo site_url('home/absen/'.$this->session->userdata('nip'))?>"><span class="fa fa-clock-o"></span> Absensi Saya</a>
<a href="<?php echo site_url('home/leave/'.$this->session->userdata('nip')) ?>"><span class="fa fa-calendar-o"></span>Cuti / Ijin</a>

                            </li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Transaksi</span></a>
                        <ul class="animated zoomIn">


                            
                            <li><a href="<?php echo site_url('home/kasbon/'.$this->session->userdata('nip'))?>"><span class="fa fa-archive"></span>Kasbon</a></li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-o"></span> <span class="xn-text">Laporan</span></a>
                        <ul class="animated zoomIn">


                            <li><a href="<?php echo site_url('home/lapkaryawan')?>"><span class="fa fa-archive"></span>Data Karyawan</a></li>
                            <li><a href="<?php echo site_url('home/hitung')?>"><span class="fa fa-money"></span>E-salary Slip</a></li>
                            <li><a href="<?php echo site_url('home/lapkasbon')?>"><span class="fa fa-book"></span>Kasbon</a></li>
                            <li><a href="<?php echo site_url('home/lappengguna')?>"><span class="fa fa-users"></span>Pengguna</a></li>
                            <li><a href="<?php echo site_url('home/hitung')?>"><span class="fa fa-clock-o"></span>Absensi</a></li>
<li><a href="<?php echo site_url('home/hitung')?>"><span class="fa fa-dollar"></span>Penggajian</a></li>


                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user-md"></span> <span class="xn-text"><?php echo $this->session->userdata('nama'); ?></span></a>
                        <ul class="animated zoomIn">

                            <li>

                            </li>
                            <li><a href="<?php echo site_url('home/myschedule/'.$this->session->userdata('nip'))?>"><span class="fa fa-desktop"></span> My Schedule</a></li>
                            <li>  <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span>Log-Out</a>
</li>
                        </ul>
                    </li>
                    <!-- SIGN OUT -->


                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->
