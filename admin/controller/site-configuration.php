<?php
require( __DIR__.'/../../inc/connection.php' );
require( __DIR__.'/../../inc/functions.php' );

$newpassword = $_POST['newpassword'];
if($newpassword!=null){
	$update ="UPDATE admin SET password = '$newpassword'";
	mysql_query($update) or die(mysql_error());
	
	session_destroy();
	header("location:".site_url()."/admin/logout.php");
	exit;
}
else
{
	
	header("location:".site_url()."/admin/site-configuration.php");	
}

