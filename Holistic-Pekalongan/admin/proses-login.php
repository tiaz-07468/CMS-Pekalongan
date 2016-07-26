<?php
	include_once "libs/function.php";
	$username = $_POST['user'];
	$password = $_POST['password'];
	$con->authLogin($username,$password);
?>