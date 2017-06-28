<?php
session_start();
session_destroy();
header("location: http://localhost/CMS/admin/login.php");
exit;
 ?>