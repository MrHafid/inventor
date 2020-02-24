<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$dev_name = $_POST['dev_name'];
$dev_serial = $_POST['dev_serial'];
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('advance_search_slidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Advance Search Result List</strong>
                       </div>
			        </div>
				
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $count_item=mysql_query("select * from stdevice
				             LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		                     LEFT JOIN location_details ON stdevice.id = location_details.id		
		                     LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
		                     where dev_name LIKE '%$dev_name%' 							
							 and dev_serial LIKE '%$dev_serial%'");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Device Search Result List</div>
                          <div class="muted pull-right">
								Number of Search Device : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
  <h4 id="sc">Device List 
    <div align="right" id="sc">Date:
		<?php
            $date = new DateTime();
             echo $date->format('l, F jS, Y');
        ?></div>
  </h4>
  
<br/>
 	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Device Serial Number  </th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>
					<th>location Name </th>
                    					
		    </tr>
		</thead>
<tbody>
<?php
		$search_query = mysql_query("select * from stdevice			
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		LEFT JOIN location_details ON stdevice.id = location_details.id		
		LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
		where dev_name LIKE '%$dev_name%' 		
		and dev_serial LIKE '%$dev_serial%'")or die(mysql_error());
		while($row = mysql_fetch_array($search_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
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
			<td><?php echo $row['stdev_location_name']; ?></td>
						
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