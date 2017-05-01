
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Sortable Tables</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
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
                                                <th>Name</th>
                                                <th>Nominal</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th colspan="" rowspan="" headers="" scope="">Approve By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $no=1;
                                                foreach($all as $key):?>
                                                    <td><?php echo $no?></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                                    <td colspan="" rowspan="" headers=""></td>
                                            </tr>
                                            
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->