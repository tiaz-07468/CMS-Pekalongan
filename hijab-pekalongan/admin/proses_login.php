<?php

	include_once "lib/function.php";
	$username = $_POST['user'];
	$password = $_POST['password'];

	$con->authLogin($username,$password);
?>