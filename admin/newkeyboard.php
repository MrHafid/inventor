<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
				  
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'New' and dev_name = 'Keyboard'
		
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kyboard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kboard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbrd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(keyboard)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(kbrd)'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;New Keyboard (s) List</div>
							  <div class="muted pull-right">
								Number of New Keyboard (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">New Keyboard (s) List
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
				<li class="">
					<a href="newdevice.php">All</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'New' and dev_name = 'Keyboard'
		
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kyboard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kboard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbrd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(keyboard)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(kbrd)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="active">
					<a href="newKeyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	          and dev_status = 'New' and dev_name = 'mouse'
		
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'mose'		       
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'mse'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = '(Mouse)'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse/PS2'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse/USB'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse(PS2)'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse(USB)'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse-PS2'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse-USB'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse PS2'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse USB'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'New' and dev_name = 'monitor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'montor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'monitr'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mnitor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mntr'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'MNTR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(monitor)'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(montor)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmonitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'New' and dev_name = 'Central Processing unit (CPU)'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'central processing unit'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'central_processing_unit'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'cpu'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'c_p_u'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'c.p.u.'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'cntral prcessing unit'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'centrl procesing unit'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'central processing nit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cenRal processing unt'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cetral processin unit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cetral_processin_unit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'centralprocessingunit'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'CENTRAL PROCESSING UNIT'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(CPU)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(Central Processing unit (CPU))'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newcpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'New' and dev_name = 'Power supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'power supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'pwer supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'power spply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'pwer suply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'poer Suply'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'powersupply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'power_supply'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'power.supply'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'pwer.spply'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(power supply)'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(powersupply)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(power_supply)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(power-supply)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'POWER SUPPLY'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'New' and dev_name = 'Video Graphic Accelerator (VGA)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'VGA'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(VGA)'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video.Graphic.Accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video-Graphic-Accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video_Graphic_Accelerator'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'VideoGraphicAccelerator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video Graphic'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Vedio Graphic Acelerator'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'VIDEO GRAPHIC ACCELATOR'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vido grphic'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'viDo gRphic Accelarator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vedeo graphic'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'video graphic accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vedio graphic accelerator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'New' and dev_name = 'Power cords'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'Power cord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'power_cord'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(power cord)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'power.cord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(pwer crd)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powr coRd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'ower cord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'power cordss'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'pwer crd'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'POWER CORD'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'poer cd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powe cor'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powercord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'power-cord'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
					<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			    where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'New' and dev_name = 'AVR'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'A.V.R'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic Voltage Regulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic Voltage Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic_Voltage_Regulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic-Voltage-Regulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'avrs'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic v.r'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic voltage R.'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'avregulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic Voltage Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic-Voltage-Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automaticVoltageReactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automaticVoltageRegulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automtic Voltge Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automtic Voltge Regulator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newavr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
		
<div class="block-content collapse in">
<div class="span12">	
<form id="send" method="post">	
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Location Name</label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>
			
	  <div class="control-group"> 
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Send"><i class="icon-share"> Assign Location</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
		 		
	  </div>
 </div>
</div>    
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)	   
	    and dev_status = 'New' and dev_name = 'Keyboard'
		
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'kyboard'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'kboard'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'kbard'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'kbord'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'kbrd'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = '(keyboard)'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = '(kbrd)'		
			   
		ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
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
<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
			
	   }
	});
});
</script>		
			  		
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