<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_log'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM activity_log where activity_log_id='$id[$i]'");
}
header("location: activity_log.php");
}
?>