<?php
$title = "Page Manager";
require(__DIR__.'/inc/header.php');
require( __DIR__.'/../inc/connection.php' );

?>

 	<div id="menu">
		<?php require(__DIR__.'/inc/menu.php');?>
	</div>
		
 	<div id="content">
			<form method="post" action="controller/page-add.php" enctype="multipart/form-data">
				<h1><?php echo $title;?></h1>
				<div><label>Page title</label></div>
				<div><input type="text" name="pagetitle"/></div>	
				
				<div><label>Page content</label></div>
				<div><textarea cols = "80" rows = "8" name="pagecontent">page content</textarea> </div>	
				
				<select name="image" >
					<?php 
						$select = "SELECT distinct(location) FROM images";
						$result = mysql_query($select);
						while($arr = mysql_fetch_assoc($result)){
							foreach($arr as $value)
					?>
					<option><?php echo $value."<br/>"?></option>;
					<?php
						}
					?>
				</select>
				
				<div><input type="submit" value="submit"/></div>
			</form>
		</div>	
	</body>
</html>	
		
			
			