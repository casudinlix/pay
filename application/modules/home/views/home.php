

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
<!-- START WIDGET SLIDER -->
<div class="widget widget-default widget-carousel">
    <div class="owl-carousel" id="owl-example">
        <div>
            <div class="widget-title">Total Karyawan</div>
            <div class="widget-subtitle"></div>
            <div class="widget-int"><?php echo $jumlah ?></div>
        </div>
         
         
    </div>
    <div class="widget-controls">
        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
    </div>
</div>
<!-- END WIDGET SLIDER -->

</div>
<div class="col-md-3">

<!-- START WIDGET MESSAGES -->
<div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo site_url('home/approvecuti/')?>';">
    <div class="widget-item-left">
        <span class="fa fa-check"></span>
    </div>
    <div class="widget-data">
        <div class="widget-int num-count"><?php echo $cuti ?></div>
        <div class="widget-title">Perlu Persetujuan</div>
        <div class="widget-subtitle">Total Karyawan Mengajukan Cuti</div>
    </div>
    <div class="widget-controls">
        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
    </div>
</div>
<div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo site_url("home/listkasbon")?>';">
    <div class="widget-item-left">
        <span class="fa fa-money"></span>
    </div>
    <div class="widget-data">
        <div class="widget-int num-count"><?php echo $kasbon ?></div>
        <div class="widget-title">Permintaan Pinjaman</div>
        <div class="widget-subtitle">Perlu Persetujuan</div>
    </div>
    <div class="widget-controls">
        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
    </div>
</div>

<!-- END WIDGET MESSAGES -->

</div>
<div class="col-md-3">

<!-- START WIDGET REGISTRED -->
<div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo site_url('home/employe')?>';">
    <div class="widget-item-left">
        <span class="fa fa-user"></span>
    </div>
    <div class="widget-data">
        <div class="widget-int num-count"><?php echo $jumlah ?></div>
        <div class="widget-title">Total Karyawan</div>
        <div class="widget-subtitle">Total On your Company</div>
    </div>
    <div class="widget-controls">
        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
    </div>
</div>
<!-- END WIDGET REGISTRED -->
 
</div>
<div class="col-md-3">

<!-- START WIDGET CLOCK -->
<div class="widget widget-info widget-padding-sm">
    <div class="widget-big-int plugin-clock">00:00</div>
    <div class="widget-subtitle plugin-date">Loading...</div>
    <div class="widget-controls">
        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
    </div>
    <div class="widget-buttons widget-c3">
        <div class="col">
            <a href="#"><span class="fa fa-clock-o"></span></a>
        </div>
        <div class="col">
            <a href="#"><span class="fa fa-bell"></span></a>
        </div>
        <div class="col">
            <a href="#"><span class="fa fa-calendar"></span></a>
        </div>
    </div>
</div>
<!-- END WIDGET CLOCK -->

</div>
</div>
<!-- END WIDGETS -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
