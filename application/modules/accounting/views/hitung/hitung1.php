
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
      <button class="btn btn-success" onclick="bulk_delete()"><i class="glyphicon glyphicon-check"></i>POSTING</button>
     <a href="<?php echo site_url('accounting/hitunggaji/'.$idgaji)?>" title=""> <button class="btn btn-info" ><i class="fa fa-plus-square"></i>Input Gaji Karyawan</button></a>
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
                                                 

                                                <th> ID Gaji</th>
                                                <th>Bulan Gaji</th>
                                                <th>NIP</th>
                                                <th>Nama Karyawan</th>
                                                <th> Jabatan</th>
                                                <th> Golongan</th>
                                                <th> Status</th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>


                                </div>
                            </div>
