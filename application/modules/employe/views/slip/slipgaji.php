
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
                                
                                    <table class="table tblslip" id="tblslipemp">
                                        <thead>
                                            <tr>
                                                 
 
                                                <th> ID Gaji</th>
                                                <th>Bulan Gaji</th>
                                                <th>Nip</th>
                                                <th>Nama Karyawan</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>Status Gaji</th>
                                                
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                 </tbody>
                                    </table>
                                </div>
                            </div>
 <script>
function printgajih(id) {
      
    var url="<?php echo site_url('gajiprint/print/')?>"+id;
    window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=1000");
}
</script>