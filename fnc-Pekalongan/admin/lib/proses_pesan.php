<?php
	include_once "function.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	$con->inputPesan($nama, $email, $pesan);
		header("location:../../index.php");
	
?>