<?php
$title = "Image Manager";
require(__DIR__.'/inc/header.php');



?>
	<div id="menu">
		<?php 
			require(__DIR__.'/inc/menu.php');
		?>
	</div>
		<div id="content">
			<form method="post" action="controller/mediaupload.php" enctype="multipart/form-data">
				<h1>Choose Image to Upload</h1>
				<div><input type="file" name="image" placeholder="choose image" class = "idata"/></div>	
				<div><input type="submit" value="submit" name="submit" class = "idata"/></div>
			</form>	
		</div>	
	</body>
</html>