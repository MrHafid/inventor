<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['client']) ||(trim ($_SESSION['client']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['client'];

$client_query = mysql_query("select * from client where client_id = '$session_id'")or die(mysql_error());
$client_row = mysql_fetch_array($client_query);
$client_fullname =$client_row['firstname']." ".$client_row['lastname'];
?>