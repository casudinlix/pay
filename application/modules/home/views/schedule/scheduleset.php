
               <!-- START CONTENT FRAME -->
               <div class="content-frame">
                   <!-- START CONTENT FRAME TOP -->
                   <div class="content-frame-top">
                       <div class="page-title">
                           <h2><span class="fa fa-calendar"></span> Calendar</h2>
                       </div>
                       <div class="pull-right">
                           <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                       </div>
                   </div>
                   <!-- END CONTENT FRAME TOP -->

                   <!-- START CONTENT FRAME LEFT -->
                   <div class="content-frame-left">
                        <div class="form-group">
                           <div class="input-group">
                                <div class="input-group-btn">
                                </div>
                           </div>
                       </div>

                       <h4>List shift <span class="fa fa-clock-o"></span></h4>
                       <div class="list-group border-bottom" id="external-events">
<?php foreach ($shift as $key ): ?>
                     <a class="list-group-item external-event"><?php echo $key->sift_name ?> <br><?php echo $key->jam_in ?>-<?php echo $key->jam_out ?></a>
<?php endforeach; ?>

                       </div>

                       <div class="push-up-10">
                           <label class="check">
                            </label>
                       </div>

                       <div class="panel panel-default push-up-10">
                           <div class="panel-body padding-top-0">
                               <h4>Fullcalendar</h4>
                               <p>FullCalendar is a jQuery plugin that provides a full-sized, drag & drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API.</p>
                           </div>
                       </div>
                   </div>
                   <!-- END CONTENT FRAME LEFT -->

                   <!-- START CONTENT FRAME BODY -->
                   <div class="content-frame-body padding-bottom-0">

                       <div class="row">
                           <div class="col-md-12">
                               <div id="alert_holder"></div>
                               <div class="calendar">
                                   <div id="calendar"></div>
                               </div>
                           </div>
                       </div>

                   </div>
                   <!-- END CONTENT FRAME BODY -->

               </div>
               <!-- END CONTENT FRAME -->

           </div>
           <!-- END PAGE CONTENT -->
       </div>
       <!-- END PAGE CONTAINER -->
