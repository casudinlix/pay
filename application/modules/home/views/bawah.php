
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Ke <strong>luar</strong> ?</div>
                    <div class="mb-content">
                        <p>Anda yakin ingin keluar?</p>
                        <p>Tekan Tidak jika Anda ingin terus bekerja. Tekan Ya untuk logout pengguna saat ini.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('hrd/out')?>" class="btn btn-success btn-lg">YA</a>
                            <button class="btn btn-default btn-lg mb-control-close">TIDAK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <script src="<?php echo tema();?>jquery.js"></script>
        <!-- END MESSAGE BOX-->

        <div class="modal" id="detail" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="largeModalHead">Detail Employe</h4>
                                <form class="form-horizontal" role="form">
                                                                  <div class="form-group">
                                                                      <div class="col-md-8">
                                                                          <input type="text" placeholder=".col-md-12" class="form-control" id="name" readonly=""/>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <div class="col-md-8">
                                                                          <input type="text" placeholder=".col-md-8" class="form-control" id="nip" readonly=""/>
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <input type="text" placeholder=".col-md-4" class="form-control" id="jabatan" readonly=""/>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <div class="col-md-6">
                                                                          <input type="text" placeholder=".col-md-6" class="form-control" id="phone" readonly=""/>
                                                                      </div>
                                                                      <div class="col-md-3">
                                                                          <input type="text" placeholder=".col-md-3" class="form-control" id="level" readonly=""/>
                                                                      </div>
                                                                      <div class="col-md-3">
                                                                          <input type="text" placeholder=".col-md-3" class="form-control" id="golongan" readonly=""/>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <div class="col-md-12">
                                                                          <textarea name="name" rows="8" cols="80" id="address" class="form-control" readonly=""></textarea>
                                                                      </div>
                                                                    </div>

                                                              </form>

                            </div>

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo tema()?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo tema()?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->


        <script type="text/javascript" src="<?php echo tema()?>js/plugins/jquery/jquery-ui.min.js"></script>

        <script type='text/javascript' src='<?php echo tema()?>js/plugins/icheck/icheck.min.js'></script>
        <script type='text/javascript' src='<?php echo tema();?>js/jquery.autocomplete.js'></script>


        <script type="text/javascript" src="<?php echo tema()?>js/plugins/bootstrap/bootstrap.min.js"></script>

        <!-- END PLUGINS -->
<script src="<?php echo tema();?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo tema();?>js/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo tema();?>select2/dist/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>
  <script type="text/javascript" src="<?php echo tema();?>js/plugins/jquery/jquery-migrate.min.js"></script>
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

 <script type="text/javascript" src="<?php echo tema()?>js/plugins/datatables/jquery.dataTables.min.js"></script>

<script src='<?php echo tema()?>js/fullcalendar.min.js'></script>
<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="<?php echo tema()?>js/plugins/tableexport/jspdf/libs/base64.js"></script>
        <script type="text/javascript" src="<?php echo tema();?>js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo tema();?>date/jquery.dataTables.yadcf.js"></script>

        <script type="text/javascript" src="<?php echo tema()?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/actions.js"></script>
        <script type="text/javascript" src="<?php echo tema()?>js/demo_tables.js"></script>

        <script>
            $(document).ready(function() {
                // Untuk sunting
                $('#detail').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)

                    // Isi nilai pada field

                    modal.find('#jabatan').attr("value",div.data('jabatan'));
                      modal.find('#nip').attr("value",div.data('nip'));
                        modal.find('#name').attr("value",div.data('name'));
                          modal.find('#phone').attr("value",div.data('phone'));
                            modal.find('#address').attr("value",div.data('address'));
                              modal.find('#email').attr("value",div.data('email'));
                              modal.find('#level').attr("value",div.data('level'));
                              modal.find('#golongan').attr("value",div.data('golongan'));

                });
            });
        </script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!--Untuk kalender-->
    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/home/set',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#jamin').val(''+suggestion.jam_in); // membuat id 'v_nim' untuk ditampilkan
                    $('#jamout').val(''+suggestion.jam_out); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
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
     <script type="text/javascript" charset="utf-8" async defer>
            
            $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="intensif[]" class="form-control"/><a href="#" class="remove_field ">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
        </script>
     <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.cari').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'ajax/hitunggaji',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#nip').val(''+suggestion.nip); 
                    $('#nama_lengkap').val(''+suggestion.nama_lengkap); 
                    $('#nama_jabatan').val(''+suggestion.nama_jabatan); 
                    $('#gol_jabatan').val(''+suggestion.gol_jabatan); 
                    $('#nominal').val(''+suggestion.nominal); 

                    
                }
            });
        });
    </script>

     <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.hutang').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'ajax/hutang',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#nip').val(''+suggestion.hutang); 
                    $('#kasbon').val(''+suggestion.nominal_kasbon); 

                    
                }
            });
        });
    </script>
    
        <!-- END Untuk kalender-->
        <script>
           $(function(){
               $("#file-simple").fileinput({
                       showUpload: true,
                       script: "<?php echo site_url('home/import/')?>",
                       showCaption: false,
                       browseClass: "btn btn-warning",
                       fileType: "csv"
               });
               $("#filetree").fileTree({
                   root: '/',
                   script: 'assets/filetree/jqueryFileTree.php',
                   expandSpeed: 100,
                   collapseSpeed: 100,
                   multiFolder: false
               }, function(file) {
                   alert(file);
               }, function(dir){
                   setTimeout(function(){
                       page_content_onresize();
                   },200);
               });
           });
       </script>
   <!-- END SCRIPTS -->
<!--Untuk alert-->
<?php if ($this->session->flashdata('gaji')): ?>
  <script type="text/javascript">
    swal("Gaji Sudah Terposting!", "", "success")
  </script>

<?php endif; ?>
<?php if ($this->session->flashdata('jadwal')): ?>
  <script type="text/javascript">
    swal("Schedule Exis", "You clicked the button!", "error")
  </script>

<?php endif; ?>
<?php if ($this->session->flashdata('potongcuti')): ?>
  <script type="text/javascript">
    swal("Cuti Sudah Terposting", "You clicked the button!", "success")
  </script>

<?php endif; ?>

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
<script type="text/javascript">
function hapusinsentif($d) {
var id = $d;
  swal({
title: "Are you sure?",
text: "You will not be able to recover this Dta!"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('ajax/hapusinsentif/') ?>";

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
<script type="text/javascript">
function jadwal($d) {
var id = $d;

  swal({
title: "Are you sure?",
text: "You will not be able to recover this !"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('home/deletjadwal/') ?>";

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
<script type="text/javascript">
function posting($d) {
var id = $d;

  swal({
title: "Are you sure?",
text: "You will not be able to recover this !"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('ajax/postingajucuti/') ?>";

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
              swal("Error Posting!", "Please try again", "error");
          }

      });

});
}

</script>
<script type="text/javascript">
function kasbon($d) {
var id = $d;

  swal({
title: "Are you sure?",
text: "You will not be able to recover this !"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('ajax/kasbon/') ?>";

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
<script type="text/javascript">
function approvekasbon($d) {
var id = $d;

  swal({
title: "Are you sure?",
text: "You will not be able to recover this !"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('ajax/approvekasbon/') ?>";

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
<script type="text/javascript">

    function hap($d) {
    var id = $d;

      swal({
    title: "Are you sure?",
    text: id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('ajax/cuti/') ?>";

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

<script type="text/javascript">

    function approve($d) {
    var id = $d;

      swal({
    title: "Are you sure?",
    text: "Posting This?"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('ajax/approve/') ?>";

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
<script type="text/javascript">
$(".table1").dataTable({
    "sPaginationType": "full_numbers"


});

$(".table1").on('page.dt',function () {
    onresize(100);

});
</script>

<script type="text/javascript" charset="utf-8" async defer>
  
  
</script>
    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a Religion",
          allowClear: true
        });
$(".insentif").select2({
          placeholder: "Pilih Insentif",
          allowClear: true
        });
$(".pot").select2({
          placeholder: "Pinjaman",
          allowClear: true
        });
        $(".bank").select2({
          placeholder: "Select a bank",
          allowClear: true
        });
        
        $(".jabatan1").select2({
          placeholder: "Select a Jobs",
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
        $(".nikah").select2({
          placeholder: "Select a Status",
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
    <!---Untuk jadwal-->

    </body>
</html>
