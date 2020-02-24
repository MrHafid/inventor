<?php
include('./lib/dbcon.php'); 
dbcon(); 
include('session.php');

$oras = strtotime("now");
$ora = date("Y-m-d",$oras);										
mysql_query("update user_log set
logout_Date = '$ora'												
where admin_id = '$session_id' ")or die(mysql_error());

session_destroy();
header('location:../index.php'); 
?>