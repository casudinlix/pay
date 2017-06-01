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
                        <a href="#"><span class="fa fa-cogs fa-spin"></span> <span class="xn-text">Master</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="<?php echo site_url('hrd/employe')?>"><span class="fa fa-users"></span>Karyawan</a></li>
                            <li><a href="<?php echo site_url('hrd/jabatan')?>"><span class="fa fa-group"></span>Jabatan</a></li>
                            
                            <li><a href="<?php echo site_url('hrd/company/1')?>"><span class="fa fa-building-o"></span>Company Profile</a></li>





                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Management</span></a>
                        <ul class="animated zoomIn">
                          <li class="">
<li> <a href="<?php echo site_url('hrd/attendance')?>"><span class="fa fa-clock-o"></span>Absensi Karyawan</a></li>
<li> <a href="<?php echo site_url('hrd/listleave')?>"><span class="glyphicon glyphicon-new-window"></span>Jatah Cuti</a></li>

                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-check"></span> <span class="xn-text">Approval</span></a>
                        <ul class="animated zoomIn">

                            <li> <a href="<?php echo site_url('hrd/approvecuti')?>"><span class="fa fa-calendar-o"></span>Cuti</a></li>
                            <li> <a href="<?php echo site_url('hrd/listkasbon')?>"><span class="fa fa-money"></span>Pinjaman</a></li>                            


                        </ul>
                    </li>

                    

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-o"></span> <span class="xn-text">Laporan</span></a>
                        <ul class="animated zoomIn">


                            <li><a href="<?php echo site_url('hrd/lapkaryawan')?>"><span class="fa fa-archive"></span>Data Karyawan</a></li>
                            <li><a href="<?php echo site_url('hrd/lapabsensi')?>"><span class="fa fa-clock-o"></span>Absensi</a></li>  
                            <li><a href="<?php echo site_url('hrd/lapkasbon')?>"><span class="fa fa-money"></span>Pinjaman</a></li>                                                      
                            <li><a href="<?php echo site_url('hrd/ditelslip/'.$this->session->userdata('nip'))?>"><span class="fa fa-file-o"></span>Slip Gaji</a></li>
                            <li><a href="<?php echo site_url('hrd/lappenggajian')?>"><span class="fa fa-dollar"></span>Penggajian</a></li>


                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Data Saya</span></a>
                        <ul class="animated zoomIn">
                            <li>
                                <a href="<?php echo site_url('hrd/absen/'.$this->session->userdata('nip'))?>"><span class="fa fa-clock-o"></span>Absensi Saya</a>
                            <a href="<?php echo site_url('hrd/leave/'.$this->session->userdata('nip')) ?>"><span class="fa fa-calendar-o"></span>Aju Cuti</a>
                            <li><a href="<?php echo site_url('hrd/kasbon/'.$this->session->userdata('nip'))?>"><span class="fa fa-money"></span>Aju Pinjaman</a></li>
                            </li>

                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text"><?php echo $this->session->userdata('nama'); ?></span></a>
                        <ul class="animated zoomIn">

                            
                           
                            <li>  <a href="" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span>Keluar</a>
</li>
                        </ul>
                    </li>
                    <!-- SIGN OUT -->


                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->
