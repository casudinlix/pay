
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
                            <a href="<?php echo base_url('home/out')?>" class="btn btn-success btn-lg">YA</a>
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
 <script type="text/javascript" src="<?php echo tema()?>js/plugins/jquery/jquery-ui.min.js"></script>
 <script type="text/javascript" src="<?php echo tema()?>jquery-ui.min.js"></script>
<script src="<?php echo tema();?>jquery.lookupbox.js"></script>
<script src="<?php echo tema();?>jquery.lookupbox1.js"></script>
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
                    $('#nominal').val(''+suggestion.gapok); 

                    
                }
            });
        });
    </script>
<script>
    $(document).ready(function () {
      var site = "<?php echo site_url();?>";
      $("#lookup1").lookupbox({
        title: 'Cari Karyawan',
        url: site+'ajax/hitunggaji/',
        imgLoader: 'Loading...',
        width: 500,
        onItemSelected: function(data){
          $('input[name=nip]').val(data.nip);
          $('input[name=nama]').val(data.nama_lengkap);
          $('input[name=jabatan]').val(data.nama_jabatan);
          $('input[name=gol]').val(data.gol_jabatan);
          $('input[name=gapok]').val(data.gapok);
        },
        tableHeader: ['NIP', 'Nama','Jabatan','Golongan','Gaji']
      });
    });
    </script>
    <script>
    $(document).ready(function () {
      var site = "<?php echo site_url();?>";
      $("#absensi").tampil({
        title: 'Cari Data Absensi',
        url: site+'ajax/absensi/',
        imgLoader: 'Loading...',
        width: 600,
        onItemSelected: function(data){
           

          
          $('input[name=lembur]').val(data.lembur);
          $('input[name=telat]').val(data.telat);

        },
        tableHeader: ['NIP','Periode','Lembur','Telat','Status']
      });
    });
    </script>
    <script>
    $(document).ready(function () {
      var site = "<?php echo site_url();?>";
      $("#pinjaman").lookupbox({
        title: 'Cari Pinjaman Karyawan',
        url: site+'ajax/caripinjaman/',
        imgLoader: 'Loading...',
        width: 500,
        onItemSelected: function(data){
          $('input[name=no]').val(data.no_transaksi);
          $('input[name=nip1]').val(data.nip);
          
        },
        tableHeader: ['No Transaksi', 'NIP','Nama','Nominal','Status Pinjaman']
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
    swal("Gaji Sudah Tersimpan!", "", "success")
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
               
                  swal(" request finished!");
                  reload_insentif();
         


          },
          error: function (xhr, ajaxOptions, thrownError) {
              swal("Error deleting!", "Please try again", "error");
          }

      });

});
}

</script>
<script type="text/javascript">
function hapuspinjaman($d) {
var id = $d;
  swal({
title: "Are you sure?",
text: "You will not be able to recover this Data!"+id,
type: "warning",
showCancelButton: true,
closeOnConfirm: false,
showLoaderOnConfirm: true
},


 function (isConfirm) {



    var url1= "<?php echo site_url('ajax/hapuspinjaman/') ?>";

      if (!isConfirm) return;
      $.ajax({
          url: url1+id,
          type: "POST",

          dataType: "HTML",
          success: function () {
               
                  swal(" request finished!");
                  reload_pinjaman();
         


          },
          error: function (xhr, ajaxOptions, thrownError) {
              swal("Error deleting!", "Please try again", "error");
          }

      });

});
}

</script>
<script type="text/javascript">
function hapuspotongan($d) {
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



    var url1= "<?php echo site_url('ajax/hapuspotongan/') ?>";

      if (!isConfirm) return;
      $.ajax({
          url: url1+id,
          type: "POST",

          dataType: "HTML",
          success: function () {
               
                  swal(" request finished!");
                  reload_potongan();
         


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

  swal(
  {
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


    <!-- Select2 -->
  

    <!-- /Select2 -->
    <!---Untuk jadwal-->

<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';
var uri='<?php echo $this->uri->segment(3)?>'

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/gaji/')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
insentif1 = $('#insentif1').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/insentiflist/'.$this->uri->segment(3))?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
pinjaman = $('#tblpinjaman').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/pinjamanlist/'.$this->uri->segment(3))?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
tabelpotongan = $('#tblpotongan').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/potonganlist/'.$this->uri->segment(3))?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });

tabelslip = $('#tblslip').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/slip/')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
    //datepicker
    $('.tgl').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });


    //check all
    $("#check-all").click(function () {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });

});


function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}function reload_insentif()
{
    insentif1.ajax.reload(null,false); //reload datatable ajax 
}function reload_potongan()
{
    tabelpotongan.ajax.reload(null,false); //reload datatable ajax 
}
function reload_pinjaman(){
pinjaman.ajax.reload(null,false); //reload datatable ajax 
}
function save()
{
    $('#btnSave').text('Menyimpan...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

     
        url = "<?php echo site_url('ajax/tambahinsentif/')?>";
    
        
     

    // ajax adding data to database
    var formData = new FormData($('#insentif')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                
                reload_insentif();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
 $('[nip="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                     

                }
            }
            $('#btnSave').text('Tambah'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            swal("Gagal Menambahkan!", "Isi Data Dengan Lengkap", "error");

            $('#btnSave').text('Tambah'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}
function savepinjaman()
{
    $('#btnSavepinjaman').text('Menyimpan...'); //change button text
    $('#btnSavepinjaman').attr('disabled',true); //set button disable 
    var url;

     
        url = "<?php echo site_url('ajax/tambahpinjaman/')?>";
    
        
     

    // ajax adding data to database
    var formData = new FormData($('#formpinjaman')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                
                reload_pinjaman();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
 $('[nip="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                     

                }
            }
            $('#btnSavepinjaman').text('Tambah'); //change button text
            $('#btnSavepinjaman').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            swal("Gagal Menambahkan!", "Isi Data Dengan Lengkap", "error");

            $('#btnSavepinjaman').text('Tambah'); //change button text
            $('#btnSavepinjaman').attr('disabled',false); //set button enable 

        }
    });
}

function savepotongan()
{
    $('#btnSavepotongan').text('Menyimpan...'); //change button text
    $('#btnSavepotongan').attr('disabled',true); //set button disable 
    var url;

     
        url = "<?php echo site_url('ajax/tambahpotongan/')?>";
    
        
     

    // ajax adding data to database
    var formData = new FormData($('#formpotongan')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                
                reload_potongan();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
 $('[nip="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                     

                }
            }
            $('#btnSavepotongan').text('Tambah'); //change button text
            $('#btnSavepotongan').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            swal("Gagal Menambahkan!", "Isi Data Dengan Lengkap", "error");

            $('#btnSavepotongan').text('Tambah'); //change button text
            $('#btnSavepotongan').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function bulk_delete()
{
    var list_id = [];
    $(".data-check:checked").each(function() {
            list_id.push(this.value);
    });
    if(list_id.length > 0)
    {

        swal({
  title: "Apakah Anda Yakin?",
  text: "Data Gaji Ini Akan Di simpan dan tidak dapat di edit kembali",
  type: "info",
  showCancelButton: true,
  confirmButtonClass: "btn-success",
  confirmButtonText: "Ya!",
  cancelButtonText: "Tidak",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
$.ajax({
                type: "POST",
                data: {id:list_id},
                url: "<?php echo site_url('ajax/ajax_bulk_delete')?>",
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                      
                        reload_table();
                    }
                    else
                    {
                         swal("Error Gagal!", "", "error");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    swal("Error POSTING!", "", "error");
                    reload_table();
                }
            });


    swal("Posting!", "Data Gaji Sudah Terposting.", "success");


  } else {
    swal("Cancelled", "Cek Kembali Data Anda :)", "error");
  }
});
        
      }else
    {
         swal("Error!", "Pilih Data Terlebih Dahulu", "error");
    }

       } 
           

</script>
    </body>
</html>
