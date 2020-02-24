<?php 
	$my_device = mysql_query("select * from location_details    
	LEFT JOIN stdevice ON location_details.id = stdevice.id
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	where NOT EXISTS 
    (select * from location_details where dev_status='Dump')
    and stdev_id = '$stdev_id' ")or die(mysql_error());
	$count_yes = mysql_num_rows($my_device);
?>

<?php 
	$my_device = mysql_query("select * from location_details    
	LEFT JOIN stdevice ON location_details.id = stdevice.id
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	where NOT EXISTS 
    (select * from location_details where dev_status='Dump')
    and stdev_id =''")or die(mysql_error());
	$count_no = mysql_num_rows($my_device);
?>

<?php $not_count = $count_yes -  $count_no; ?>