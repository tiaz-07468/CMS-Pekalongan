	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div><!--/.row-->
			
		<div class="row" style="padding-top: 30px;">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Berita <?php echo $res['berita']; ?></div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Galeri <?php echo $res['galeri']; ?></div>
                                     <div>&nbsp;</div>
                               </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Koordinasi <?php echo $res['sanggar']; ?></div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Kegiatan <?php echo $res['event']; ?></div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <!-- define the calendar element -->
                    <div id="my-calendar"></div>

                    <!-- initialize the calendar on ready -->
                    <script type="application/javascript">
                      $(document).ready(function () {
                        $("#my-calendar").zabuto_calendar({
                          cell_border: true,
                          today: true,
                          show_days: true,
                          weekstartson: 0,
                          nav_icon: {
                            prev: '<i class="fa fa-chevron-circle-left"></i>',
                            next: '<i class="fa fa-chevron-circle-right"></i>'
                          },
                          legend: [
                            {type: "text", label: "Special event", badge: "00"},
                            {type: "spacer"},
                            {type: "block", label: "Regular event", badge: "01"},
                          ],
                          ajax: {
                              url: "<?php echo base_url()."admin/event" ?>",
                              modal: true
                          }
                        });
                      });
                    </script>                        
                </div>

            </div>
		
		</div><!--/.row-->
	</div>	<!--/.main-->