
<?php
$title="CMS";
require(__DIR__.'/inc/header.php');

?>
	<div id="menu">
		<?php require(__DIR__.'/inc/menu.php')?>;
	</div>
	
	<div id="content">
		<form action="" method="post" name="form">
			<?php
				header("location:page.php");
			?>
		</form>
	</div>
	