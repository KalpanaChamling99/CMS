<?php
require(__DIR__.'/../inc/header.php');

?>
	<div id="menu">
		<?php 
			require(__DIR__.'/../inc/menu.php');
		?>
	</div>
		<div id="content">
			<form method="post" action="controller/mediaupload.php" enctype="multipart/form-data">
				<div>
				<input type="file" name="image" placeholder="choose image" class = "idata"></input>
				</div>	
				<div>
					<input type="submit" value="submit" name="submit" class = "idata"></input>
				</div>
			</form>	
		</div>	
	</body>
</html>