<?php
$title ="site configuration";

require(__DIR__.'/inc/header.php');
?>

 	<div id="menu">
		<?php require(__DIR__.'/inc/menu.php');?>
	</div>
		
 	<div id="content">
 		<form method="post" action="controller/site-configuration.php">
 			<h1><?php echo $title;?></h1>
			<div><input type="password" name="newpassword" class="ildata" placeholder="new Password"/>
			</div>
			<div><input type="submit" value="submit" class="ildata"/></div>
		</form>
	</div>			
				