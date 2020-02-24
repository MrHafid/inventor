<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'damage' OR dev_status = 'Damage' ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Damage device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Damage device Stock List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>			  
                  							  
  <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="damage.php">All</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Keyboard' and dev_status = 'damage' OR dev_name = 'keyboard'  and dev_status = 'damage'
			   OR dev_name = 'KEYBOARD'  and dev_status = 'damage' OR dev_name = 'kyboard'  and dev_status = 'damage' OR dev_name = 'kboard'  and dev_status = 'damage'
			   OR dev_name = 'kbard'  and dev_status = 'damage'  OR dev_name = 'kbord'  and dev_status = 'damage' OR dev_name = 'kbrd' and dev_status = 'damage'
			   OR dev_name = '(keyboard)'  and dev_status = 'damage' OR dev_name = '(kbrd)'  and dev_status = 'damage'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>							
				<li class="">
					<a href="damage_keyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'damage'    and dev_name = 'mouse'       OR dev_status = 'damage'  and dev_name = 'Mouse'       OR dev_status = 'damage' and dev_name = 'muse'
			   OR dev_status = 'damage'    and dev_name = 'mose'        OR dev_status = 'damage'  and dev_name = 'mse'         OR dev_status = 'damage' and dev_name = 'MOUSE' 
			   OR dev_status = 'damage'    and dev_name = '(Mouse)'
			   OR dev_status = 'damage'    and dev_name = 'Mouse/PS2'    OR dev_status = 'damage'  and dev_name = 'Mouse/USB'  OR dev_status = 'damage' and dev_name = 'Mouse(PS2)' 
			   OR dev_status = 'damage'    and dev_name = 'Mouse(USB)'   OR dev_status = 'damage'  and dev_name = 'Mouse-PS2'  OR dev_status = 'damage' and dev_name = 'Mouse-USB'  
			   OR dev_status = 'damage'    and dev_name = 'Mouse PS2'    OR dev_status = 'damage'  and dev_name = 'Mouse USB' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_mouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'damage' and dev_name = 'monitor' OR dev_status = 'damage' and dev_name = 'montor'
			   OR dev_status = 'damage' and dev_name = 'Monitor' OR dev_status = 'damage' and dev_name = 'monitr' OR dev_status = 'damage' and dev_name = 'mnitor'
			   OR dev_status = 'damage' and dev_name = 'mntr' OR dev_status = 'damage' and dev_name = 'MNTR' OR dev_status = 'damage' and dev_name = '(monitor)'
			   OR dev_status = 'damage' and dev_name = '(montor)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_monitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'damage' and dev_name = 'Central Processing unit (CPU)' OR dev_status = 'damage' and dev_name = 'central processing unit'
			   OR dev_status = 'damage' and dev_name = 'central_processing_unit' OR dev_status = 'damage' and dev_name = 'cpu' OR dev_status = 'damage' and dev_name = 'c_p_u' OR dev_status = 'damage' and dev_name = 'c.p.u.'
			   OR dev_status = 'damage' and dev_name = 'cntral prcessing unit' OR dev_status = 'damage' and dev_name = 'centrl procesing unit' OR dev_status = 'damage' and dev_name = 'central processing nit'
			   OR dev_status = 'damage' and dev_name = 'cenRal processing unt' OR dev_status = 'damage' and dev_name = 'cetral processin unit' OR dev_status = 'damage' and dev_name = 'cetral_processin_unit'
			   OR dev_status = 'damage' and dev_name = 'centralprocessingunit' OR dev_status = 'damage' and dev_name = 'CENTRAL PROCESSING UNIT' OR dev_status = 'damage' and dev_name = '(CPU)' 
			   OR dev_status = 'damage' and dev_name = '(Central Processing unit (CPU))'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'damage' and dev_name = 'Power supply' OR dev_status = 'damage' and dev_name = 'power supply' 
			   OR dev_status = 'damage' and dev_name = 'pwer supply' OR dev_status = 'damage' and dev_name = 'power spply' OR dev_status = 'damage' and dev_name = 'pwer suply'
			   OR dev_status = 'damage' and dev_name = 'poer Suply'  OR dev_status = 'damage' and dev_name = 'powersupply' OR dev_status = 'damage' and dev_name = 'power_supply'
			   OR dev_status = 'damage' and dev_name = 'power.supply' OR dev_status = 'damage' and dev_name = 'pwer.spply' OR dev_status = 'damage' and dev_name = '(power supply)'
			   OR dev_status = 'damage' and dev_name = '(powersupply)' OR dev_status = 'damage' and dev_name = '(power_supply)'  OR dev_status = 'damage' and dev_name = '(power-supply)'
			   OR dev_status = 'damage' and dev_name = 'POWER SUPPLY'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'damage' and dev_name = 'Video Graphic Accelerator (VGA)' OR dev_status = 'damage' and dev_name = 'VGA' OR dev_status = 'damage' and dev_name = '(VGA)'
			   OR dev_status = 'damage' and dev_name = 'Video.Graphic.Accelerator' OR dev_status = 'damage' and dev_name = 'Video-Graphic-Accelerator' OR dev_status = 'damage' and dev_name = 'Video_Graphic_Accelerator'
			   OR dev_status = 'damage' and dev_name = 'VideoGraphicAccelerator' OR dev_status = 'damage' and dev_name = 'Video Graphic' OR dev_status = 'damage' and dev_name = 'Vedio Graphic Acelerator' OR dev_status = 'damage' and dev_name = 'VIDEO GRAPHIC ACCELATOR'
			   OR dev_status = 'damage' and dev_name = 'VIDEO+GRAPHIC+ACCELATOR' OR dev_status = 'damage' and dev_name = 'vido grphic' OR dev_status = 'damage' and dev_name = 'viDo gRphic Accelarator'
			   OR dev_status = 'New' and dev_name = 'vedeo graphic' OR dev_status = 'damage' and dev_name = 'video graphic accelerator'OR dev_status = 'damage' and dev_name = 'vedio graphic accelerator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_vga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'damage' and dev_name = 'Power cords' OR dev_status = 'damage' and dev_name = 'power cord' OR dev_status = 'damage' and dev_name = 'power_cord'
			   OR dev_status = 'damage' and dev_name = '(power cord)' OR dev_status = 'damage' and dev_name = 'power.cord' OR dev_status = 'damage' and dev_name = '(pwer crd)' OR dev_status = 'damage' and dev_name = 'powr coRd'
			   OR dev_status = 'damage' and dev_name = 'ower cord' OR dev_status = 'damage' and dev_name = 'power cordss' OR dev_status = 'damage' and dev_name = 'pwer crd' OR dev_status = 'damage' and dev_name = 'POWER CORD'
			   OR dev_status = 'damage' and dev_name = 'poer cd' OR dev_status = 'damage' and dev_name = 'powe cor'OR dev_status = 'damage' and dev_name = 'powercord'OR dev_status = 'damage' and dev_name = 'power-cord'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'damage'    and dev_name = 'AVR'                          OR dev_status = 'damage'     and dev_name = 'A.V.R' 
			OR dev_status = 'damage'    and dev_name = 'automatic Voltage Regulator'  OR dev_status = 'damage'     and dev_name = 'automatic Voltage Reactor' 
		    OR dev_status = 'damage'    and dev_name = 'automatic_Voltage_Regulator'  OR dev_status = 'damage'     and dev_name = 'automatic-Voltage-Regulator' 
			OR dev_status = 'damage'    and dev_name = 'avrs'                         OR dev_status = 'damage'     and dev_name = 'automatic v.r' 
			OR dev_status = 'damage'    and dev_name = 'automatic voltage R.'         OR dev_status = 'damage'     and dev_name = 'avregulator' 
			OR dev_status = 'damage'    and dev_name = 'automatic Voltage Reactor'    OR dev_status = 'damage'     and dev_name = 'automatic-Voltage-Reactor' 
			OR dev_status = 'damage'    and dev_name = 'automaticVoltageReactor'      OR dev_status = 'damage'     and dev_name = 'automaticVoltageRegulator'
			OR dev_status = 'damage'    and dev_name = 'automtic Voltge Reactor'      OR dev_status = 'damage'     and dev_name = 'automtic Voltge Regulator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_avr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
															
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_damage.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 	 
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
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>
					<th>location Name </th>
					<th class="empty"></th>
					<th class="empty"></th>					
                    					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice			
		                     LEFT JOIN location_details ON stdevice.id = location_details.id		
		                     LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
							 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
							 where dev_status = 'damage' ORDER BY location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Damage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($dev_status == 'Repaired' ){ ?>
			<td><a class="btn btn-success">Repaired</a></td>	
			<?php }else if ($dev_status == 'Damage' ) { ?>
			<td><a rel="tooltip" title="Repair" id="e<?php echo $id; ?>" href="#repair<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><div class="hide">Damage</div>Repair</a></td>
			<?php }else{ ?>			
			<?php } ?>
			<td><a rel="tooltip" title="Dump" id="t<?php echo $id; ?>" href="#Dump<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger">DUMP</a></td>
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