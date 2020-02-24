
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Technology Resource Inventory System">
    <meta name="author" content="Jonremus Sevellejo">

<link rel="shortcut icon" href="admin/images/logo.png" />

</head>
<?php include('header_dashboard.php'); ?>
     <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">			
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-left">&nbsp;About</div><div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
									$(document).ready(function(){
									$('#return').tooltip('show');
									$('#return').tooltip('hide');
									});
									</script> 
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php
											$mission_query = mysql_query("select * from content where title  = 'mission' ")or die(mysql_error());
											$mission_row = mysql_fetch_array($mission_query);
											echo $mission_row['content'];
										?>
								<hr>
										<?php
											$vision_query = mysql_query("select * from content where title  = 'vision' ")or die(mysql_error());
											$vision_row = mysql_fetch_array($vision_query);
											echo $vision_row['content'];
										?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>		
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>