 <?php
session_start();
require( __DIR__.'/../inc/connection.php' );
require( __DIR__.'/../inc/functions.php' );
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$query = "SELECT * FROM admin WHERE email='".$email."' AND password='".$pwd."'";
	$result = mysql_query($query) or die(mysql_error());
		if( mysql_num_rows( $result )!=0 ){
			$_SESSION['email']=$email;
			$_SESSION['password']=$pwd;

	header("location:".site_url()."admin/");
	exit;}}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel = "stylesheet" type = "text/css" href ="http://localhost/CMS/assets/css/loginstyle.css" >
	</head>
	<body>
		<form action="" method="post">
			<div id = "content">
				<?php
					$message = " ";
					if(isset($_GET['error'])=="login_first"){
						$message="Login First";}
				?>
				<div><?php echo $message;?></div>
				<div>
					<input type="hidden" name="redirect" value="<?php echo isset($_POST['redirect'])?$_POST['redirect']:''; ?>" />
				</div>	
				<div class = "data">
					<input type="text" name="email" class="ildata" placeholder="Email Here" />
				</div>
				<div class = "data">
					<input type="password" name="pwd" class="ildata"  placeholder="Password Here"  />
				</div>
				<div>
					<input type="submit" alt="submit" id="submit" name="submit" border="0" />
				</div>						
			</div>	
		</form>
	</body>
</html>