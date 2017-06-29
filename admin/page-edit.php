<?php
$title = "Page Manager";
require(__DIR__.'/inc/header.php');
	
	$pid  = $_GET['page_id'];
	$select = "SELECT *from page WHERE id = $pid ";
	$result =  mysql_query($select) or die(mysql_error());
	
	while( $arr = mysql_fetch_assoc($result))
	 {
	 	$pt= $arr['page_title'];
	 	$pc= $arr['page_content'];
	 	$pl= $arr['location'];
	 }
?>
	
 	<div id="menu">
		<?php require(__DIR__.'/inc/menu.php');?>
	</div>
	<div id="content">
		<form method="post" action="controller/page-edit.php" enctype="multipart/form-data">
			<h1>Page Edit</h1>
			<div><input type = "text" name ="id" value = "<?php echo $pid;?>"></div>
			<div><label>Page title</label></div>
			<div><input type="text" name="pagetitle"  value="<?php echo $pt;?>"/></div>
			
			<div><label>Page content</label></div>
			<div><textarea cols = "80" rows = "8" name="pagecontent"><?php echo $pc;?>"</textarea> </div>	
			
			<select name="image" >
				<?php
					$select = "SELECT distinct(location) FROM images";
					$result = mysql_query($select);
					while($arr = mysql_fetch_assoc($result)){
						foreach($arr as $value)
				?>
			<option><?php echo $value."<br/>";?></option>
				<?php
					}
				?>
			</select>
			
			<input type="submit" value="submit"/>
		
			
			