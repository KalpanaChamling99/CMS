<?php

$title = "Page Manager";

require(__DIR__.'/inc/header.php');
require(__DIR__.'/../inc/connection.php');
?>

<div id="menu">
	<?php require(__DIR__.'/inc/menu.php');?>
</div>
<div id="content">
	<h1><a href = "page-add.php"> Add page</a></h1>	
	<table>
		<?php
			$select = "  SELECT * FROM page";
			$result = mysql_query( $select ) or die (mysql_error());
			
			while( $arr = mysql_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$arr["id"]."<br/>"."</td>";
				echo "<td>".$arr["page_title"]."<br/>"."</td>";
				echo "<td rows= '8' cols = '80'>".$arr["page_content"]."</td>";
				echo '<td>'.'<a href = "http://localhost/CMS/admin/page-edit.php?page_id='.$arr['id'].'" >EDIT</a></td>';
				echo '<td>'.'<a href = "http://localhost/CMS/admin/controller/page-delete.php?page_id='.$arr['id'].'" onclick="return confirm(\'Are You Sure?\');" >DELETE</a></td>';
				echo "</tr>";
			}	
		?>	 
	</table>
</div>


