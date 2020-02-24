<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysql_query("SELECT * FROM admin1 WHERE admin_id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Welcome!</strong> <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
                
                           <?php 
								$stocks = mysql_query("select * from stdevice
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
								$stocks = mysql_num_rows($stocks);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $stocks; ?>"><?php echo $stocks; ?></div>
                                    <div class="chart-bottom-heading"><strong>All Device Stock (s)</strong>

                                    </div>
                                </div>
								
								<?php 
								$new = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'New' ORDER BY stdevice.id DESC")or die(mysql_error());
								$new = mysql_num_rows($new);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $new; ?>"><?php echo $new; ?></div>
                                    <div class="chart-bottom-heading"><strong> New Device (s) </strong>

                                    </div>
                                </div>
								
								<?php 
								$damage = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'damage' OR dev_status = 'Damage' ORDER BY stdevice.id DESC")or die(mysql_error());
								$damage = mysql_num_rows($damage);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $damage; ?>"><?php echo $damage; ?></div>
                                    <div class="chart-bottom-heading"><strong> Damage Device (s) </strong>

                                    </div>
                                </div>
								
								<?php 
								$device_location = mysql_query("select * from location_details")or die(mysql_error());
								$device_location = mysql_num_rows($device_location);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $device_location; ?>"><?php echo $device_location; ?></div>
                                    <div class="chart-bottom-heading"><strong> Device (s) Assign </strong>

                                    </div>
                                </div>
								
								<?php 
								$keyboard = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Keyboard' OR dev_name = 'keyboard' OR dev_name = 'KEYBOARD'
			                    OR dev_name = 'kyboard' OR dev_name = 'kboard' OR dev_name = 'kbard' OR dev_name = 'kbord'OR dev_name = 'kbrd' OR dev_name = '(keyboard)'
			                    OR dev_name = '(kbrd)' ")or die(mysql_error());
								$keyboard = mysql_num_rows($keyboard);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $keyboard; ?>"><?php echo $keyboard; ?></div>
                                    <div class="chart-bottom-heading"><strong>Keyboard</strong>

                                    </div>
                                </div>
								
								<?php 
								$Mouse = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Mouse' OR dev_name = 'mouse'
                                OR dev_name = 'muse' OR dev_name = 'mose'OR dev_name = 'mse' OR dev_name = 'MOUSE' OR dev_name = '(Mouse)'
			                    OR dev_name = 'Mouse/PS2' OR dev_name = 'Mouse/USB' OR dev_name = 'Mouse(PS2)' OR dev_name = 'Mouse(USB)' 
			                    OR dev_name = 'Mouse-PS2' OR dev_name = 'Mouse-USB' OR dev_name = 'Mouse PS2' OR dev_name = 'Mouse USB' 
			                    ORDER BY stdevice.id DESC")or die(mysql_error());
								$Mouse = mysql_num_rows($Mouse);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $Mouse; ?>"><?php echo $Mouse; ?></div>
                                    <div class="chart-bottom-heading"><strong>Mouse</strong>

                                    </div>
                                </div>
								
								<?php 
								$Monitor = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Monitor' OR dev_name = 'monitor'
                                 OR dev_name = 'montor' OR dev_name = 'monitr' OR dev_name = 'mnitor' OR dev_name = 'mntr' OR dev_name = 'MNTR'
			                     OR dev_name = '(monitor)' OR dev_name = '(montor)' ")or die(mysql_error());
								$Monitor = mysql_num_rows($Monitor);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $Monitor; ?>"><?php echo $Monitor; ?></div>
                                    <div class="chart-bottom-heading"><strong>Monitor</strong>

                                    </div>
                                </div>



								
								<?php 
								$CPU = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Central Processing unit (CPU)' 
								OR dev_name = 'central processing unit' OR dev_name = 'central_processing_unit'
			                    OR dev_name = 'cpu' OR dev_name = 'c_p_u' OR dev_name = 'c.p.u.'   
								OR dev_name = 'cntral prcessing unit' OR dev_name = 'centrl procesing unit'
								OR dev_name = 'central processing nit'
			                    OR dev_name = 'cenRal processing unt' OR dev_name = 'cetral processin unit' OR dev_name = 'cetral_processin_unit' 
								OR dev_name = 'centralprocessingunit' OR dev_name = 'CENTRAL PROCESSING UNIT'
			                    OR dev_name = '(CPU)' OR dev_name = '(Central Processing unit (CPU))' ")or die(mysql_error());
								$CPU = mysql_num_rows($CPU);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $CPU; ?>"><?php echo $CPU; ?></div>
                                    <div class="chart-bottom-heading"><strong>Central Processing unit (CPU)</strong>

                                    </div>
                                </div>
								
								<?php 
								$power_supply = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Power Supply' OR dev_name = 'power supply'
			                    OR dev_name = 'pwer supply' OR dev_name = 'power spply' OR dev_name = 'pwer suply' OR dev_name = 'poer Suply'
			                    OR dev_name = 'powersupply' OR dev_name = 'power_supply' OR dev_name = 'power.supply' OR dev_name = 'pwer.spply'
			                    OR dev_name = '(power supply)' OR dev_name = '(powersupply)' OR dev_name = '(power_supply)' 
								OR dev_name = '(power-supply)' OR dev_name = 'POWER SUPPLY' ")or die(mysql_error());
								$power_supply = mysql_num_rows($power_supply);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $power_supply;?>"><?php echo $power_supply;?></div>
                                    <div class="chart-bottom-heading"><strong>Power Supply</strong>

                                    </div>
                                </div>
								
								<?php 
								$vga = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Video Graphic Accelerator (VGA)' OR dev_name = 'VGA'
			                    OR dev_name = '(VGA)' OR dev_name = 'Video.Graphic.Accelerator' OR dev_name = 'Video-Graphic-Accelerator' OR dev_name = 'Video_Graphic_Accelerator'
			                    OR dev_name = 'VideoGraphicAccelerator' OR dev_name = 'Video Graphic' OR dev_name = 'Vedio Graphic Acelerator' OR dev_name = 'VIDEO GRAPHIC ACCELATOR'
			                    OR dev_name = 'VIDEO+GRAPHIC+ACCELATOR' OR dev_name = 'vido grphic' OR dev_name = 'viDo gRphic Accelarator' OR dev_name = 'video graphic accelarator' OR dev_name = 'vedio graphic accelerator'
			                    OR dev_name = 'vedeo graphic' OR dev_name = 'video graphic accelerator'")or die(mysql_error());
								$vga = mysql_num_rows($vga);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $vga; ?>"><?php echo $vga; ?></div>
                                    <div class="chart-bottom-heading"><strong>Video Graphic Accelerator (VGA)</strong>

                                    </div>
                                </div>
								
								<?php 
								$power_cords = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Power Cords' OR dev_name = 'power cord'
			                    OR dev_name = 'power_cord' OR dev_name = '(power cord)' OR dev_name = 'power.cord' OR dev_name = '(pwer crd)'
			                    OR dev_name = 'powr coRd' OR dev_name = 'ower cord' OR dev_name = 'power cordss' OR dev_name = 'pwer crd'
			                    OR dev_name = 'POWER CORD' OR dev_name = 'poer cd' OR dev_name = 'powe cor'  OR dev_name = 'powercord'
								OR dev_name = 'powe cor'  OR dev_name = 'power-cord'")or die(mysql_error());
								$power_cords = mysql_num_rows($power_cords);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $power_cords; ?>"><?php echo $power_cords; ?></div>
                                    <div class="chart-bottom-heading"><strong>Power Cord (s)</strong>

                                    </div>
                                </div>
			 
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />	