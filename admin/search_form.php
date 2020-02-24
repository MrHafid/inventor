
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Advance Search Form</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search.php">
	
	          <div class="control-group">
		      <label class="control-label" for="inputEmail">Location Name</label>
			  <div class="controls">
			  <select name="stdev_location_name" class="" required/>
			  <option>&larr; Select location &rarr;</option>
			  <?php
				$class_query = mysql_query("select * from stlocation")or die(mysql_error());
				while($location_row = mysql_fetch_array($class_query)){			
				?>
			  <option><?php echo $location_row['stdev_location_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
							
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Device Name</label>
			  <div class="controls">
			  <select name="dev_name" class="" required/>
			  <option>&larr; Select Device Name &rarr;</option>
			  <?php
				$device_query = mysql_query("select * from device_name")or die(mysql_error());
				while($device_row = mysql_fetch_array($device_query)){			
				?>
			  <option><?php echo $device_row['dev_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  			  			
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Device Serial Number</label>
			  <div class="controls">
			  <select name="dev_serial"  class="" required/>
			  <option>&larr; Select Device Serial &rarr;</option>
			  <?php
				$serial_query = mysql_query("select * from stdevice")or die(mysql_error());
				while($row = mysql_fetch_array($serial_query)){			
				?>
			  <option><?php echo $row['dev_serial']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
												
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Search</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search').tooltip('show');
		        $('#search').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
</div>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
</div>
</div>