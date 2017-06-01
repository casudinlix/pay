 <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Slip Gaji <b><?php echo $nama->nama_lengkap?></b>--<?php echo $nama->nip?></h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions datatable">
                                            <thead>
                                                <tr>
                                                     
                                                    <th width="100">ID Gaji</th>
                                                    <th width="100">Bulan Gaji</th>
                                                    <th width="100">Status Gaji</th>
                                                      
                                                    <th width="10">Print</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <?php foreach($gaji as $key):?>
                                                        <?php  $id=$key->id_gaji?>
                                                        <?php  $nip=$key->nip?>
     <td colspan="" rowspan="" headers=""><?php echo $key->id_gaji?></td>
        <td colspan="" rowspan="" headers=""><?php echo tgl_indo($key->bulan_gaji)?></td>
       <td colspan="" rowspan="" headers=""><?php echo $key->status?></td> 
       <td colspan="" rowspan="" headers=""><button id="<?php echo $key->id_gaji."/".$key->nip?>" class="btn btn-success" onclick="printgajih(this.id)"><i class="fa fa-print"></i></button></td>

                                                </tr>
   
                                            <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                                            <!-- END DEFAULT DATATABLE -->
<script>
function printgajih(id) {
      
    var url="<?php echo site_url('gajiprint/print/')?>"+id;
    window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=1000");
}
</script>