<?php
 	 include('./lib/dbcon.php'); 
     dbcon();
	include('session.php');
	$id=$_POST['selector'];
 	$stdev_id  = $_POST['stdev_id'];


	if ($id == '' ){ 
	header("location: device_location.php");
	?>
	

	<?php }else{
	
	$query = mysql_query("select * from location_details order by ld_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$ld_id  = $row['ld_id'];
	

    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
	$oras = strtotime("now");
	$ora = date("Y-m-d",$oras);
    mysql_query("insert location_details (id,stdev_id,date_deployment) values('$id[$i]','$stdev_id','$ora')")or die(mysql_error());
	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Assign Device id $id[$i] to location id $stdev_id')")or die(mysql_error());		
    }
    header("location: device_location.php");
    }  
?>
	
	

	
	