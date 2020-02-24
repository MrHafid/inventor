 <?php
 include('../admin/lib/dbcon.php');
dbcon();
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $thumbnails = "uploads/" . $_FILES["image"]["name"];
								
								mysql_query("update client set thumbnails = '$thumbnails' where client_id  = '$session_id' ")or die(mysql_error());
								
								?>
 
								<script>
								window.location = "dashboard_client.php";  
								</script>

                       <?php     }  ?>