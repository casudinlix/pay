
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
    <a href="<?php echo site_url('home/hitunggaji')?>"  <button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Tambah Transaksi Gaji</button></a>
                                    </div>

                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th> ID Gaji</th>
                                                <th> Bulan Gaji</th>
                                                <th> Nip</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>Potongan</th>
                                                <th>Total Gaji</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
<?php $no=1;
 foreach($gaji as $key):?>                                            
<td colspan="" rowspan="" headers=""><?php echo $no?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->id_gaji?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->bulan_gaji?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nip?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_jabatan?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->gol_jabatan?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->potongan?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->total_gaji?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->status_gaji?></td>
<td colspan="" rowspan="" headers="">
    <button class="btn btn-success" onclick="printgajih('$key->id_gaji')"><i class="fa fa-print"></i></button>
</td>
</tr>

<?php 
$id=$key->id_gaji;
endforeach;
$no++;?>                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
<script>
function printgajih() {
    var url="<?php echo site_url('home')?>";
    window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=1000");
}
</script>