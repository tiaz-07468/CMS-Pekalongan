<?php

	include_once "lib/function.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con->authLogin($username,$password);
?>