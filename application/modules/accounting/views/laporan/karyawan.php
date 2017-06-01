
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Laporan Data Karyawan</h3>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                             <li><a href="#" onClick ="$('#karyawan').tableExport({type:'excel',escape:'false'});"><img src='<?php echo export()?>xls.png' width="24"/> XLS</a></li>
                                        <li class="divider"></li>

                                        <li><a href="#" onClick ="$('#karyawan').tableExport({type:'doc',escape:'false'});"><img src='<?php echo export()?>word.png' width="24"/> Word</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#" onClick ="$('#karyawan').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body table-responsive">
                                    <table id="karyawan" class="table table-bordered table-striped table-actions datatable">
                                        <thead>
                                            <tr>
                                              
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tanggal Bergabung</th>
                                                <th>Agama</th>
                                                <th>Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>No Rekening</th>
                                                <th>Bank</th>
                                                <th>Pendidikan</th>
                                                <th width="100">Alamat</th>
                                                <th>Email</th>
                                                <th>No Hp</th>
                                                <th>No Identitas</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
<?php $no=1;
foreach($all as $key):?>                                            
                                                
                                                <td colspan="" rowspan="" headers=""><?php echo $key->nip?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_lahir)?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->tgl_bergabung)?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->agama?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->jk?></td>

                                                <td colspan="" rowspan="" headers=""><?php echo $key->nama_jabatan?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->gol_jabatan?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->no_rek?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->bank?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->pendidikan?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->alm_tinggal?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->email?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->no_hp?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->no_id?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->jenis_id?></td>
                                                <td colspan="" rowspan="" headers=""><?php echo $key->status?></td>
                                            </tr>
<?php $no++;
 endforeach;?>                                            
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            
                         