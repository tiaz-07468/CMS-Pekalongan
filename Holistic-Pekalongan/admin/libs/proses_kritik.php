<?php
	include_once "function.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
		
		$con->inputKritik($nama, $email, $pesan);
		header("location:../../contact-us.php");
?>