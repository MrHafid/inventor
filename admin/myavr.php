<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['stdev_id']; ?><!-----------------------------------get device location details------------------------------------>	
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('device_location_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Click to return" ><i class="icon-arrow-left icon-large"></i> Back</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#return').tooltip('show');
		              $('#return').tooltip('hide');
		              });
		             </script>
					 
					    <!-----------------------------------sc logo for print------------------------------------>	
						<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
						
						<?php $location_query = mysql_query("select * from stlocation	                     
	                     where stdev_id = '$get_id'")or die(mysql_error());
	                     $location_row = mysql_fetch_array($location_query);
	                    ?>
						
            <!-------------------------------block ------------------------------>
            <div id="block_bg" class="block">
                  <div class="navbar navbar-inner block-header">							
							  <div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>
							  
               <div id="" class="muted pull-right">
				<?php 
				$my_device = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'AVR'                           and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'A.V.R'                          and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic Voltage Reactor'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic_Voltage_Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Regulator'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'avrs'                          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic v.r'                  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic voltage R.'          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'avregulator'                    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Reactor'     and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Reactor'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automaticVoltageReactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automaticVoltageRegulator'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automtic Voltge Reactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automtic Voltge Regulator'      and stdev_id = '$get_id'")or die(mysql_error());
				$count_my_device = mysql_num_rows($my_device);?>
				Number of Device: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
				</div>								
              </div>
							
<!-----------------------------------for Print display visible------------------------------------>								
<h4 id="sc">Location:<?php echo $location_row['stdev_location_name']; ?> AVR List
<div align="right" id="sc">Date:
<?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?></div>
</h4>

 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
 <!-----------------------------------device categorized by their location details using nav pills------------------------------------>	
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<?php	
	            $my_device = mysql_query("select * from location_details	                                                    
                LEFT JOIN stdevice ON location_details.id = stdevice.id 
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                 and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_device);
			    ?>
				<li class="">
				<a href= 'mydevice.php<?php echo '?stdev_id='.$get_id; ?>')">All&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
					
				</li>
				
			<?php	
	          $my_keyboard = mysql_query("select * from location_details    
	          LEFT JOIN stdevice ON location_details.id = stdevice.id
			  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			  where NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'Keyboard'  and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'keyboard'    and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
		      and dev_name = 'kyboard'   and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kboard'      and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kbard'      and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kbord'       and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kbrd'      and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = '(keyboard)'  and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = '(kbrd)'    and stdev_id = '$get_id' ")or die(mysql_error());
			  $count = mysql_num_rows($my_keyboard);
			  ?>
              					
				<li class="">			
				    <a href= 'myKeyboard.php<?php echo '?stdev_id='.$get_id; ?>')">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_mouse = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Mouse'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'mouse'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'muse'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
               (select * from location_details where dev_status='Dump')
				and dev_name = 'mose'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'mse'       and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'MOUSE'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(Mouse)'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse/PS2'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse/USB' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse(PS2)' and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse(USB)'and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse-PS2'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse-USB' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse PS2'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Mouse USB' and stdev_id = '$get_id' 
				")or die(mysql_error());
			    $count = mysql_num_rows($my_mouse);
               ?>
				<li class="">			
				    <a href= 'mymouse.php<?php echo '?stdev_id='.$get_id; ?>')">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>				
				
			   <?php	
	            $my_monitor = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Monitor'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'monitor'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'montor'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'monitr'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'mnitor'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'mntr'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'MNTR'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(monitor)' and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(montor)' and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_monitor);
               ?>
			   
				<li class="">			
				    <a href= 'mymonitor.php<?php echo '?stdev_id='.$get_id; ?>')">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				 <?php	
	            $my_cpu = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Central Processing unit (CPU)'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'central processing unit'          and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'central_processing_unit'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'cpu'       and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'c_p_u'                        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'c.p.u.'                           and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'cntral prcessing unit'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'centrl procesing unit'            and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'central processing nit'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'cenRal processing unt'            and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'cetral processin unit'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'cetral_processin_unit'            and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'centralprocessingunit'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(CPU)'                            and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'CENTRAL PROCESSING UNIT'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(Central Processing unit (CPU))'  and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_cpu);
               ?>
				<li class="">			
				    <a href= 'mycpu.php<?php echo '?stdev_id='.$get_id; ?>')">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
              <?php	
	            $my_power_supply = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Power Supply'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'power supply'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'pwer supply'    and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'power spply'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'pwer suply'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'poer Suply'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'powersupply'    and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'power_supply'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'power.supply'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'pwer.spply'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = '(power supply)' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(powersupply)'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(power_supply)' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(power-supply)'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'POWER SUPPLY'   and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_power_supply);
               ?>			
				<li class="">			
				    <a href= 'mypower_supply.php<?php echo '?stdev_id='.$get_id; ?>')">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'Video Graphic Accelerator (VGA)'   and stdev_id = '$get_id' 
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'VGA'                         and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = '(VGA)'                          and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Video.Graphic.Accelerator'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Video-Graphic-Accelerator'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Video_Graphic_Accelerator'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'VideoGraphicAccelerator'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Video Graphic'               and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Vedio Graphic Acelerator'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'VIDEO GRAPHIC ACCELATOR'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'vido grphic'                 and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'viDo gRphic Accelarator'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'video graphic accelarator'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'vedeo graphic'                  and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'video graphic accelerator'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'videographicaccelerator'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'vedio graphic accelerator'   and stdev_id = '$get_id'")or die(mysql_error());
			    $count = mysql_num_rows($my_vga);
               ?>
				<li class="">			
				    <a href= 'myvga.php<?php echo '?stdev_id='.$get_id; ?>')">VGA&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Power Cords'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
				and dev_name = 'power cord'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'power_cord'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(power cord)'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'power.cord'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(pwer crd)'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'powr coRd'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'ower cord'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'power cordss'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'pwer crd'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'POWER CORD'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'poer cd'       and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'powercord'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'power-cord'    and stdev_id = '$get_id'")or die(mysql_error());
			    $count = mysql_num_rows($my_vga);
               ?>				
				<li class="">			
				    <a href= 'mypower_cord.php<?php echo '?stdev_id='.$get_id; ?>')">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_avr = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'AVR'                           and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'A.V.R'                          and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic Voltage Reactor'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic_Voltage_Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Regulator'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'avrs'                          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic v.r'                  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic voltage R.'          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'avregulator'                    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Reactor'     and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Reactor'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automaticVoltageReactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automaticVoltageRegulator'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automtic Voltge Reactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automtic Voltge Regulator'      and stdev_id = '$get_id'
			    ")or die(mysql_error());
			    $count = mysql_num_rows($my_avr);
               ?>				
				<li class ="active">			
				    <a href= 'myavr.php<?php echo '?stdev_id='.$get_id; ?>')">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				</ul>
	 </div>
   </div>
</div>

<div class="block-content collapse in">
<div class="span12">
	<form action="" method="post"><!-----------------------------------table form------------------------------------>	
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		     <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Date Assign   </th>	
					<th>Device Status </th> 				
                    <th>Location Name </th>
					<th class="empty">Manage Device</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------table Content------------------------------------>									
 <?php
$my_device = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'AVR'                           and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				 and dev_name = 'A.V.R'                          and stdev_id = '$get_id'
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic Voltage Reactor'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic_Voltage_Regulator'   and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Regulator'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'avrs'                          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic v.r'                  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic voltage R.'          and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'avregulator'                    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Reactor'     and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Reactor'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automaticVoltageReactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automaticVoltageRegulator'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'automtic Voltge Reactor'       and stdev_id = '$get_id'   
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'automtic Voltge Regulator'      and stdev_id = '$get_id'")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$id = $row['id'];		                                               
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
			<td><?php echo $row['date_deployment']; ?></td>
			<td><?php
			   $my_device1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($my_device1);
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
			<td><?php echo $location_row['stdev_location_name']; ?></td>
			
			<?php include('toolttip_edit_delete.php'); ?>
			<td width="185" class="empty"><a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" href="transfer.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>
			<a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="devlavr_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Status</a></td>			
		</tr>
											
	<?php } ?>   
</tbody>
</table>
</form>	
 <!---------------------------------------------------- /block --------------------------------------------->
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