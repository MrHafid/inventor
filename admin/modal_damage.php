	<div id="repair<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Repair Device</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Do you want to Repair this Device</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="repair.php<?php echo '?id='.$id; ?>">Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	
	<div id="Dump<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Dump Device</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Do you want to Dump this Device</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="dump.php<?php echo '?id='.$id; ?>">Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	

