<?php
require( __DIR__.'/../../inc/connection.php' );
require( __DIR__.'/../../inc/functions.php' );
	$image  = $_POST['image'];
	$pagetitle = $_POST['pagetitle'];
	$pagecontent = $_POST['pagecontent'];
	$sql = " INSERT INTO page(page_title,page_content,location) VALUES('$pagetitle','$pagecontent','$image') ";
	mysql_query($sql) or die(mysql_error());
	header( "location:".site_url()."admin/page.php" );
	exit;
?>
		