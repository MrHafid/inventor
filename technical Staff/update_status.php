<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('newdevice_slidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Update Status</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="Newdevice.php"><i class="icon-arrow-left"></i> Back</a>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>  
		                            </div>
									
									
									 
		                            <div class="block-content collapse in">
									
								    <div class="container-fluid">
                                     <div class="row-fluid">
			 					     <div class="alert alert-danger">
                                     <strong>Note!</strong> Update Status of device didn't display in the New device list.
                                     </div>
									 </div>
									 </div>
									 
									<?php
									$query = mysql_query("select * from stdevice 
									LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
									where id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);									
									?>
									
									 <form class="form-horizontal" method="post">
									 
									   <div class="control-group">
											<label class="control-label" for="inputEmail">Device Name</label>
											<div class="controls">			
												<select id="qtype" name="dev_id" readonly="readonly" required>

													<option value="<?php echo $row['dev_id']; ?>" ><?php echo $row['dev_name']; ?></option>
													<?php
													$device_query = mysql_query("select * from device_name")or die(mysql_error());
													while($query_device_row = mysql_fetch_array($device_query)){
													$dev_name = $row['dev_name'];
													?>
													<option value="<?php echo $query_device_row['dev_id']; ?>"><?php echo $query_device_row['dev_name'];  ?></option>
													<?php } ?>

												</select>
											</div>
										</div>
										
										<div id="hide">
										 <div class="control-group">
											<label class="control-label" for="inputPassword">Device Serial Number</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>" name="dev_serial" placeholder="Device Brand" >
											</div>
										</div>	
										</div>
											
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
											<div class="controls">
											<select value="" name="dev_status" required>
													<option><?php echo $row['dev_status']; ?></option>																										
													<option>Use</option>
												</select>								
											</div>
										</div>
										
								
										<div class="control-group">
										<div class="controls">
										
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script>
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$dev_id = $_POST['dev_id'];
										$dev_status = $_POST['dev_status'];																
									    $dev_serial = $_POST['dev_serial'];	
										
										mysql_query("update stdevice set 
										            dev_id = '$dev_id',																		
													dev_status = '$dev_status',
													dev_serial = '$dev_serial'
													where id = '$get_id' ")or die(mysql_error());
													
					                    mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
										value('$client_fullname','Update $dev_name, Status  $dev_status : Serial Number: $dev_serial' ,NOW(), 'device_stocks.php')")or die(mysql_error());	
										?>
										<script>
										window.location = "newdevice.php";
										$.jGrowl("Device Status Successfully Update", { header: 'Device Status Update' });
										</script>
										<?php
										}
										
										?>
									
								
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

</html>