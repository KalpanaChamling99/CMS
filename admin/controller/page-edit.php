<?php
require( __DIR__.'/../../inc/connection.php' );
require( __DIR__.'/../../inc/functions.php' );

	$pid =$_POST['id'];
	$image  = $_POST['image'];
	$pagetitle = $_POST['pagetitle'];
	$pagecontent = $_POST['pagecontent'];
	$update = " UPDATE page SET page_title = '$pagetitle' , page_content = '$pagecontent'  WHERE id = $pid";
	mysql_query($update) or die(mysql_error());
	echo $pid;
	header("location:".site_url()."/admin/page.php");
	exit;
?>
