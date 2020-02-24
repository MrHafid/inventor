				
	 				<?php 
					$query_yes = mysql_query("select * from notification order by notification.date_of_notification DESC")or die(mysql_error());
					$count_no = mysql_num_rows($query_yes);
		            ?>
					
					<?php 
					$query_no = mysql_query("select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.admin_id  = '$session_id'
					")or die(mysql_error());
					$count_yes = mysql_num_rows($query_no);					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>
