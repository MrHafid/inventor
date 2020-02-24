   <div class="row-fluid">					  
       <a href="location.php" class="btn btn-info"id="add" data-placement="right" title="Click to Add Location" ><i class="icon-plus-sign icon-large"></i> Add location</a>
	               <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Location</div>
                            </div>
							<?php
							$query = mysql_query("select * from stlocation where stdev_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="stdev_location_name" value="<?php echo $row['stdev_location_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "location Name" required>
                                          </div>
                                        </div>
	
									<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Save"><i class="icon-save icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$stdev_location_name = $_POST['stdev_location_name'];

mysql_query("update stlocation set stdev_location_name = '$stdev_location_name' where stdev_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit location $stdev_location_name')")or die(mysql_error());
?>

<script>
$.jGrowl("location Successfully Update", { header: 'Location update' });
window.location = "location.php";
</script>
<?php

}
?>