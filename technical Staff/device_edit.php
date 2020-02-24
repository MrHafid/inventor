<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									 <a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Add Device</a>
		                              <script type="text/javascript">
		                              $(document).ready(function(){
		                              $('#add').tooltip('show');
		                              $('#add').tooltip('hide');
		                              });
		                             </script> 
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">									
									
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
												<select id="qtype" name="dev_id" required>

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
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Device Brand</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_brand']; ?>" name="dev_brand" id="inputPassword" placeholder="Device Brand" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Inventory Code</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Device Model</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_model']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" required>
											</div>
										</div>
												
										<div id="hide">
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
											<div class="controls">
											<select value="" name="dev_status" required>
													<option><?php echo $row['dev_status']; ?></option>													
												</select>								
											</div>
										</div>
									   </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="dev_desc" id="ckeditor_full">
													<?php echo $row['dev_desc']; ?>
													</textarea>
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
										$dev_desc = $_POST['dev_desc'];
										$dev_serial = $_POST['dev_serial'];
										$dev_brand = $_POST['dev_brand'];
										$dev_model = $_POST['dev_model'];
										$dev_status = $_POST['dev_status'];
										
										
									
										mysql_query("update stdevice set dev_id = '$dev_id' ,
																		dev_desc = '$dev_desc',
																		dev_serial  = '$dev_serial',
																		dev_brand = '$dev_brand',
																		dev_model = '$dev_model',
																		dev_status = '$dev_status'
																		where id = '$get_id' ")or die(mysql_error());
																																			   
										mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Edit device $dev_name, Serial Number: $dev_serial',NOW(),'device_stocks.php')")or die(mysql_error());	
										?>
										<script>										
										window.location = "device_stocks.php";
										$.jGrowl("Device Successfully Update", { header: 'Device update' });
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