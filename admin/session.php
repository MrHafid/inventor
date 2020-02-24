<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['id'];

$user_query = mysql_query("SELECT * FROM admin1 WHERE admin_id = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$admin_username = $user_row['username'];
?>