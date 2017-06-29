<?php
require( __DIR__.'/../../inc/connection.php' );
require( __DIR__.'/../../inc/functions.php' );
	
	$pid =$_GET['page_id'];
	echo $pid;
	$delete = "DELETE FROM page WHERE id = $pid";
	mysql_query($delete) or die(mysql_error());
	header("location:".site_url()."admin/page.php");
	exit;
?>
