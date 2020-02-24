				
	 				<?php $query_yes_dump = mysql_query("select * from stdevice where dev_status = 'Dump'")or die(mysql_error());
					$count_dump_no = mysql_num_rows($query_yes_dump);

		
		            ?>
					<?php $query_no_dump = mysql_query("select * from stdevice where dev_status = 'none'					
					")or die(mysql_error());
					$count_yes_dump = mysql_num_rows($query_no_dump);
					
		            ?>
					
					<?php $not_read_dump = $count_dump_no -  $count_yes_dump; ?>
