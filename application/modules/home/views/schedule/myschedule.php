
<!-- PAGE TITLE -->
               <div class="page-title">
                 <div class="panel-heading">
                                                     <div class="btn-group pull-right">
                                                         <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i> Export Shcedule</button>
                                                         <ul class="dropdown-menu">
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'json',escape:'false'});"><img src='<?php echo export()?>json.png' width="24"/> JSON</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='<?php echo export()?>json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'json',escape:'true'});"><img src='<?php echo export()?>json.png' width="24"/> JSON (with Escape)</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'xml',escape:'false'});"><img src='<?php echo export()?>xml.png' width="24"/> XML</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'sql'});"><img src='<?php echo export()?>sql.png' width="24"/> SQL</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'csv',escape:'false'});"><img src='<?php echo export()?>csv.png' width="24"/> CSV</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'txt',escape:'false'});"><img src='<?php echo export()?>txt.png' width="24"/> TXT</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'excel',escape:'false'});"><img src='<?php echo export()?>xls.png' width="24"/> XLS</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'doc',escape:'false'});"><img src='<?php echo export()?>word.png' width="24"/> Word</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo export()?>ppt.png' width="24"/> PowerPoint</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'png',escape:'false'});"><img src='<?php echo export()?>png.png' width="24"/> PNG</a></li>
                                                             <li><a href="#" onClick ="$('#jadwal').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo export()?>pdf.png' width="24"/> PDF</a></li>
                                                         </ul>
                                                     </div>

                                                 </div>
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
                                   <table class="table table-bordered datatable" id="jadwal">
                                       <thead>
                                           <tr>
                                            <th>Date</th>

<th>Shift</th><th>IN</th><th>Out</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                                         <tr>

  <?php foreach ($jadwal as $key): ?>
    <td><?php echo $key->aktual_date ?></td>
    <td><?php echo $key->shift ?></td><td><?php echo $key->aktual_in ?></td><td><?php echo $key->aktual_out ?></td>
        </tr>
  <?php endforeach; ?>

                                     </tbody>
                                   </table>


                               </div>
                           </div>
                           <!-- END DEFAULT DATATABLE -->
