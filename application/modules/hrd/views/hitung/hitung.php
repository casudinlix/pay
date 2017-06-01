
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
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>

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
<?php $no=1;
 foreach($gaji as $key):?>                                            
<td colspan="" rowspan="" headers=""><?php echo $no?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nip?></td>

<td colspan="" rowspan="" headers=""><?php echo $key->nama_lengkap?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->nama_jabatan?></td>
<td colspan="" rowspan="" headers=""><?php echo $key->gol_jabatan?></td>
<td colspan="" rowspan="" headers="">Rp.<?php echo number_format($key->gapok)?></td>

<td colspan="" rowspan="" headers="">
   
    <a title="Tambah Transaksi" href="<?php echo site_url('hrd/hitunggaji/'.$key->nip."/".$key->gol_jabatan."/".$idgaji)?>" class='btn btn-info'><i class="fa fa-plus"></i></a>
</td>
</tr>

<?php 
$no++;
endforeach;
?>       
<button class="btn btn-success" onclick="printgajih('')"><i class="fa fa-print"></i></button>                                 </tbody>
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