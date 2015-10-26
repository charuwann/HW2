<?PHP
	session_start();
	session_destroy();
	echo '<script>window.location = "Login2.php";</script>';
?>