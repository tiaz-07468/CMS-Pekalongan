<?php

	if($_COOKIE['username']!= null){
?>
	<h1>Selamat Datang <?php echo $_COOKIE['nama']?> </h1>
	<h2><a href="logout.php">keluar</a></h2>
<?php
	}
	else
	{
		header('location:login.php?err=nologin');
	}
?>