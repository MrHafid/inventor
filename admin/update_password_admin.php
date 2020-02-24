 <?php
 include('./lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update admin1 set password = '$new_password' where admin_id = '$session_id'")or die(mysql_error());
 ?>