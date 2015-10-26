<?PHP
	session_start();
	if(empty($_SESSION['ID']) || empty($_SESSION['NAME']) || empty($_SESSION['SURNAME'])){
		echo '<script>window.location = "Login2.php";</script>';
	}
?>
Member page
<hr>
<?PHP
	echo "ID : ".$_SESSION['ID']."<br>";
	echo "NAME : ".$_SESSION['NAME']."<br>";
	echo "SURNAME : ".$_SESSION['SURNAME']."<br>";
	echo "<a href='changpassword2.php'>chang password</a><br>";
	echo "<a href='Logout2.php'>Logout</a>";
?>