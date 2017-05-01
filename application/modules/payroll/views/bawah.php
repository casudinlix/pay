
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('payroll/out')?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo tema()?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo tema()?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
  <script type="text/javascript" src="<?php echo tema();?>jquery.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo tema();?>select2/dist/js/select2.full.min.js"></script>
        <!-- END PLUGINS -->
<script src="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo tema()?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?php echo tema()?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo tema()?>js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo tema()?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo tema()?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='<?php echo tema()?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/owl/owl.carousel.min.js"></script>

        <script type="text/javascript" src="<?php echo tema()?>js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
      <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
      <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
      <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="<?php echo tema()?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
            <script type="text/javascript" src="<?php echo tema()?>js/plugins/fileinput/fileinput.min.js"></script>
            <script type="text/javascript" src="<?php echo tema()?>js/plugins/filetree/jqueryFileTree.js"></script>
        <!-- END PAGE PLUGINS -->


        <script type="text/javascript" src="<?php echo tema();?>js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
<!--Untuk alert-->
<?php if ($this->session->flashdata('sukses')): ?>
  <script type="text/javascript">
    swal("Data Saved!", "You clicked the button!", "success")
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('update')): ?>
  <script type="text/javascript">
    swal("Data Updated!", "You clicked the button!", "success")
  </script>
<?php endif; ?>
<!-- End Untuk alert-->
<!--Untuk dropzone-->
<script type="text/javascript">

Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo site_url('home/uploadphoto') ?>",

maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type filNot Allowed",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.nip="<?php echo $this->uri->segment(3) ?>";
	c.append("token",a.nip); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.nip;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo site_url('home/remove_foto') ?>",
		cache:false,
		dataType: 'json',
		success: function(){
			console.log("Foto terhapus");
		},
		error: function(){
			console.log("Error");

		}
	});
});


</script>


<script type="text/javascript">
function deletpoto($d) {
var id = $d;
  swal({
title: "Are you sure?",
text: "You will not be able to recover this Photo!",
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('home/deletpoto/') ?>";

      if (!isConfirm) return;
      $.ajax({
          url: url1+id,
          type: "POST",

          dataType: "HTML",
          success: function () {
              setTimeout(function () {
                  swal(" request finished!");
                  window.location.reload();
        }, 4000);


          },
          error: function (xhr, ajaxOptions, thrownError) {
              swal("Error deleting!", "Please try again", "error");
          }

      });

});
}

</script>

<!--End Untuk dropzone-->
    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a Religion",
          allowClear: true
        });
        $(".bank").select2({
          placeholder: "Select a bank",
          allowClear: true
        });
        $(".edu").select2({
          placeholder: "Select a Education",
          allowClear: true
        });
        $(".idtype").select2({
          placeholder: "Select a Type ID",
          allowClear: true
        });
        $(".typeemploye").select2({
          placeholder: "Select a Type",
          allowClear: true
        });
        $(".bank").select2({
          placeholder: "Select a Bank",
          allowClear: true
        });
        $(".sex").select2({
          placeholder: "Select a Sex",
          allowClear: true
        });
        $(".level").select2({
          placeholder: "Select a Level",
          allowClear: true
        });
        $(".job").select2({
          placeholder: "Select a Jobdesk",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>

    <!-- /Select2 -->
    </body>
</html>
