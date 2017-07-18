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
 
        <!-- EOF CSS INCLUDE -->
    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo tema();?>js/jquery.autocomplete.css' rel='stylesheet' />
      <script src="<?php echo tema();?>jquery-1.10.2.min.js"></script>

 <link rel="stylesheet" type="text/css" href="<?php echo tema();?>lookupbox.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo tema();?>lookupbox1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo tema();?>jquery-ui.min.css" />

    </head>
<body>
<form class="form-control" action="<?php echo site_url('aksi_1/cekabsen')?>" accept="ut-8" method="post">
 <input type="month" class="form-control datepicker" name="cek" value="" placeholder="">
  <input type="number" class="form-control datepicker" name="nip" value="" placeholder="">
  <select name="status">
      <option value="">Pilih</option>
      <option value="HADIR">HADIR</option>
<option value="MANGKIR">MANGKIR</option>
  </select>
 <input type="submit" name="xx" value="XX">


</form>


        
        <script type='text/javascript' src='<?php echo tema();?>js/jquery.autocomplete.js'></script>


        <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap.min.js"></script>

        <!-- END PLUGINS -->
<script src="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
        <!-- THIS PAGE PLUGINS -->
       
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/owl/owl.carousel.min.js"></script>

        <script type="text/javascript" src="<?php echo tema()?>js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-colorpicker.js"></script> 
 <script type="text/javascript" src="<?php echo tema()?>js/plugins/jquery/jquery-ui.min.js"></script>
 <script type="text/javascript" src="<?php echo tema()?>jquery-ui.min.js"></script>
<script src="<?php echo tema();?>jquery.lookupbox.js"></script>
<script src="<?php echo tema();?>jquery.lookupbox1.js"></script>
 <script type="text/javascript" src="<?php echo tema()?>js/plugins/datatables/jquery.dataTables.min.js"></script>
 

         </script>
    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.nip').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/ajax/cek',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#nip').val(''+suggestion.nip); // membuat id 'v_nim' untuk ditampilkan
                     // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
    </script>
 
        
       <script type="text/javascript">
$(".xx").dataTable({
    "sPaginationType": "full_numbers"


});

$(".xx").on('page.dt',function () {
    onresize(100);

});
 

    </script>   
</body>

    </html>