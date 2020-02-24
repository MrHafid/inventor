<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('client_sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from client where client_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				         <div class="col-lg-12">
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnails']; ?>"><strong> Welcome!</strong> <?php echo $client_row['firstname']." ".$client_row['lastname'];  ?>
                          </div>
                        </div>
					   				
					  <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
							
                           <div class="block-content collapse in">
				           <div class="span12">
									
				               <?php 
								$stocks = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
								$stocks = mysql_num_rows($stocks);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $stocks; ?>"><?php echo $stocks; ?></div>
                                    <div class="chart-bottom-heading"><strong>All Device Stock (s)</strong>

                                    </div>
									<br/>
									<div class="offset3">
									<a id="view" data-placement="right" title="Click to view" class="btn btn-primary" href="device_stocks.php"><i class="icon-eye-open icon-large"></i> View</a></div>				
                                </div>
								<script type="text/javascript">
		                              $(document).ready(function(){
		                              $('#view').tooltip('show');
		                              $('#view').tooltip('hide');
		                              });
		                             </script> 
			                   
							   
					           <?php 
								$new = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'New' ORDER BY stdevice.id DESC")or die(mysql_error());
								$new = mysql_num_rows($new);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $new; ?>"><?php echo $new; ?></div>
                                    <div class="chart-bottom-heading"><strong> New Device (s) </strong>

                                    </div>
									<br/>
									<div class="offset3">
									<a id="view1" data-placement="right" title="Click to view" class="btn btn-primary" href="newdevice.php"><i class="icon-eye-open icon-large"></i> View</a></div>
                                </div>
								<script type="text/javascript">
		                              $(document).ready(function(){
		                              $('#view1').tooltip('show');
		                              $('#view1').tooltip('hide');
		                              });
		                             </script> 
								
								<?php 
								$damage = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'damage' OR dev_status = 'Damage' ORDER BY stdevice.id DESC")or die(mysql_error());
								$damage = mysql_num_rows($damage);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $damage; ?>"><?php echo $damage; ?></div>
                                    <div class="chart-bottom-heading"><strong> Damage Device (s) </strong>

                                    </div>
									<br/>
									<div class="offset3">
									<a id="view2" data-placement="right" title="Click to view" class="btn btn-primary" href="damage.php"><i class="icon-eye-open icon-large"></i> View</a></div>
                                </div>
								<script type="text/javascript">
		                              $(document).ready(function(){
		                              $('#view2').tooltip('show');
		                              $('#view2').tooltip('hide');
		                              });
		                             </script> 
								
								<?php 
								$device_location = mysql_query("select * from stlocation")or die(mysql_error());
								$device_location = mysql_num_rows($device_location);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $device_location; ?>"><?php echo $device_location; ?></div>
                                    <div class="chart-bottom-heading"><strong> location List </strong>

                                    </div>
									<br/>
									<div class="offset3">
									<a id="view3" data-placement="right" title="Click to view" class="btn btn-primary" href="device_location.php"><i class="icon-eye-open icon-large"></i> View</a></div>
                                </div>
								<script type="text/javascript">
		                              $(document).ready(function(){
		                              $('#view3').tooltip('show');
		                              $('#view3').tooltip('hide');
		                              });
		                             </script> 	
					     
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />		
</html>