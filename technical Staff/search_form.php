<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Advance Search Form</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search.php">
	
			  <div class="control-group">
			  <label class="control-label" for="inputEmail"> Location Name</label>
			  <div class="controls">
			  <input type="text" name="stdev_location_name" id="inputEmail" placeholder="Location Name" >
			  </div>
			  </div>
			  			 						
			  <div class="control-group">
			  <label class="control-label" for="inputEmail"> Device Name</label>
			  <div class="controls">
			  <input type="text" name="dev_name" id="inputEmail" placeholder="Device Name" >
			  </div>
			  </div>
				
			   <div class="control-group">
			   <label class="control-label" for="inputPassword"> Device Serial Number</label>
			   <div class="controls">
			   <input type="text" name="dev_serial" id="inputPassword" placeholder="Device Serial Number">
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