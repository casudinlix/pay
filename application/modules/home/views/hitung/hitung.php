
<!-- PAGE TITLE -->
                <div class="page-title">

                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <div class="col-md-4">
    
                                    </div>

                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh" onclick="reload_table()"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                
                                    <table class="table table-bordered" id="table">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="check-all"></th>

                                                <th> Nip</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>Gaji Pokok</th>
                                                
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>


                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
<script>
function printgajih() {
    var url="<?php echo site_url('home')?>";
    window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=1000");
}
</script>