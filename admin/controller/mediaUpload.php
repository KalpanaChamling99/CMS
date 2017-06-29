<?php
require( __DIR__.'/../../inc/connection.php' );
require( __DIR__.'/../../inc/functions.php' );
	
if (isset($_POST['submit'])) {
	move_uploaded_file( $_FILES["image"]["tmp_name"], __DIR__."/../../uploads/" . basename($_FILES["image"]["name"]) );			
	$location=$_FILES["image"]["name"];
	$sql = "INSERT INTO images (location) VALUES ('$location')";
	mysql_query($sql) or die(mysql_error());
	header("location:".__DIR__."/../media.php");
}