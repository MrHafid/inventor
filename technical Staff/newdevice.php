<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
					            				  
					  <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'New' OR dev_status = 'new'  ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i> New Device List</div>
							 <div class="muted pull-right">
								Number of New Device (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				 <h4 id="sc">New Device (s) List
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
	     <a href="print_new.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 
		 <script type="text/javascript">
		$(document).ready(function(){
		$('#print').tooltip('show');
		$('#print').tooltip('hide');
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	   (select * from location_details where stdevice.id = location_details.id)
		and dev_status='new' ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['dev_name'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-check"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>				
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

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>