   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add System User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
                     <form method="post" action="send.php">
                          <div class="span12">

							<div class="control-group">
				                    <label class="control-label" for="inputEmail">Location Name</label>
				                       <div class="controls">
				                        <select name="stdev_id" class="chzn-select" required/>
				                         <option></option>
			                            <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			                              while ($row=mysql_fetch_array($result)){ ?>
				                           <option value="<?php echo $row['stdev_id']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				                             <?php } ?>
				                           </select>
				                      </div>
		                       </div>
				
				                    <div class="control-group"> 
					                 <div class="controls">

								    <button name="delete_sudent" class="btn btn-primary"><i class="icon-plus-sign icon-large"></i> Send Location</button>
					                  </div>
				                     </div>
                                </div>
                              </form>
							  
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					