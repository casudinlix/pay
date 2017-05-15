
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Hitung Gaji</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"></h3>
                                </div>
                                <div class="panel-body">
  <form class="form-group" action="" method="">
  <input type="text" name="tgl" placeholder="Tanggal Gaji" required="" class="form-control datepicker">

<input type="text" name="nip" id="cari" placeholder="NIP" required="" class="form-control cari hutang">
<br>
<br>
<select name="insentif" class="form-control">
    <option value=""></option>
    <option value="">1</option>
    <option value="">2</option>
    <option value="">3</option>
    <option value="">4</option>
    
</select>
<br>
<input type="submit" name="" value="Submit" placeholder="" class="btn btn-success">

<br>
<br>

                                                            
                                </div>
                            </div>
                            <!-- END BASIC TABLE SAMPLE -->

                            

                        </div>
                        <div class="col-md-6">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Deatail</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th>Nama Lengkap</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>Gaji Pokok</th>
                                                <th>Total Hari Kerja</th>
                                                <th colspan="" rowspan="" headers="" scope="">Kasbon</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
 <td><input type="text" name="nama" id="nama_lengkap" placeholder="" required="" class="form-control cari" readonly="">
</td>
  <td><input type="text" name="jabatan" id="nama_jabatan" placeholder="" required="" class="form-control cari" readonly="">
</td>
  <td><input type="text" name="gol" id="gol_jabatan" placeholder="" required="" class="form-control cari" readonly=""></td>
                                            
<td colspan="" rowspan="" headers=""><input type="text" name="nom" id="nominal" placeholder="" required="" class="form-control cari" readonly="">
</td>
<td colspan="" rowspan="" headers=""><?php echo $absen->num_rows()?></td>
<td colspan="" rowspan="" headers=""> <input type="text" name="kas" id="kasbon" placeholder="" required="" class="form-control cari" readonly="">   </td>
</tr>                                            
                                        </tbody>
                                </table>                                
                                </div>
                            </div>
                            <!-- END STRIPED TABLE SAMPLE -->

                            
                       </form>    

                        </div>
                    </div>


                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Rekap Semua Data</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="100">Nama Lengkap</th>
                                                    <th width="100">Jabatan</th>
                                                    <th width="100">Golongan</th>
                                                    <th width="100">Gaji Pokok</th>
                                                    <th width="100">Tl Hari Kerja</th>
                                                    <th width="100">Ijin</th>
                                                    <th width="100">Mangkir</th>
                                                    
                                                    <th width="100">Cuti</th>
                                                     <th width="100">Telat</th>
                                                      <th width="100">Lembur</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                <?php foreach($all->result() as $key):?>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap?></td>                                                    
<td colspan="" rowspan="" headers=""><?php echo $key->nama_jabatan?></td>                                                    
<td colspan="" rowspan="" headers=""><?php echo $key->gol_jabatan?></td>                                                    
<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->nominal)?></td>                                                    
<td colspan="" rowspan="" headers=""><?php echo $absen->num_rows()?> Hari</td>                                                    
<td colspan="" rowspan="" headers=""><?php echo $ijin->num_rows()?> Hari</td>                                                    
<td colspan="" rowspan="" headers=""><?php echo $alpha->num_rows()?> Hari</td>
<td colspan="" rowspan="" headers=""><?php echo $cuti->num_rows()?> Hari</td>
<td colspan="" rowspan="" headers="">
<?php foreach($hitung as $key):?>
<?php echo $key->telat?>
<?php endforeach;?>
</td>                                                    
<?php endforeach;?>                                                 </tr> 
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    