<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
     <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of All Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Device Stock List 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>  							  
<br/>														
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_all_stock.php" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>  
		 <script type="text/javascript">
		$(document).ready(function(){
		$('#print').tooltip('show');
		$('#print').tooltip('hide');
		});
		</script>
        <a href="add_Device.php" class="btn btn-info"  id="add" data-placement="top" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Add Device</a>
		<script type="text/javascript">
		  $(document).ready(function(){
		  $('#add').tooltip('show');
		  $('#add').tooltip('hide');
		  });
		  </script> 		
       </div>
   </div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code </th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>					
                    <th class="empty"></th>						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$dev_id = $row['dev_id'];
		?>
										
		<tr>
		<td><?php
			   $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query2);
		       if($row['dev_status']=='New')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='New')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i> </a></td>
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>