   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add System User" ><i class="icon-plus-sign icon-large"></i> Add System user</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit System User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from admin1 where admin_id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Update"><i class="icon-save icon-large"></i> Update</button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];


mysql_query("update admin1 set username = '$username'  , firstname = '$firstname' , lastname = '$lastname' where admin_id = '$get_id' ")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit system User $firstname')")or die(mysql_error());	
?>
<script>
  window.location = "admin_user.php"; 
  $.jGrowl("System User Successfully Update", { header: 'System User Update' });
</script>
<?php
}
?>